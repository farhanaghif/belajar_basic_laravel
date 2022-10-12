<?php

namespace App\Http\Controllers;

use App\Exports\ProjectsExport;
use App\Imports\ProjectsImport;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataProject = Project::with('leader')->withCount('jumlahTask')->get();
        return view('project.index', compact('dataProject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'leader_id' => 'required|integer',
            'owner' => 'required|string',
            'deadline' => 'required|date',
            'progress' => 'required|integer',
            'description' => 'required|string'
        ]);
        Project::create($data);
        activity()->log('Tambah Project');
        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('test');
        $project = Project::with('jumlahTask')->findOrFail($id);
        $tasks = Task::where('project_id', $project->id)->get();
        activity()->log('View Project');
        return view('project.show', compact('tasks', 'project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $userLeader = User::get();
        return view('project.edit', compact('project', 'userLeader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $video = Project::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string',
            'leader_id' => 'required|integer',
            'owner' => 'required|string',
            'deadline' => 'required|date',
            'progress' => 'required|integer',
            'description' => 'nullable'
        ]);
        $video->update($data);
        activity()->performedOn($video)->log('Edit Project');
        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return redirect()->route('project.index');
    }

    public function export()
    {
        return Excel::download(new ProjectsExport, 'project.xlsx');
    }

    public function import(Request $request)
    {
        Excel::import(new ProjectsImport, $request->file('file'));
        
        return redirect()->back();
    }
}

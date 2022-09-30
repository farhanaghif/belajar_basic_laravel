@extends('layouts.app-nice')

@section('content')
    <div class="pagetitle">
        <h1>Task of Project</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('project.index') }}">Project</a></li>
                <li class="breadcrumb-item active">Task of Project</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p>{{ $project->name }}</p>
                        {{-- <a href="{{ route('project.index') }}">
                            <div class="btn btn-info"><i class="bi bi-back"></i></div>
                        </a> --}}
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <table>
                                <tr>
                                    <td>Owner Project</td>
                                    <td>:</td>
                                    <td class="text-center">{{ $project->owner }}</td>
                                </tr>
                                <tr>
                                    <td>Progress</td>
                                    <td>:</td>
                                    <td class="text-center">{{ $project->progress }}</td>
                                </tr>
                                <tr>
                                    <td>Deadline Project</td>
                                    <td>:</td>
                                    <td class="text-center">{{ $project->deadline }}</td>
                                </tr>
                                <tr>
                                    <td>Handled by</td>
                                    <td>:</td>
                                    <td class="text-center">{{ $project->leader->name }}</td>
                                </tr>
                            </table>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>

                    <div class="card-body">
                        {{ $project->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="text-end m-4">
                </div>
                <div class="table-responsive-md">
                    <table
                        class="table table-striped-columns
                        table-hover	
                        table-borderless
                        table-primary
                        align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Task</th>
                                <th class="text-center">Deskripsi</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr class="table-primary">
                                @foreach ($tasks as $task)
                                    <td class="text-center" scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->description }}</td>
                                    <td>{{ $task->status }}</td>
                                    <td>
                                        <div class="d-flex">
                                            @role('admin')
                                                <a href="">
                                                    <div class="btn btn-info"><i class="bi bi-card-checklist"></i></div>
                                                </a>
                                            @endrole
                                            @role('superadmin')
                                                <a href="">
                                                    <div class="btn btn-warning"><i class="bi bi-pencil-square"></i>
                                                    </div>
                                                </a>
                                                <a href="">
                                                    <div class="btn btn-danger"><i class="bi bi-trash"></i></div>
                                                </a>
                                            @endrole
                                        </div>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

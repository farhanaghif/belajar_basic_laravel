@extends('layouts.app-nice')

@section('content')
    <x-page-title namaPageAktif="Project" />
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @role('superadmin')
                        <div class="card-header">
                            <div class="row d-flex">
                                <form action="{{ route('project.import') }}" method="POST" class="col-8 mb-0 text-end"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file">
                                    <button class="btn btn-secondary">
                                        Import
                                    </button>
                                </form>
                                <form action="{{ route('project.export') }}" class="col-2 mb-0 text-end">
                                    @csrf
                                    <button class="btn btn-primary">
                                        Export
                                    </button>
                                </form>
                                <div class="col-2 text-end">
                                    <div class="text-end btn btn-info" data-bs-toggle="modal" data-bs-target="#modal-create">
                                        Add
                                        @extends('project.modal-form-create')
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endrole
                    <div class="card-body">
                        <div class="table-responsive-md">
                            <table
                                class="datatable table table-striped table-hover table-borderless table-primary align-middle">
                                <thead class="table-light justify-content-between">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Project</th>
                                        <th>Task</th>
                                        <th>Leader</th>
                                        <th>Owner</th>
                                        <th>Progress</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @foreach ($dataProject as $project)
                                        <tr class="table-primary">
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $project->name }}</td>
                                            <td>{{ $project->jumlah_task_count }}</td>
                                            <td>{{ $project->leader->name ?? '' }}</td>
                                            <td>{{ $project->owner }}</td>
                                            <td>{{ $project->progress }}%</td>
                                            <td>
                                                <div class="d-flex align-middle">
                                                    <a href="{{ route('project.show', $project) }}">
                                                        <div class="btn btn-success">
                                                            <i class="bi bi-eye"></i>
                                                        </div>
                                                    </a>
                                                    @role('superadmin')
                                                        <a href="{{ route('project.edit', $project) }}">
                                                            <div class="btn btn-warning">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </div>
                                                        </a>
                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#modal-delete">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                        @extends('project.modal-delete')
                                                    @endrole
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endsection

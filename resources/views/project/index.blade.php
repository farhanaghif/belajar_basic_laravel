@extends('layouts.app-nice')

@section('content')
    <x-page-title namaPageAktif="Project" />
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive-md">
                            <table
                                class="datatable table table-striped table-hover table-borderless table-primary align-middle">
                                @role('superadmin')
                                    <div class="text-end m-4" data-bs-toggle="modal" data-bs-target="#modal-create">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#modal-create">
                                            <i class="bi bi-plus-square-fill"></i>
                                        </button>
                                        @extends('project.modal-form-create')
                                    </div>
                                @endrole
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
                                            <td>{{ $project->leader->name }}</td>
                                            <td>{{ $project->owner }}</td>
                                            <td>{{ $project->progress }}</td>
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

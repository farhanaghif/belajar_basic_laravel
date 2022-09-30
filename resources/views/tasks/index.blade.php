@extends('layouts.app-nice')
@section('content')
    <x-page-title namaPageAktif="Task" />
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="table-responsive-md">
                        <table
                            class="datatable table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th class="text-center">Nama Task</th>
                                    <th>Deskripsi</th>
                                    <th>Status</th>
                                    <th>Last Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($tasks as $task)
                                    <tr class="table-primary">
                                        <td scope="row">{{ $task->id }}</td>
                                        <td>{{ $task->name }}</td>
                                        <td>{{ $task->description }}</td>
                                        <td>{{ $task->status }}</td>
                                        <td>{{ $task->updated_at }}</td>
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
                @endsection

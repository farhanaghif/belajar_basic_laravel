@extends('layouts.app-nice')
@section('content')
    <x-page-title namaPageAktif="Activity Log" />
    <div class="table-responsive">
        <table
            class="datatable table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Description</th>
                    <th>Created at</th>
                    <th>User</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($activities as $activity)
                    <tr class="table-primary">
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $activity->description }}</td>
                        <td>{{ $activity->created_at }}</td>
                        <td>{{ $activity->causer->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

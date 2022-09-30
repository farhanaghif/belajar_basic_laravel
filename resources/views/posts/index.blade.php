@extends('layouts.app-nice')
@section('content')
    <x-page-title namaPageAktif="Post" />
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <div class="row">
                    <div class="col-12 text-end">
                        <a href="{{ route('post.create') }}">
                            <div class="btn btn-info">Tambah</div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Table with stripped rows -->
            <table class="datatable table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Publish</th>
                        <th scope="col">File</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr">
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->publish }}</td>
                            <td>
                                @switch($post->media('image')->first()->mime_type)
                                    @case('image/png')
                                        <img src="{{ $post->getFirstMedia('image')->getUrl() }}" alt="Loading..."
                                            style="width: 100px">
                                    @break

                                    @case('application/pdf')
                                        <a href="{{ $post->getFirstMedia('image')->getUrl() }}">
                                            {{ $post->media('image')->first()->file_name }}
                                        </a>
                                    @break

                                    @case('application/vnd.openxmlformats-officedocument.wordprocessingml.document')
                                        <a href="{{ $post->getFirstMedia('image')->getUrl() }}">
                                            {{ $post->media('image')->first()->file_name }}
                                        </a>
                                    @break

                                    @default
                                        <img src="{{ $post->getFirstMedia('image')->getUrl() }}" alt="Loading..."
                                            style="width: 100px">
                                @endswitch
                            </td>
                            <td>
                                <div class="d-flex
                                justify-content-center">
                                    <a class="btn btn-info mx-1" href="{{ route('post.edit', $post) }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger mx-1" data-bs-toggle="modal"
                                        data-bs-target="#modal-delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                    @extends('posts.modal-delete')
                                </div>
                            </td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Table with stripped rows -->
        </div>
    </div>
@endsection

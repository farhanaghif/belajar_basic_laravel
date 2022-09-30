@extends('layouts.app-nice')
@section('content')
    <div class="pagetitle">
        <h1>{{ $name }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Post</a></li>
                <li class="breadcrumb-item active">{{ $name }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <div class="row">
                    <div class="col-6">{{ $name }} Post</div>
                    <div class="col-6 text-end">
                        <a href="{{ route('post.index') }}">
                            <div class="btn btn-warning">
                                <i class="bi bi-backspace"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (@$post)
                    @method('PUT')
                @endif
                <div class="mb-3">
                    <h6 class="form-label">Title</h6>
                    <input value="{{ $post->title ?? '' }}" name="title" class="form-control" type="text"
                        id="formFile">
                </div>
                <div class="mb-3">
                    <h6 class="form-label">Image</h6>
                    @if (@$post)
                        @switch($post->media('image')->first()->mime_type)
                            @case('image/png')
                                <img src="{{ $post->getFirstMedia('image')->getUrl() }}" alt="Loading..." style="width: 100px">
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
                                <img src="{{ $post->getFirstMedia('image')->getUrl() }}" alt="Loading..." style="width: 100px">
                        @endswitch
                    @endif
                    <input name="image" class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                    <h6 class="form-label">Description</h6>
                    <textarea class="form-control" name="description" id="" cols="20" rows="5">{{ $post->description ?? '' }}</textarea>
                </div>
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-info">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

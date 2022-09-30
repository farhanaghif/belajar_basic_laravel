@extends('layouts.app-nice')
@section('content')
    <div class="pagetitle">
        <h1>Video</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('video') }}">Video</a></li>
                <li class="breadcrumb-item active">{{ $video->title }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card mb-3" style="max-width: 100%;">
        <div class="row">
            <div class="col-md-7 mt-5 ms-5">
                {{-- <img src="Image Source" class="img-fluid rounded-start" alt="Card title"> --}}
                {!! $video->url !!}
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $video->title }}</h5>
                    <p class="card-text">{{ $video->description }}</p>
                    <p class="card-text"><small class="text-muted">Last updated : {{ $video->updated_at }}</small></p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <h4>Write Comment</h4>
            <form action="{{ route('video.comment.store', ['video' => $video->code]) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="text" id="" aria-describedby="helpId"
                        placeholder="Add your comment here...">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-footer">
            <h4>All Comment</h4>
            <hr>
            <div class="mt-4">
                @foreach ($video->comments as $comment)
                    <div class="row">
                        <div class="col-1">
                            <img src="{{ $comment->user->name }}" alt="Photo" class="rounded-circle">
                        </div>
                        <div class="col-11">
                            <h6>{{ $comment->user->name }}</h6>
                            <h5>{{ $comment->text }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

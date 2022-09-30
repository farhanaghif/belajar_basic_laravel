@extends('layouts.app-nice')
@section('content')
    <x-page-title namaPageAktif="Video" />
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @foreach ($videos as $video)
                        <div class="mt-4 col-md-4">
                            <div class="ratio ratio-16x9">
                                {!! $video->url !!}
                            </div>
                            <a href="{{ route('video.show', $video->code) }}">{{ $video->title }}</a>
                            <div class="row">
                                <div class="col-4">
                                    <i class="bi bi-heart" aria-hidden="true"></i> 50
                                </div>
                                <div class="col-4">
                                    <i class="bi bi-eye" aria-hidden="true"></i> 55
                                </div>
                                <div class="col-4">
                                    <i class="bi bi-save" aria-hidden="true"></i> 54
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

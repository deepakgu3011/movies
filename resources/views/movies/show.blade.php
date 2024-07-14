@extends('layouts.app')

@section('content')
    <div class="row" id="all-main">
        {{-- @dd($movies) --}}
        @foreach ($movies as $movie)
            <div class="col-md-6">
                <h3 class="text-danger">Movies</h3>
                <div class="back">
                    <a href="{{ url('/') }}">Home</a> / <span>{{ $movie->name }}</span>
                </div>
                <div class="card mt-3">
                    <div class="card-body d-flex" id="movie">
                        <div class="col-lg-6">
                            <img src="{{ 'http://tdmovies.rf.gd/public/' . $movie->pic }}"
                                 alt="{{ $movie->name }}"
                                 style="height: 200px; object-fit: cover;"
                                 class="img-fluid">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title">{{ $movie->name }}</h5>
                                <p class="card-text">Director: {{ $movie->dirname }}</p>
                                <p class="card-text">Release Year: {{ $movie->rdate }}</p>
                                <p class="card-text">{{ $movie->desc }}</p>
                            </div>
                            {{-- @dd($movie->movieurl/) --}}
                            <div>
                                @foreach ($movie->movieurl as $movieurl)

                                <a href="{{ url($movieurl->url) }}" class="btn btn-info " style="margin: 1.2rem;">Click To Download &nbsp;&nbsp;({{ $movieurl->file_size }})</a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row mt-4">
        @foreach ($webseries as $series)
            <div class="col-md-6">
                <h3 class="text-danger">Web Series</h3>
                <div class="back">
                    <a href="{{ url('/') }}">Home</a> / <span>{{ $series->name }}</span>
                </div>
                <div class="card mt-3">
                    <div class="card-body d-flex" id="web">
                        <div class="col-lg-6">
                            <img src="{{ 'http://tdmovies.rf.gd/public/' . $series->pic }}"
                                 alt="{{ $series->name }}"
                                 style="height: 200px; object-fit: cover;"
                                 class="img-fluid">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title">{{ $series->name }}</h5>
                                <p class="card-text">Director: {{ $series->dirname }}</p>
                                <p class="card-text">Release Year: {{ $series->rdate }}</p>
                                <p class="card-text">{{ $series->desc }}</p>
                            </div>
                            <div>
                                {{-- <a href="{{ url($series->url) }}" class="btn btn-info mt-auto">Click To Download</a> --}}
                                <div>
                                    @foreach ($series->movieurl as $movieurl)

                                    <a href="{{ url($movieurl->url) }}" class="btn btn-info " style="margin: 1.2rem;">Click To Download &nbsp;&nbsp;({{ $movieurl->file_size }})</a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

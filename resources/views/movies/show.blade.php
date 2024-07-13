@extends('layouts.app')
@section('content')

    <div class="row">
        @foreach ($movies as $movie)
            <h3 class="text-danger">Movies</h3>
            <div class="back">
                &nbsp;&nbsp;&nbsp;&nbsp;  <a href="{{ url('/') }}">Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;
                <a href="#"  class="disabled-link">{{ $movie->name }}</a>
            </div>
            <center>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{ 'http://tdmovies.rf.gd/public/' . $movie->pic }}" class="card-img-top"
                            alt="{{ $movie->name }} " style="height: 200px; object-fit: cover;">

                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->name }}</h5>
                            <p class="card-text">Director: {{ $movie->dirname }}</p>
                            <p class="card-text">Release Year: {{ $movie->rdate }}</p>
                            <p class="card-text">{{ $movie->desc }} </p>
                            <a href="{{ url($movie->url) }}" class="btn btn-info">Click To Download</a>
                        </div>
                    </div>
                </div>
            </center>
        @endforeach
    </div>

    <div class="row">
        @foreach ($webseries as $series)
            <h3 class="text-danger">Web Series</h3>
            <div class="back">
                &nbsp;&nbsp;&nbsp;&nbsp; <a href="{{ url('/') }}" >Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;
                <a href="#"  class="disabled-link" class="btn btn-info">{{ $series->name }}</a>
            </div>
            <center>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="{{ 'http://tdmovies.rf.gd/public/' . $series->pic }}" class="card-img-top"
                        alt="{{ $series->name }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $series->name }}</h5>
                        <p class="card-text">Director: {{ $series->dirname }}</p>
                        <p class="card-text">Release Year: {{ $series->rdate }}</p>
                        <p class="card-text">{{ $series->desc }} </p>
                        <a href="{{ url($series->url) }}" class="btn btn-info">Click To Download</a>
                    </div>
                </div>
            </div>
        </center>
        @endforeach
    </div>
@endsection

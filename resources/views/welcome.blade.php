@extends('layouts.app')

@section('content')
@if(session('fail'))
<script>
Swal.fire({
  position: "top-end",
  icon: "error",
  title: "Your work has been saved",
  showConfirmButton: false,
  timer: 1500
});
</script>
@endif
    <div class="container">
        <h1 class="text-center">Welcome to Our Film Website!</h1>

        <form action="{{ url('/') }}" method="get" class="d-flex flex-end" style="justify-content: end;">
            <input type="text" name="name" placeholder="Search" style="width: 20%">
            &nbsp;&nbsp;<button type="submit" style="border-radius: 5%;"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
            &nbsp;&nbsp;<a href="{{ url('/') }}" class="btn btn-info" style="text-decoration: none; color: white;" onmouseover="this.style.color='red'" onmouseout="this.style.color='white'">Clear Search</a>
        </form>

        <hr>

        <h3 class="text-danger">Webseries</h3>
        <div class="row">
            @foreach ($movies as $movie)
                @if ($movie->category === 'webseries')
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <img src="{{ 'http://tdmovies.rf.gd/public/' . $movie->pic }}" class="card-img-top"
                                alt="{{ $movie->name }}" style="height: 200px; object-fit: cover;">

                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->name }}</h5>
                                <p class="card-text">Director: {{ $movie->dirname }}</p>
                                <p class="card-text">Release Year: {{ $movie->rdate }}</p>
                                @php
                                    $words = explode(' ', $movie->desc);
                                    $shortDesc = implode(' ', array_slice($words, 0, 10));
                                @endphp
                                <p class="card-text">{{ $shortDesc }}......</p>
                                <a href="{{ route('movies',$movie->id) }}" class="btn btn-info">More Information</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <hr>

        <h3 class="text-danger">Movies</h3>
        <div class="row">
            @foreach ($movies as $movie)
                @if ($movie->category === 'movies')
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <img src="{{ 'http://tdmovies.rf.gd/public/' . $movie->pic }}" class="card-img-top"
                                alt="{{ $movie->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->name }}</h5>
                                <p class="card-text">Director: {{ $movie->dirname }}</p>
                                <p class="card-text">Release Year: {{ $movie->rdate }}</p>
                                @php
                                    $words = explode(' ', $movie->desc);
                                    $shortDesc = implode(' ', array_slice($words, 0, 10));
                                @endphp
                                <p class="card-text">{{ $shortDesc }} .......</p>
                                <a href="{{ route('movies',$movie->id) }}" class="btn btn-info">More Information</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </div>
@endsection

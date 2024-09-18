@extends('layouts.app')

@section('content')
@if(session('fail'))
<script>
Swal.fire({
  position: "top-end",
  icon: "error",
  title: "Result Not Found!",
  showConfirmButton: false,
  timer: 1500
});
</script>
@endif
    <div class="container">
        <h1 class="text-center">Welcome to Our Film Website!</h1>
        <hr>
        <div class="row">
            @foreach ($movies as $movie)
                @if ($movie->category === 'webseries')
        <h3 class="text-danger">Webseries</h3>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <img src="{{ 'http://tdmovies.rf.gd/public/' . $movie->pic }}" class="card-img-top"
                                alt="{{ $movie->name }}" style="height: 200px; object-fit: cover;" >

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

        <div class="row">
               <h3 class="text-danger">Movies</h3>
            @foreach ($movies as $movie)
                @if ($movie->category === 'movies')
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <img src="{{ 'http://tdmovies.rf.gd/public/' . $movie->pic }}" class="card-img-top"
                                alt="{{ $movie->name }}" style="height: 200px; object-fit: cover;" >
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
<script>
function info(){
      if (!localStorage.getItem('alertShown')) {
                Swal.fire("Please Ensure You have Telegram Account!");
                localStorage.setItem('alertShown', 'true');
            }
    }
    window.onload= function(){
        info();
    }
</script>
@endsection

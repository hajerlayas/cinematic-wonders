@extends('layout.master')
@section('content')

<div class="row">
    @foreach($movie as $movie)
        <div class="col-xl-2 col-lg-6">
            <div class="card mb-4">

                <img src=" {{ url('storage/'.$movie->img) }}  " width=" 300px" height="100px" alt="" class="card-img-top">

                <div class="card-body">
                <h3 class="card-title">{{ $movie->name }}</h3>
                    <p class="card-text text-muted">{{ $movie->type }}</p>
                </div>

                <div class="card-footer">
                <a class="btn btn-primary" href="{{ url('movies_page/' . $movie->id )}}" role="button">show more</a>
                </div>
            </div>
          </div>
    @endforeach
</div>

@endsection
@extends('layout.master')
@section('content')

<div class="row">
    @foreach($movie as $movie)
        <div class="col-xl-3 col-lg-6">
            <div class="card mb-4">

                <img src=" {{ url('storage/'.$movie->img) }} " alt="" class="card-img-top">

                <div class="card-body">
                <h3 class="card-title">{{ $movie->name }}</h3>
                    <p class="card-text text-muted">{{ $movie->type }}</p>
                </div>

                <div class="card-footer">
                <a class="btn btn-primary" href="#" role="button">show more</a>
                <a class="btn btn-primary" href="{{ url('admin/view_info/' . $movie->id )}} " role="button">edit</a>
                </div>
            </div>
          </div>
    @endforeach
</div>

@endsection
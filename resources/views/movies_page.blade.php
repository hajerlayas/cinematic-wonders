@extends('layout.master')
@section('content')
<div class="card mb-4">
<img src=" {{ url('storage/'.$movie->img) }}  " alt="" class="card-img-top">
<div class="card-body">
<h3 class="card-title">{{ $movie->name }}</h3>
    <p class="card-text text-muted">{{ $movie->status }}</p><br>
    <p>rating</p> <a class="btn btn-primary" href="{{ url('book_tickets/' . $movie->id )}} " role="button">book a ticket</a>
</div>

<div class="card-footer">
<p>{{ $movie->description }}</p>
</div>
</div>
@endsection
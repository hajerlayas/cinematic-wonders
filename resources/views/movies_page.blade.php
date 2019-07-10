@extends('layout.master')
@section('content')
<div class="card mb-4">
<img src=" {{ url('storage/'.$movies->img) }}  " alt="" class="card-img-top">
<div class="card-body">
<h3 class="card-title">{{ $movies->name }}</h3>
    <p class="card-text text-muted">{{ $movies->status }}</p><br>
    <p>rating</p> <a class="btn btn-primary" href="{{ url('book_tickets/' . $movies->id )}} " role="button">book a ticket</a>
</div>

<div class="card-footer">
<p>{{ $movies->description }}</p>
</div>
</div>
@endsection
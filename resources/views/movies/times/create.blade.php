@extends('layout.master')

@section('content')
<div class="card m-5">
    <div class="card-header">
        <h2>Add Movie details</h2>
    </div>
    <div class="card-body">
        <form action="{{ url("movies/{$movie->id}/times") }}" method="post">
            @csrf

            <label class="new-filed"> date: </label>
            <input type="date" name="date" class="form-control new-filed">

            <label class="new-filed"> Start At: </label>
            <input type="time" name="start" class="form-control new-filed">

            <label class="new-filed"> Ends At: </label>
            <input type="time" name="end" class="form-control new-filed"> 

            <input class="btn btn-primary" type="submit" value="Add">
        </form>
    </div>
</div>
@endsection
         
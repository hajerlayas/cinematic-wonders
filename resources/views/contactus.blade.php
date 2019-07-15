@extends('layout.master')
<head>
    <style>
        body{
            background-image: url('storage/image/cinema1.jpg') !important;
            background-repeat: no-repeat ;
            background-size: 100% ;
        }
        .card{
            width:750;
            height:500;
        }
    </style>
</head>
@section('content')

<div class="card m-5 mx-auto">
    <div class="card-header">
        <h3>send us a message</h3>
    </div>
    <div class="card-body">
        <form action="{{ url('message') }}" enctype="multipart/form-data"  method="POST" >
            @csrf

            <label class="coming-soon-field"> Name: </label>
            <input type="text" name="name" class="form-control">

            <label class="coming-soon-field"> email: </label>
            <input type="email" name="email" class="form-control">

            
            <label > message: </label>
            <textarea class="form-control" name="message" id="" cols="30" rows="6"></textarea><br>

            <input class="btn btn-primary" type="submit" value="send">
        </form>
    </div>
</div>

@endsection
@extends('layout.master')
<head>
<style>
.table{color : white;}
footer{ position: absolute;}
body{
    width: 100%;
    height: 100%;
}
</style></head>

@section('content')

    
<table class="table">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>number</th>
        <th>day</th>
        <th>start</th>
        <th>seates</th>
    </tr>
    @foreach($customer as $data)
        <tr>
            <td> {{$data->id}} </td>
            <td> {{$data->name}} </td>
            <td> {{$data->number}} </td>
            <td> {{$data->day}} </td>
            <td> {{$data->start}} </td>
            <td> {{$data->seates}} </td>
        </tr>
    @endforeach

</table>
@endsection
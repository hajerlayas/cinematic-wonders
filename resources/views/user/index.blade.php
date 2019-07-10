@extends('layouts.app')

@section('content')

    
<table class="table">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email number</th>
    </tr>
    @foreach($user as $data)
        <tr>
            <td> {{$data->id}} </td>
            <td> {{$data->name}} </td>
            <td> {{$data->email}} </td>
        </tr>
    @endforeach

</table>
@endsection
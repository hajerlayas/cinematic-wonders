@extends('layout.master')

@section('content')

<table class="table">
    <tr>
        <th> Name </th>
        <th> Email </th>
        <th> message </th>
    </tr>

    @foreach($message as $messages)
        <tr>
            <td> {{$messages->name}} </td>
            <td> {{$messages->email}} </td>
            <td> {{$messages->message}} </td>
        </tr>
    @endforeach
</table>
@endsection
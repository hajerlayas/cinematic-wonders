@extends('layout.master')
@section('content')

    <div class="card ">
        <div class="card-header">
            <h2>edit movie info</h2>
        </div>
        <div class="card-body">
        <form action="{{ url('admin/view_info/'  . $movies->id ) }}"  enctype="multipart/form-data" method="post">
            @csrf
            {{ method_field('PATCH') }}
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $movies->name }}">

                <label>satus</label>
                <select name="status" class="form-control">
                <option value="">--select</option>
                <option value="coming soon" @if ($movies->status == 'coming soon') selected @endif>coming soon</option>
                <option value="new movie"@if ($movies->status == 'new movie') selected @endif>  new movie</option>
                </select>

                <label>Image</label>
                
                <input type="file" name="image" class="form-control">

                <label>Description</label>
                <textarea name="description" class="form-control">{{ $movies->description }}</textarea>

                <button class="btn btn-primary" type="submit" id="edit1" >edit</button>
            </form>
        </div>
    </div>

@endsection


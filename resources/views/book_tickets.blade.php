@extends('layout.master')
@section('content')

<div class="container">


<select name="" id="">
@foreach($times as $time)
    <option value="{{ $time->id }}">{{ $time->date . ' - ' . $time->start }}</option>
@endforeach
</select>
<form action="{{ url('book') }}" method="post ">
  <div class="form-group">
    <label for="date">day</label>
    <input type="date" name="date"  class="form-control">
  </div>
  <div class="form-group">
    <label for="time">times</label>
    <input type="time" name="times"  class="form-control">
  </div>
  <div class="form-group">
    <label for="seates">seates left</label>
    <input type="number" name="seates"  class="form-control">
  </div>





<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
       
      <div class="form-group">
    <label for="date">name</label>
    <input type="text" name="name"  class="form-control">
  </div>
  <div class="form-group">
    <label for="time">phone number</label>
    <input type="number" name="phone"  class="form-control">
  </div>
  <div class="form-group">
    <label for="seates">seates</label>
    <input type="number" name="seates"  class="form-control">
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
<input type="submit">

      </div>
    </div>
  </div>
</div>

</form>
</div>
@endsection


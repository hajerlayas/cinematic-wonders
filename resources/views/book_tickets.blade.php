@extends('layout.master')
<head>
<style>
.container{
  padding: 100px;
  margin: 50px;
}
footer{
     position: fixed !important;
            }
</style></head>
@section('content')

<div class="container  mx-auto">
<form action="{{ url('book') }}" enctype="multipart/form-data"  method="post" >
@csrf
<!--day input-->
  <div class="form-group row">
    <div class="col-10">
    <label for="date">day</label>
    <select name="day" id=""class="form-control">
      <option value="" style="display:inline;">--selcte--</option>
      @foreach($times as $time)
      <option name="day" value="{{ $time->date }}">{{ $time->date }}</option>
      @endforeach
    </select>
    </div>
  </div>
  
<!--times input-->
  <div class="form-group row">
    <div class="col-10">
      <label for="time">times</label>
      <select name="start" id=""class="form-control">
        <option value="" style="display:inline;">--selcte--</option>
        @foreach($times as $time)
        <option name="start" value="{{ $time->start }}"> {{ $time->start }} </option>
        @endforeach
      </select>
    </div>
  </div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Book Ticktes
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
    <input type="text" name="number"  class="form-control">
  </div>
  <div class="form-group">
    <label for="seates">seates</label>
    <input type="number" name="seates"  class="form-control">
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" value="Save changes" class="btn btn-primary"></button>


      </div>
    </div>
  </div>
</div>

</form>
</div>
@endsection


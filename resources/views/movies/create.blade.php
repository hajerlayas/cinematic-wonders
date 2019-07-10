@extends('layout.master')

@section('content')
<div class="card m-5">
    <div class="card-header">
        <h2>Add New Movies</h2>
    </div>
    <div class="card-body">
        <form action=" {{ url('movies') }}" enctype="multipart/form-data"          method="POST" >
            @csrf
            
            <label> status: </label>
            <select name="status" id="status">
                <option value="">--Select--</option>
                <option value="coming soon">coming soon</option>
                <option value="new movie">new movie</option>
            </select><br>

            <label class="coming-soon-field"> Name: </label>
            <input type="text" name="name" class="form-control coming-soon-field">

            <label class="coming-soon-field"> image: </label>
            <input type="file" name="image" class="form-control coming-soon-field">

            <!--<label class="new-filed"> date: </label>
            <input type="date" name="w" class="form-control new-filed">

            <label class="new-filed"> Start At: </label>
            <input type="time" name="start" class="form-control new-filed">

            <label class="new-filed"> Ends At: </label>
            <input type="time" name="end" class="form-control new-filed"> -->

            
            <label class="new-filed"> description: </label>
            <textarea class="new-filed" name="description" id="" cols="30" rows="8"></textarea><br>

            <input class="btn btn-primary" type="submit" value="Add">
        </form>
    </div>
</div>

<script>
    jQuery(document).ready(function(){
        $("#status").change(function() {
            if($(this).val() == "new movie") {
                $(".new-filed").css('display', 'block');
                
            }
            if($(this).val() == "coming soon"){

                $(".coming-soon-field").css('display', 'block');
                $(".new-filed").css('display', 'none');

            }
            
        });
    });

</script>

@endsection

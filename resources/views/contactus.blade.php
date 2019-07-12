<div class="card m-5">
    <div class="card-header">
        <h2>contact us</h2>
    </div>
    <div class="card-body">
        <form action=" {{ }}" enctype="multipart/form-data"  method="POST" >
            @csrf

            <label class="coming-soon-field"> Name: </label>
            <input type="text" name="name" class="form-control">

            <label class="coming-soon-field"> email: </label>
            <input type="email" name="email" class="form-control">

            
            <label > message: </label>
            <textarea class="form-control" name="message" id="" cols="30" rows="8"></textarea><br>

            <input class="btn btn-primary" type="submit" value="send">
        </form>
    </div>
</div>
@extends('layout.master')
    <style>
        .row1{
            
        }
        .row2{
            height:300px;
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap !important;
            margin:10px;
        }
        .row3{
            height:500px;
            color:black;
            width:950px;
        }
        #h2{
            font-family: "Comic Sans MS", cursive, sans-serif;
            color: white;
        }
        #h21{
            font-family: "Comic Sans MS", cursive, sans-serif;
            color: white;
            margin-left: 200px;
        }
  

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
<div class="container-fluid">
<!--this week -->
<div class="row  row3  mx-auto">
                <h2 id="h2">Showing This Week </h2>
                <div id="slideshow" class="carousel slide mx-auto" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                        <li data-target="#slideshow" data-slide-to="1"></li>
                        <li data-target="#slideshow" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                         @foreach($week_movies as $week_movie)
                        <div class="carousel-item @if ($loop->first) active @endif">
                        <img src=" {{ url('storage/'.$week_movie->img) }}  " alt="" width=" 950px" height="400px">   
                        </div>
                         @endforeach 
                    </div>
                    <a class="carousel-control-prev" href="#slideshow" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slideshow" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
</div>
<!--today's movies-->
<div class="row row1">
        <div class="col ">
            <h2 id="h21">Today's Movies</h2>
            <div class="row">
                <div class="col even">
                    @foreach($todays as $today)
                    
                            @if($loop->odd)
                                <div class="col-xl-6 col-lg-6 mx-auto">
                                    <div class="card mb-4">
                                        <img src=" {{ url('storage/'.$today->img) }}  " alt="" class="card-img-top" width="300" height="200">
                                        <div class="card-body">
                                            <h3 class="card-title">{{ $today->name }}</h3>
                                            <p class="card-text text-muted">{{ $today->type }}</p>
                                        </div>
                                        <div class="card-footer">
                                            <a class="btn btn-primary" href="{{ url('movies_page/' . $today->id )}}" role="button">show more</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                    @endforeach
                </div>
                    
                <div class=" col odd">
                    @foreach($todays as $today)
                             @if($loop->even)
                                <div class="col-xl-6 col-lg-6 mx-auto">
                                    <div class="card mb-4">
                                        <img src=" {{ url('storage/'.$today->img) }}  " alt="" class="card-img-top" width="300" height="200">
                                        <div class="card-body">
                                            <h3 class="card-title">{{ $today->name }}</h3>
                                            <p class="card-text text-muted">{{ $today->type }}</p>
                                        </div>
                                        <div class="card-footer">
                                            <a class="btn btn-primary" href="{{ url('movies_page/' . $today->id )}}" role="button">show more</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                    @endforeach
                </div>
            </div>
        </div>
</div>
        <!--coming soon-->
        <h2 id="h2"> Coming Soon </h2>
            <div class="row row2"> 
                
                @foreach($movies as $movie)
                  <div class="col-xl-3 col-lg-6">
                        <div class="card mb-4">
                                 <img src=" {{ url('storage/'.$movie->img) }}  " width="300" height="150" alt="" class="card-img-top"> 
                                <div class="card-body">
                                     <h3 class="card-title">{{ $movie->name }}</h3>
                                     <p class="card-text text-muted">{{ $movie->type }}</p> 
                                </div>
                        </div>
                    </div>
                @endforeach   
       
           </div>
        
           </div>  
    

@endsection

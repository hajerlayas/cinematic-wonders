@extends('layout.master')
<head>
    <style>
        .row1{
            height:600px;
        }
        .row2{
            height:300px;
            overflow-x: scroll;
        }
        {
            outline :4px solid #42a5f5;
        }
        .row3{
            height:500px;
            color:black;
            width:950px;
        }
    </style>
</head>
@section('content')
<div class="row  row3  mx-auto">
                <h2>showing this week</h2>
                <div id="slideshow" class="carousel slide mx-auto" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                        <li data-target="#slideshow" data-slide-to="1"></li>
                        <li data-target="#slideshow" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                         @foreach($movies as $movie)
                        <div class="carousel-item @if ($loop->first) active @endif">
                        <img src=" {{ url('storage/'.$movie->img) }}  " alt="" width=" 950px" height="400px ">   
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
        <div class="col-6 ">
            <h2>today's movies</h2>
            <div class="row">
                <div class="col even">
                    @foreach($movies as $movie)
                    
                            @if($loop->odd)
                                <div class="col-xl-9 col-lg-6">
                                    <div class="card mb-4">
                                        <img src=" {{ url('storage/'.$movie->img) }}  " alt="" class="card-img-top" width="300" height="100">
                                        <div class="card-body">
                                            <h3 class="card-title">{{ $movie->name }}</h3>
                                            <p class="card-text text-muted">{{ $movie->type }}</p>
                                        </div>
                                        <div class="card-footer">
                                            <a class="btn btn-primary" href="{{ url('movies_page/' . $movie->id )}}" role="button">show more</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                    @endforeach
                </div>
                    
                <div class=" col odd">
                    @foreach($movies as $movie)
                             @if($loop->even)
                                <div class="col-xl-9 col-lg-6">
                                    <div class="card mb-4">
                                        <img src=" {{ url('storage/'.$movie->img) }}  " alt="" class="card-img-top" width="300" height="100">
                                        <div class="card-body">
                                            <h3 class="card-title">{{ $movie->name }}</h3>
                                            <p class="card-text text-muted">{{ $movie->type }}</p>
                                        </div>
                                        <div class="card-footer">
                                            <a class="btn btn-primary" href="{{ url('movies_page/' . $movie->id )}}" role="button">show more</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col nf">
        <!--coming soon-->
            <div class="row nf row2"> 
                @foreach($movies as $movie)
                  <div class="col-xl-5 col-lg-6">
                    <div class="card mb-4">
                                    <img src=" {{ url('storage/'.$movie->img) }}  " width="300" height="100" alt="" class="card-img-top">
                                <div class="card-body">
                                <h3 class="card-title">{{ $movie->name }}</h3>
                                    <p class="card-text text-muted">{{ $movie->type }}</p>
                                </div>

                                <div class="card-footer">
                                <a class="btn btn-primary" href="{{ url('movies_page/' . $movie->id )}}" role="button">show more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
        </div>
        </div>  
    </div>

@endsection
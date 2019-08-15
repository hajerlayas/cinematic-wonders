<html>
    <head>
        <title>cinematic wonders</title>
        <link rel="stylesheet" href="{{ url('css/app.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <script>  
 $(document).ready(function(){ 
      $('#search').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
               var _token = $('input[name="_token"]').val();
                $.ajax({  
                     url:"{{ route('movie.search')}}",  
                     method:"POST",  
                     data:{query:query, _token:_token},
                     success:function(data)  
                     {
                          $('#searchList').fadeIn();  
                          $('#searchList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#search').val($(this).text());  
           $('#searchList').fadeOut(); 

      });  
 });  
 </script>
        
        <style>
            .deep-purple{
                background-color: #42a5f5 !important;
            } 
            body{
               
            background-image: url('/storage/image/cinema23.jpg');
            background-repeat: no-repeat ;
            background-size: cover ;
            position: relative;
                
            } 
            footer{
                background-color: #42a5f5 ; 
                bottom: 0 ;
                width: 100%;
                height: 5%;
               
            }
            .box{
                width:600px;
                margin:0 auto;
            }
            #searchList{
                z-index:1000;
                position: absolute;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light deep-purple">
                <div class="navbar-brand">
                    <img src="" alt="" height="">
                    <span>Cinematic Wonders</span>
                </div>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#myNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="myNav" class="collapse navbar-collapse">
                @guest
                <div class="container-fluid">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a href="{{url('index')}}" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Movies</a>
                            <div class="dropdown-menu">
                                 @foreach(\App\Categories::all() as $category)
                                <a class="dropdown-item" href="{{ url('type_page/' . $category->name ) }}">{{ $category->name }}</a>
                                @endforeach
                                <a class="dropdown-item" href="{{url('show_movies')}}">Movies</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('contactus')}}" class="nav-link">Contact Us</a>
                        </li>

                        <!-- Authentication Links -->
                        
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Admin Login') }}</a>
                            </li>

                            <!--<form class="form-inline ml-auto" method="post">
                                {{csrf_field() }}
                                <div class="md-form my-0 ">
                                    <input class="form-control"  type="text" placeholder="Search" aria-label="Search">
                                </div>
                            </form>-->

                            <div class="form-group" >
                                <input type="text" name="search" id="search" class="form-control" placeholder="search movie" />  
                            
                                <div  id="searchList" ></div>
                            </div>
                            {{ csrf_field() }}

 

                    </ul>
                </div>
                </div>
                @endguest

                        @auth
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a href="{{ url ('home') }}" class="nav-link">movies</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('movies/create') }}" class="nav-link">add movies</a>
                            </li>

                            <li class="nav-item">
                            <a href="{{ url('customer/view') }}" class="nav-link">customer details</a>
                            </li>

                            <li class="nav-item">
                            <a href="{{ url('admin/message') }}" class="nav-link">messages</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                        @endauth

        </nav>        
            <div class="container-fluid">     
                @yield('content')
            </div> 
                  
       
    </body>
    <footer>
        <p>footer</p>
    </footer>
    
</html>
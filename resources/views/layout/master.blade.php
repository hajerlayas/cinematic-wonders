<html>
    <head>
        <title>cinematic wonders</title>
        <link rel="stylesheet" href="{{ url('css/app.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <style>
            .deep-purple{
                background-color: #42a5f5 !important;
            }
            footer{
                background-color: #42a5f5 ; 
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
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('show_movies')}}" class="nav-link">Movies</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Movies</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">Contact Us</a>
                        </li>

                        <!-- Authentication Links -->
                        
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Admin Login') }}</a>
                            </li>

                            <form class="form-inline ml-auto">
                                <div class="md-form my-0 ">
                                    <input class="  form-control" type="text" placeholder="Search" aria-label="Search">
                                </div>
                            </form>
                    </ul>
                </div>
                @endguest

                        @auth
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a href="{{ url ('home') }}" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('movies/create') }}" class="nav-link">add movies</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url ('admin') }}" class="nav-link">movies</a>
                            </li>

                            <li class="nav-item">
                            <a href="{{ url('customer/view') }}" class="nav-link">customer details</a>
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
        <div class="container">               
            @yield('content')
            
        </div> 
    </body>
    <footer>
        <p>footer</p>
    </footer>
</html>
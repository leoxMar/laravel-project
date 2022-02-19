<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}"> 
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel loso">
    <div class="container">
        <img src="https://www.svgrepo.com/show/241578/hamburger-burger.svg" intrinsicsize="512 x 512" width="90" height="180" srcset="https://www.svgrepo.com/show/241578/hamburger-burger.svg 4x" alt="Hamburger Burger SVG Vector" title="Hamburger Burger SVG Vector">
        <a class="navbar-brand spa" href="{{ url('/') }}">
            Er-Paninaro.it
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @if(Auth::guard('web')->check())
                    <li class="nav-item ">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::guard('web')->user()->name }} <span class="caret"></span>
                        </a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('logout')}}">logout</a>
                              </li>
                            </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">i nostri panini</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('newpanino')}}"><b>NewPanino</b></a>
                      </li>
                      @if(auth()->user()->is_admin == 1)
                      <li class="nav-item">
                        <a class="nav-link" href="{{url('admin/home')}}">Admin</a>
                    </li>
                      @endif

                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><b>Login</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endif
                @if(Auth::guard('admin')->check())
                    <li class="nav-item dropdown">
                        <a id="adminDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::guard('admin')->user()->name }} (ADMIN) <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="adminDropdown">
                            <a href="{{route('admin.home')}}" class="dropdown-item">Dashboard</a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#admin-logout-form').submit();">
                                Logout
                            </a>
                            <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>   


    </div>
    <!-- <script src="{{URL::asset('script.js')}}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @yield('content')
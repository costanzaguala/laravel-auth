<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite('resources/js/app.js')
    </head>

    <body>
        <div class="d-flex">
            <header class="bg-primary p-5">
                <section class="list-group">
                    <ul class="list-unstyled">
                        @auth
                        <li class="mb-3">
                            <a class="text-decoration-none" href="/">Dashboard</a>
                        </li>
                        @else
                        <li class="mb-3">
                            <a class="text-decoration-none" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="mb-3">
                            <a class="text-decoration-none" href="{{ route('register') }}">Register</a>
                        </li>
                        @endauth
                    </ul>
        
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
        
                        <button type="submit" class="btn btn-outline-light">
                            Log Out
                        </button>
                    </form>
                    @endauth
                </section>
            </header>
    
            <main id="login-section" class="bg-dark flex-column d-flex justify-content-center align-items-center">    
                <h2 class="text-white mb-4"> 
                    Welcome!
                </h2>
                <div class="container d-flex justify-content-center">
                    <div class="col-6">
                        <div id="login-form" class="p-5 bg-light d-flex justify-content-center">
                            @yield('main-content')
                        </div>
                    </div>
                </div>
            </main> 
        </div>       
    </body>


    {{-- <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endauth
                        </ul>

                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit" class="btn btn-outline-danger">
                                    Log Out
                                </button>
                            </form>
                        @endauth
                    </div>
                </div>
            </nav>
        </header> --}}


</html>
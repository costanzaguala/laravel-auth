<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('page-title') | {{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="d-flex">
            <header class="bg-primary p-5">
                <section class="list-group">
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a class="text-decoration-none" href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </li>
                        <li class="mb-3">
                            <a class="text-decoration-none" href="{{ route('admin.projects.index') }}">Projects</a>
                        </li>
                        <li class="mb-3">
                            <a class="text-decoration-none" href="{{ route('admin.projects.create') }}">Add project</a>
                        </li>
                    </ul>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="btn btn-outline-light">
                            Log Out
                        </button>
                    </form>
                </section>
            </header>
    
            <main class="py-4">
                <div class="container">
                    @yield('main-content')
                </div>
            </main>
        </div>
    </body>
</html>
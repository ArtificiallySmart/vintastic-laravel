<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="container content-box" id="background">
            <nav class="navbar navbar-expand-md pb-0">
                <div class="container-fluid">
                    <a class="navbar-brand lobsterFont " href="/">
                        <h2 class="display-2">Vintastic</h2>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="bi bi-list"></i>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="me-auto">
                        </ul>
                        <div>
                            <div>
                                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                                <a href="/?page=newuser" class="btn btn-outline-secondary">Register</a>
                            </div>

                            <form action="/?page=search&action=handleForm" method="POST">
                                <div class="input-group">
                                    <input type="text" class="form-control " id="autoSizingInputGroup" placeholder="Search" name="search">
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-expand-md pt-0">
                <div class="container-fluid ">
                    <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
                        <nav role="navigation" class="primary-navigation w-100">
                            <ul class="w-100 d-none d-md-flex justify-content-md-between">
                                @foreach ($categories as $category)
                                <li>
                                    <a href="#"> {{$category->name}}</a>

                                    <ul class="dropdown">
                                        @foreach ($category->subcategories as $subcategory)
                                        <li>
                                            <a href="#">{{$subcategory->name}}</a>

                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </nav>
                        <!-- <a class="d-md-none" data-bs-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Categories
                </a>
                <div class="collapse d-md-none" id="collapseExample">
                    <div>
                        <a class="nav-link" href="#">Lighting</a>
                        <a class="nav-link" href="#">Furniture</a>
                        <a class="nav-link" href="#">Decor</a>
                        <a class="nav-link" href="#">Textiles</a>
                    </div>
                </div> -->
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    {{-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset("vendor/bootstrap/css/bootstrap.min.css") }}">

    <!-- Custom fonts for this template -->
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset("css/business-casual.min.css")}}">

</head>

<body>
    <h1 class="site-heading text-center text-white d-none d-lg-block">
        <span class="site-heading-upper text-primary mb-3">A Free Bootstrap 4 Business Theme</span>
        <span class="site-heading-lower">Business Casual</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4 {{(Route::getCurrentRoute()->uri()) === "/" ? 'active' : '' }} ">
                    <a class="nav-link text-uppercase text-expanded" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item px-lg-4 {{(Route::getCurrentRoute()->uri()) === "about" ? 'active' : '' }}">
                        <a class="nav-link text-uppercase text-expanded" href="/about">About</a>
                    </li>
                    <li class="nav-item px-lg-4 {{(Route::getCurrentRoute()->uri()) === "products" ? 'active' : '' }}">
                        <a class="nav-link text-uppercase text-expanded" href="/products">Products</a>
                    </li>
                    <li class="nav-item px-lg-4 {{(Route::getCurrentRoute()->uri()) === "store" ? 'active' : '' }}">
                        <a class="nav-link text-uppercase text-expanded" href="/store">Store</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        @yield('content')
    </section>

    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright &copy; Your Website 2019</p>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("js/app.js")}}"></script>
    <script>
        $('.list-hours li').eq(new Date().getDay()).addClass('today');
    </script>


</body>

</html>

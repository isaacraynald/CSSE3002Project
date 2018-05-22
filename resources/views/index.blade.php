<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>UQ&A - Dashboard</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icofont.css') }}" >
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#" style="padding-left: 12vw;">UQ&A</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="#">Account Name <i class="icofont icofont-power"></i></a>
            </li>

        </ul>
    </div>
</nav>

<div style="padding-top: 10vh; padding-left: 13vw; padding-right: 13vw;">

    <h1>UQ&A</h1>

    <div class="card">
        <div class="row">

            <div class="col-sm-6 text-center">
                <div class="card-body">

                    <br><br><br>
                    <a class="portal" href="search.blade.php">
                        <i class="icofont icofont-student-alt icofont-5x"></i>
                        <br><br>
                        <h3>Student</h3>
                    </a>
                    <br><br><br>

                </div>
            </div>

            <div class="col-sm-6 text-center">
                <div class="card-body">

                    <br><br><br>
                    <a class="portal" href="search.html">
                        <i class="icofont icofont-teacher icofont-5x"></i>
                        <br><br>
                        <h3>Tutor</h3>
                    </a>
                    <br><br><br>

                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>UQ&A - Search Course</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icofont.css') }}" >

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.notification').hide();

            // Open notification
            $('form#search-course').on('submit', function (e) {
                // if (course not found) {
                e.preventDefault();
                $('.notification').toggle();
                // }
            });

            // Close notification
            $('i.icofont-close-line, .btn-secondary').on('click', function () {
                $('.notification').toggle();
            });

        });
    </script>
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

    <h1>Search Course</h1>

    <div class="card">
        <form id="search-course" class="form-group row">
            <div class="col-sm-11">
                <input class="form-control form-control-lg no-border" type="search" placeholder="e.g. INFS3202" aria-label="Search">
            </div>

            <div class="col-sm-1">
                <button class="btn btn-link btn-lg" type="submit"><i class="icofont icofont-search-alt-2"></i></button>
            </div>
        </form>
    </div>

    <!-- Notification Box -->
    <div class="notification" style="margin-top:20px;">
        <i class="icofont icofont-lg icofont-close-line"></i>
        <br><br>
        <b>Oops!</b>
        <p>We couldn’t find that course profile.<br>
            Discuss with your tutor about creating one.</p>
        <button type="button" class="btn btn-secondary">Got It</button>
    </div>

</div>

</body>
</html>
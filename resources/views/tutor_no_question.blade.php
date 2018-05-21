<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('css/icofont.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

  <title>UQ&A - Answer</title>
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

  <p><a href="tutor_course_list.html">Return to Course List</a></p>
  <h1>DECO1234</h1>

  <div class="card">
    <div class="row">
      <div class="card-body">
        <div class="container text-center">
          <i class="icofont icofont-ui-folder" style="font-size:350px;"></i>
          <p style="font-size:45px;"><strong>No Question Found</strong>
          </p>
          <p style="font-size:25px">Time to kick back and releax before someone asks something.
          </p>
        </div>
      </div>
    </div>
  </div>

</div>

</body>
</html>

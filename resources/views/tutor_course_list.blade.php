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


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <title>UQ&A - Course list</title>
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

  <h1>Course List</h1>

  <div class="card">
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link btn-primary btn-lg" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Semester1, 2018
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action d-flex align-items-center makedefault">DECO1234<span class="badge badge-primary badge-danger" style="margin-left:15px;">14</span></a>
          <a href="#" class="list-group-item list-group-item-action makedefault">INFS1234<span class="badge badge-primary badge-danger" style="margin-left:15px;">2</span></a>
          <a href="#" class="list-group-item list-group-item-action makedefault">CSSE1234<span class="badge badge-primary badge-danger" style="margin-left:15px;">0</span></a>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link btn-primary btn-lg collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Semester2, 2017
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="#" class="list-group-item list-group-item-action makedefault">DECO1234<span class="badge badge-primary badge-danger" style="margin-left:15px;">5</span></a>
        <a href="#" class="list-group-item list-group-item-action makedefault">INFS1234<span class="badge badge-primary badge-danger" style="margin-left:15px;">2</span></a>
        <a href="#" class="list-group-item list-group-item-action makedefault">CSSE1234<span class="badge badge-primary badge-danger" style="margin-left:15px;">1</span></a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link btn-primary btn-lg collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Semester1, 2017
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="#" class="list-group-item list-group-item-action makedefault">DECO1234<span class="badge badge-primary badge-danger" style="margin-left:15px;">0</span></a>
        <a href="#" class="list-group-item list-group-item-action makedefault">INFS1234<span class="badge badge-primary badge-danger" style="margin-left:15px;">0</span></a>
        <a href="#" class="list-group-item list-group-item-action makedefault">CSSE1234<span class="badge badge-primary badge-danger" style="margin-left:15px;">0</span></a>
      </div>
    </div>
  </div>
</div>



  </div>


</div>

</body>
</html>

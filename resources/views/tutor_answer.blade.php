<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

  <!--Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


  <!--Styles-->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('css/icofont.css') }}" >

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

  <p><a href="tutor_question_list.html">Return to Question List</a></p>
  <h1>DECO1234</h1>

  <div class="card">
    <div class="row">
      <div class="card-body">
        <div class="container">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
              eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <span class="text-muted">From Issac Raynald</span>


          <form>
            <div class="form-group">
                  <label for="comment"></label>
                  <textarea class="form-control" id="comment" rows="6" placeholder="Leave comments here..."></textarea>
            </div>
          </form>

          <div class="text-right">
            <button type="submit" class="btn btn-primary btn-lg">
              <i class="icofont icofont-pencil"></i>Answer
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

</body>
</html>

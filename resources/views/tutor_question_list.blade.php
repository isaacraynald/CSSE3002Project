<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('css/icofont.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




  <title>UQ&A - Question List</title>
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

  <h1>DECO1234</h1>

  <div class="card">

    <div class="card-body">
      <ul class="list-group list-group-flush">
        <li class="list-group-item list-group-item makedefault_question">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
              eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <span class="text-muted">From Issac Raynald</span>
          <div class="container text-right">
            <a href="#" class="btn btn-primary btn-lg" role="button">
              <i class="icofont icofont-pencil"></i>Answer
            </a>
            <button type="button" class="btn btn-primary btn-lg">
              <i class="icofont icofont-bin"></i>Delete
            </button>
          </div>
        </li>


        <li class="list-group-item list-group-item makedefault_question">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
              eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <span class="text-muted">From Issac Raynald</span>
          <div class="container text-right">
            <a href="#" class="btn btn-primary btn-lg" role="button">
              <i class="icofont icofont-pencil"></i>Answer
            </a>
            <button type="button" class="btn btn-primary btn-lg">
              <i class="icofont icofont-bin"></i>Delete
            </button>
          </div>
        </li>



      </ul>


    <!--
      <li class="list-group-item list-group-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
           Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <small class="text-muted">From Issac Raynald</small>
      <div class="container text-right">
        <button class="btn btn-primary" type="button" data-toggle="collapse"
        data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          <i class="icofont icofont-pencil"></i> Button with data-target
        </button>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>
      </div>
    -->
        <!-- <div class="container text-right">
          <button id="answer_button" type="button" class="btn btn-primary btn-lg"
          onClick="$('#answer_button').hide()" data-toggle="collapse" data-target="#comments">
            <i class="icofont icofont-pencil"></i>Answer
          </button>
          <button type="button" class="btn btn-primary btn-lg">
            <i class="icofont icofont-bin"></i>Delete
          </button>
        </div>
        <div id="comments" class="collapse">
            <textarea style="resize:none;width:90%;" class="input xlarge" rows="4"
            id="comment_box" name="comment_box" placeholder="Type your comment here..."></textarea>
              <button style="margin-right:30px;" id="submit_comment" class="btn btn-primary pull-right"
               name="submit_comment" type="submit" onClick="">Submit</button>
        </div> -->


<!--
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
        </div>
        <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
           nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
             culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <small class="text-muted">From Daniel</small>
        <div>
          <button type="button" class="btn">Answer</button>
          <button type="button" class="btn">Delete</button>
        </div>
      </a>
      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
          <small class="text-muted">3 days ago</small>
        </div>
        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        <small class="text-muted">Donec id elit non mi porta.</small>
      </a>
      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
          <small class="text-muted">3 days ago</small>
        </div>
        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        <small class="text-muted">Donec id elit non mi porta.</small>
      </a>
    </div> -->

    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>

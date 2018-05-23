@extends('layouts.app')

@section('content')

<div style="padding-top: 10vh; padding-left: 13vw; padding-right: 13vw;">
  @foreach($courseName as $name)
  <h1>{{$name->course_id}}</h1>
  @endforeach

  <div class="card">
    @if(count($questions)>0)
    <div class="card-body">
      <ul class="list-group list-group-flush">
        @foreach($questions as $question)
        <li class="list-group-item list-group-item makedefault_question">
          <p>{{$question->question}}</p>
          <span class="text-muted">From {{$question->first_name}} {{$question->last_name}}</span>
          <div class="container text-right">
            <a href="#" class="btn btn-primary btn-lg" role="button">
              <i class="icofont icofont-pencil"></i>Answer
            </a>
            <button type="button" class="btn btn-primary btn-lg">
              <i class="icofont icofont-bin"></i>Delete
            </button>
          </div>
        </li>
        @endforeach


        <!--li class="list-group-item list-group-item makedefault_question">
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
        </li-->



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
    @else
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
    @endif
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
@endsection

@extends('layouts.app')

@section('content')

<div style="padding-top: 10vh; padding-left: 13vw; padding-right: 13vw;">
  <a href="{{ url('tutor') }}">‹ Return to Course List</a>
  <h1>{{$courseName->course_id}}</h1>
  @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
  @endif
  <div class="card">
    @if(count($questions)>0)
    <div class="card-body">
      <ul class="list-group list-group-flush">
        @foreach($questions as $question)
        <li class="list-group-item list-group-item makedefault_question">
          <p>{{$question->question}}</p>
          <span class="text-muted">From {{$question->first_name}} {{$question->last_name}}</span>
          <div class="container text-right">
            @if($question->answered == 0)
            <a href="{{ url('answer/'.$question->id)}}" class="btn btn-primary btn-lg" role="button">
              <i class="icofont icofont-pencil"></i>Answer
            </a>
            @else
            <a href="{{ route('edit', ['id'=>$question->id])}}" class="btn btn-primary btn-lg" role="button">
              <i class="icofont icofont-pencil"></i>Edit
            </a>
            @endif
            <form class = 'btn' method="POST" action="{{route('deleteQuestion' , ['id'=>$question->id])}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class = 'btn btn-primary btn-lg' type="submit">
              <i class="icofont icofont-bin"></i>Delete
            </button>
          </form>
          </div>
        </li>
        @endforeach

      </ul>

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

@extends('layouts.app')

@section('content')

<div style="padding-top: 10vh; padding-left: 13vw; padding-right: 13vw;">

  <p><a href="{{ route('questionList',['id'=>$question->course_id,'question'=>$question->semester_id])}}"> < Return to Question List</a></p>
  <h1>{{$courseName->course_id}}</h1>
  
  <div class="card">
    <div class="row">
      <div class="card-body">
        <div class="container">
          <p>{{$question->question}}</p>
          <span class="text-muted">From {{$user->first_name}} {{$user->last_name}}</span>


          <form method="POST" action="{{route('update',['course'=>$question->course_id, 'semester'=>$question->semester_id,'id'=>$answer->id])}}">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group">
                  <label for="comment"></label>
                  <textarea class="form-control{{ $errors->has('answer') ? ' is-invalid' : '' }}" id="answer" name="answer" value="{{ old('answer') }}" rows="6" placeholder="Leave comments here...">{{$answer->answer}}</textarea>
                  @if ($errors->has('answer'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('answer') }}</strong>
                      </span>
                  @endif
            </div>
            <div class="text-right">
            <button type="submit" class="btn btn-primary btn-lg">
              <i class="icofont icofont-pencil"></i>Answer
            </button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection

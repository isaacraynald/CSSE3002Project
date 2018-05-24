@extends('layouts.app')

@section('content')

<div style="padding-top: 10vh; padding-left: 13vw; padding-right: 13vw;">

  <a href="{{ url('/') }}">‹ Return to Main Page</a>
  <h1>Course List</h1>

  @if(count($semesters)>1)
  <div class="card">
    <div class="accordion" id="accordionExample">
      @foreach($semesters as $semester)
  <div class="card">
    <div class="card-header" id="heading{{$semester->semester}}{{$semester->year}}">
      <h5 class="mb-0">
        <button class="btn btn-link btn-primary btn-lg" type="button" data-toggle="collapse" data-target="#collapse{{$semester->semester}}{{$semester->year}}" aria-expanded="true" aria-controls="collapse{{$semester->semester}}{{$semester->year}}">
          Semester {{$semester->semester}} , {{$semester->year}}
        </button>
      </h5>
    </div>

    <div id="collapse{{$semester->semester}}{{$semester->year}}" class="collapse hide" aria-labelledby="heading{{$semester->semester}}{{$semester->year}}" data-parent="#accordionExample">
      <div class="card-body">
        <div class="list-group">
          @foreach($courses as $course)
            @if($semester->id == $course->semester_id)
            <?php $count = 0;?>
            @foreach($questions as $question)
            @if($course->semester_id == $question->semester_id && $course->id == $question->course_id)
            <?php $count = $count + 1;?>
            @endif
            @endforeach
          <a href="{{ route('questionList',['id'=>$course->id,'semester'=>$semester->id])}}" class="list-group-item list-group-item-action d-flex align-items-center makedefault">{{$course->course_id}}<span class="badge badge-primary badge-danger" style="margin-left:15px;">{{$count}}</span></a>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
   @endforeach
</div>



  </div>

  @else
    <p>No Courses Found</p>
  @endif


</div>

@endsection

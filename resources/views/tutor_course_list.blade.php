@extends('layouts.app')

@section('content')

<div style="padding-top: 10vh; padding-left: 13vw; padding-right: 13vw;">

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
          <a href="{{ url('tutor/'.$course->id)}}" class="list-group-item list-group-item-action d-flex align-items-center makedefault">{{$course->course_id}}<span class="badge badge-primary badge-danger" style="margin-left:15px;">14</span></a>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
   @endforeach
  <!--div class="card">
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
  </div-->
</div>



  </div>

  @else
    <p>No Courses Found</p>
  @endif


</div>

@endsection

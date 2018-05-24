@extends('layouts.app')

@section('content')

<div style="padding-top: 10vh; padding-left: 13vw; padding-right: 13vw; padding-bottom: 10vh;">

    <a href="{{ url('search') }}">‹ Return to Search Course</a>
    <br>
    <h1>{{$courses}}</h1>

    <div class="row">

        <!-- Semester Tab Card -->
        @if(count($semesters)>0)
        <div class="col-3">
            <div class="card">
                <div class="list-group" id="list-semester" role="tablist">
                    @foreach($semesters as $semester)
                    @if($semester->semester==2 && $semester->year==2018)
                    <a class="list-group-item list-group-item-action active" id="list-sem{{$semester->semester}}-{{$semester->year}}-list" data-toggle="list" href="#semester-{{$semester->semester}}-{{$semester->year}}" role="tab" aria-controls="{{$semester->semester}}-{{$semester->year}}" data-id='{{$semester->id}}'>Semester {{$semester->semester}}, {{$semester->year}}</a>
                    @else
                    <a class="list-group-item list-group-item-action" id="list-sem{{$semester->semester}}-{{$semester->year}}-list" data-toggle="list" href="#semester-{{$semester->semester}}-{{$semester->year}}" role="tab" aria-controls="{{$semester->semester}}-{{$semester->year}}">Semester {{$semester->semester}}, {{$semester->year}}</a>
                    @endif
                    @endforeach
                    <!--a class="list-group-item list-group-item-action" id="list-sem2-list" data-toggle="list" href="#semester-2" role="tab" aria-controls="sem2">Semester 2, 2017</a>
                    <a class="list-group-item list-group-item-action" id="list-sem3-list" data-toggle="list" href="#semester-3" role="tab" aria-controls="sem3">Semester 1, 2017</a-->
                </div>
            </div>
        </div>
        @endif

        <!-- Answer List Card -->
        <div class="col-9">
            <div class="card course-profile">

                <div class="tab-content" id="nav-tabContent">
                   @foreach($semesters as $semester)

                    @if($semester->semester==2 && $semester->year==2018)
                    <!-- Current Semester Tab -->
                    <div class="tab-pane fade show active" id="semester-{{$semester->semester}}-{{$semester->year}}" role="tabpanel" aria-labelledby="list-sem{{$semester->semester}}-{{$semester->year}}">

                        <div class="card-body">
                            <!-- Search -->
                            <form id="search-course" class="form-group row" action="{{route('result')}}">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search answered questions..." aria-label="Search answered questions..."  name = "result" id = "result" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit"><i class="icofont icofont-search-alt-2"></i></button>
                                </div>
                            </div>
                        </form>

                            <!-- Question Box -->
                            <form id="ask" method = "POST" class="form-group row" action="{{route('ask',['courseId'=>$courses, 'course'=>$courseId, 'semester'=>$semester->id])}}">
                                @csrf
                                 <label for="askQuestion"><b>Ask a question</b></label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }} id="question" name="question" rows="4" value="{{ old('question') }}"></textarea>
                                    @if ($errors->has('question'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('question') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary float-right" style="margin-bottom: 20px;">Submit Question</button>
                                <br><br><br>
                            </form>
                    @else
                    <div class="tab-pane fade show" id="semester-{{$semester->semester}}-{{$semester->year}}" role="tabpanel" aria-labelledby="list-sem{{$semester->semester}}-{{$semester->year}}">

                        <div class="card-body">
                            <!-- Search -->
                            <form id="search-course2" class="form-group row" action="{{route('result')}}">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search answered questions..." aria-label="Search answered questions..."  name = "result2" id = "result" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit"><i class="icofont icofont-search-alt-2"></i></button>
                                </div>
                            </div>
                        </form>

                            <!-- Question Box -->
                            <div class="notification">
                                <i class="icofont icofont-lg icofont-close-line"></i>
                                <br><br>
                                <b>This is a course page for a past semester.</b>
                                <p>Asking questions has been disabled, <br>
                                    but you may still browse answered questions.</p>
                                <button type="button" class="btn btn-secondary">Got It</button>
                            </div>
                    @endif
                            <div class="thanks">
                                <br><br>
                                <b>Thank you!</b>
                                <p>Your question has been submitted.</p>
                                <button type="button" class="btn btn-primary">Ask Again</button>
                                <br><br><br>
                            </div>

                            <!-- Answer List -->
                            <ul class="list-group list-group-flush">
                                @foreach($questions as $question)
                                @if($semester->id == $question->semester_id)
                                <li class="list-group-item">
                                    <br>
                                    <p><b>
                                            {{$question->user_first_name}} {{$question->user_last_name}}: {{$question->question}}
                                        </b></p>

                                    <p>
                                        @foreach($tutors as $tutor)
                                        @if($question->tutor_id==$tutor->id)
                                        {{$tutor->first_name}} {{$tutor->last_name}}: {{$question->answer}}
                                        @endif
                                        @endforeach
                                    </p>
                                </li>
                                @endif
                                @endforeach

                                
                            </ul>

                        </div>

                    </div>
                    
                    @endforeach
                </div>


            </div>

        </div>

    </div>

</div>
@endsection
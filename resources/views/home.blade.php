@extends('layouts.app')

@section('content')
<div style="padding-top: 10vh; padding-left: 13vw; padding-right: 13vw;">

    <h1>UQ&A</h1>

    <div class="card">
        <div class="row">

            <div class="col-sm-6 text-center">
                <div class="card-body">

                    <br><br><br>
                    <a class="portal" href="{{ url('search') }}">
                        <i class="icofont icofont-student-alt icofont-5x"></i>
                        <br><br>
                        <h3>Student</h3>
                    </a>
                    <br><br><br>

                </div>
            </div>

            <div class="col-sm-6 text-center">
                <div class="card-body">

                    <br><br><br>
                    <a class="portal" href="{{ url('tutor') }}">
                        <i class="icofont icofont-teacher icofont-5x"></i>
                        <br><br>
                        <h3>Tutor</h3>
                    </a>
                    <br><br><br>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection

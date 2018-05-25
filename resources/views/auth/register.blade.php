@extends('layouts.app')

@section('content')
<div style="padding-top: 3vh; padding-left: 13vw; padding-right: 13vw;">
<h1>Register an Account</h1>
<div class="container">
        
    <div class="card">
        <div class="row">

            <div class="col-sm-3"></div>

            <div class="col-sm-6">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <label for="registerFirstName">First Name</label>
                                <input type="text" class="form-control{{ $errors->has('first name') ? ' is-invalid' : '' }}" id="first_name" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required autofocus=""> 
                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col">
                                <label for="registerLastName">Last Name</label>
                                <input type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" id="last_name" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" required>
                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="registerStudentNum">Student Number</label>
                            <input type="number" class="form-control{{ $errors->has('student_number') ? ' is-invalid' : '' }}" id="student_number" placeholder="12345678" name="student_number" value="{{ old('student_number') }}" required>
                            @if ($errors->has('student_number'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('student_number') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="registerEmail">Email Address</label>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="s1234567@student.uq.edu.au" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="registerPassword">Password</label>
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="Password" name="password" value="{{ old('password') }}" required>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" class="form-control{{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" id="password-confirm" placeholder="Password" name="password_confirmation" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg float-right" style="margin-bottom: 20px;">Create Account</button>
                    </form>
                </div>
            </div>

            <div class="col-sm-3"></div>

        </div>
    </div>
</div>
</div>
@endsection

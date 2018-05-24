
@extends('layouts.app')

@section('content')

<div style="padding-top: 10vh; padding-left: 13vw; padding-right: 13vw;">

    <a href="{{ url('/') }}">‹ Return to Main Page</a>
    <br>
    <h1>Search Course</h1>

    <div class="card">
        <form id="search-course" class="form-group row" action="{{route('result')}}">
          @csrf
            <div class="col-sm-11">
                <input class="form-control{{ $errors->has('result') ? ' is-invalid' : '' }} form-control-lg no-border" name = "result" id = "result" type="search" placeholder="e.g. INFS3202" aria-label="Search" value="{{ old('result') }}">
                @if ($errors->has('result'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('result') }}</strong>
                      </span>
               @endif
            </div>

            <div class="col-sm-1">
                <button class="btn btn-link btn-lg" type="submit"><i class="icofont icofont-search-alt-2"></i></button>
            </div>
        </form>
    </div>
    @if (session('message'))
    <!-- Notification Box -->
    <div class="notification" style="margin-top:20px;">
        <i class="icofont icofont-lg icofont-close-line"></i>
        <br><br>
        <b>Oops!</b>
        <p>We couldn’t find that course profile.<br>
            Discuss with your tutor about creating one.</p>
        <button type="button" class="btn btn-secondary">Got It</button>
    </div>
    @endif

</div>
@endsection
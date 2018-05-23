
@extends('layouts.app')

@section('content')

<div style="padding-top: 10vh; padding-left: 13vw; padding-right: 13vw;">

    <h1>Search Course</h1>

    <div class="card">
        <form id="search-course" class="form-group row">
            <div class="col-sm-11">
                <input class="form-control form-control-lg no-border" name = "searchCourse" id = "searchCourse" type="search" placeholder="e.g. INFS3202" aria-label="Search">
            </div>

            <div class="col-sm-1">
                <button class="btn btn-link btn-lg" type="submit"><i class="icofont icofont-search-alt-2"></i></button>
            </div>
        </form>
    </div>

    <!-- Notification Box -->
    <div class="notification" style="margin-top:20px;">
        <i class="icofont icofont-lg icofont-close-line"></i>
        <br><br>
        <b>Oops!</b>
        <p>We couldn’t find that course profile.<br>
            Discuss with your tutor about creating one.</p>
        <button type="button" class="btn btn-secondary">Got It</button>
    </div>

</div>

<script>
    $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#searchCourse" ).autocomplete({
      source: availableTags
    });
  } );
</script>

@endsection
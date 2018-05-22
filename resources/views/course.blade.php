<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>UQ&A - Search Course</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icofont.css') }}" >

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.thanks').hide();

            // Toggle semester tabs
            $('#list-semester a').on('click', function (e) {
                e.preventDefault();
                $(this).tab('active')
            });

            // Toggle question and confirmation boxes
            $('#ask button, .thanks button').on('click', function (e) {
                e.preventDefault();
                $('#ask, .thanks').toggle();
            });

            // Collapse notification
            $('i.icofont-close-line, .btn-secondary').on('click', function () {
                $(this).parent('.notification').hide();
            });

        });
    </script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#" style="padding-left: 12vw;">UQ&A</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="#">Account Name <i class="icofont icofont-power"></i></a>
            </li>

        </ul>
    </div>
</nav>

<div style="padding-top: 10vh; padding-left: 13vw; padding-right: 13vw; padding-bottom: 10vh;">

    <a href="search.html">‹ Return to Search Course</a>
    <br>
    <h1>INFS3202</h1>

    <div class="row">

        <!-- Semester Tab Card -->
        <div class="col-3">
            <div class="card">
                <div class="list-group" id="list-semester" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-sem1-list" data-toggle="list" href="#semester-1" role="tab" aria-controls="sem1">Semester 1, 2018</a>
                    <a class="list-group-item list-group-item-action" id="list-sem2-list" data-toggle="list" href="#semester-2" role="tab" aria-controls="sem2">Semester 2, 2017</a>
                    <a class="list-group-item list-group-item-action" id="list-sem3-list" data-toggle="list" href="#semester-3" role="tab" aria-controls="sem3">Semester 1, 2017</a>
                </div>
            </div>
        </div>

        <!-- Answer List Card -->
        <div class="col-9">
            <div class="card course-profile">

                <div class="tab-content" id="nav-tabContent">

                    <!-- Current Semester Tab -->
                    <div class="tab-pane fade show active" id="semester-1" role="tabpanel" aria-labelledby="list-sem1-list">

                        <div class="card-body">
                            <!-- Search -->
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search answered questions..." aria-label="Search answered questions..." aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button"><i class="icofont icofont-search-alt-2"></i></button>
                                </div>
                            </div>

                            <!-- Question Box -->
                            <form id="ask">
                                <div class="form-group">
                                    <label for="askQuestion"><b>Ask a question</b></label>
                                    <textarea class="form-control" id="askQuestion" rows="4"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary float-right" style="margin-bottom: 20px;">Submit Question</button>
                                <br><br><br>
                            </form>

                            <div class="thanks">
                                <br><br>
                                <b>Thank you!</b>
                                <p>Your question has been submitted.</p>
                                <button type="button" class="btn btn-primary">Ask Again</button>
                                <br><br><br>
                            </div>

                            <!-- Answer List -->
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item">
                                    <br>
                                    <p><b>
                                            Isaac Raynald: Lorem ipsum dolor sit amet?
                                        </b></p>

                                    <p>
                                        Daniel Park: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </li>

                                <li class="list-group-item">
                                    <br>
                                    <p><b>
                                            Isaac Raynald: Lorem ipsum dolor sit amet?
                                        </b></p>

                                    <p>
                                        Daniel Park: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </li>

                                <li class="list-group-item">
                                    <br>
                                    <p><b>
                                            Isaac Raynald: Lorem ipsum dolor sit amet?
                                        </b></p>

                                    <p>
                                        Daniel Park: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </li>

                                <li class="list-group-item">
                                    <br>
                                    <p><b>
                                            Isaac Raynald: Lorem ipsum dolor sit amet?
                                        </b></p>

                                    <p>
                                        Daniel Park: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </li>

                                <li class="list-group-item">
                                    <br>
                                    <p><b>
                                            Isaac Raynald: Lorem ipsum dolor sit amet?
                                        </b></p>

                                    <p>
                                        Daniel Park: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </li>

                            </ul>

                        </div>

                    </div>

                    <!-- Past Semester Tab -->
                    <div class="tab-pane fade" id="semester-2" role="tabpanel" aria-labelledby="list-sem2-list">

                        <div class="card-body">
                            <!-- Search -->
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search answered questions..." aria-label="Search answered questions..." aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button"><i class="icofont icofont-search-alt-2"></i></button>
                                </div>
                            </div>

                            <!-- Notification Box -->
                            <div class="notification">
                                <i class="icofont icofont-lg icofont-close-line"></i>
                                <br><br>
                                <b>This is a course page for a past semester.</b>
                                <p>Asking questions has been disabled, <br>
                                    but you may still browse answered questions.</p>
                                <button type="button" class="btn btn-secondary">Got It</button>
                            </div>

                            <!-- Answer List -->
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item">
                                    <br>
                                    <p><b>
                                            Isaac Raynald: Lorem ipsum dolor sit amet?
                                        </b></p>

                                    <p>
                                        Daniel Park: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </li>

                                <li class="list-group-item">
                                    <br>
                                    <p><b>
                                            Isaac Raynald: Lorem ipsum dolor sit amet?
                                        </b></p>

                                    <p>
                                        Daniel Park: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </li>

                                <li class="list-group-item">
                                    <br>
                                    <p><b>
                                            Isaac Raynald: Lorem ipsum dolor sit amet?
                                        </b></p>

                                    <p>
                                        Daniel Park: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </li>

                                <li class="list-group-item">
                                    <br>
                                    <p><b>
                                            Isaac Raynald: Lorem ipsum dolor sit amet?
                                        </b></p>

                                    <p>
                                        Daniel Park: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </li>

                                <li class="list-group-item">
                                    <br>
                                    <p><b>
                                            Isaac Raynald: Lorem ipsum dolor sit amet?
                                        </b></p>

                                    <p>
                                        Daniel Park: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </li>

                            </ul>

                        </div>

                    </div>

                    <!-- Past Semester Tab -->
                    <div class="tab-pane fade" id="semester-3" role="tabpanel" aria-labelledby="list-sem3-list">

                        <div class="card-body">
                            <!-- Search -->
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search answered questions..." aria-label="Search answered questions..." aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button"><i class="icofont icofont-search-alt-2"></i></button>
                                </div>
                            </div>

                            <!-- Notification Box -->
                            <div class="notification">
                                <i class="icofont icofont-lg icofont-close-line"></i>
                                <br><br>
                                <b>This is a course page for a past semester.</b>
                                <p>Asking questions has been disabled, <br>
                                    but you may still browse answered questions.</p>
                                <button type="button" class="btn btn-secondary">Got It</button>
                            </div>

                            <!-- Answer List -->
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item">
                                    <br>
                                    <p><b>
                                            Isaac Raynald: Lorem ipsum dolor sit amet?
                                        </b></p>

                                    <p>
                                        Daniel Park: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </li>

                                <li class="list-group-item">
                                    <br>
                                    <p><b>
                                            Isaac Raynald: Lorem ipsum dolor sit amet?
                                        </b></p>

                                    <p>
                                        Daniel Park: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </li>

                                <li class="list-group-item">
                                    <br>
                                    <p><b>
                                            Isaac Raynald: Lorem ipsum dolor sit amet?
                                        </b></p>

                                    <p>
                                        Daniel Park: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </li>

                                <li class="list-group-item">
                                    <br>
                                    <p><b>
                                            Isaac Raynald: Lorem ipsum dolor sit amet?
                                        </b></p>

                                    <p>
                                        Daniel Park: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </li>

                                <li class="list-group-item">
                                    <br>
                                    <p><b>
                                            Isaac Raynald: Lorem ipsum dolor sit amet?
                                        </b></p>

                                    <p>
                                        Daniel Park: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>


        </div>

    </div>

</div>

</body>
</html>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>UQ&A - Register</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#" style="padding-left: 12vw;">UQ&A</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </div>
</nav>

<div style="padding-top: 10vh; padding-left: 13vw; padding-right: 13vw;">

    <h1>Register an Account</h1>

    <div class="card">
        <div class="row">

            <div class="col-sm-3"></div>

            <div class="col-sm-6">
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="col">
                                <label for="registerFirstName">First Name</label>
                                <input type="text" class="form-control" id="registerFirstName" placeholder="First Name">
                            </div>
                            <div class="col">
                                <label for="registerLastName">Last Name</label>
                                <input type="text" class="form-control" id="registerLastName" placeholder="Last Name">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="registerStudentNum">Student Number</label>
                            <input type="number" class="form-control" id="registerStudentNum" placeholder="12345678">
                        </div>
                        <div class="form-group">
                            <label for="registerEmail">Email Address</label>
                            <input type="email" class="form-control" id="registerEmail" placeholder="s1234567@student.uq.edu.au">
                        </div>
                        <div class="form-group">
                            <label for="registerPassword">Password</label>
                            <input type="password" class="form-control" id="registerPassword" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg float-right" style="margin-bottom: 20px;">Create Account</button>
                    </form>
                </div>
            </div>

            <div class="col-sm-3"></div>

        </div>
    </div>

</div>

</body>
</html>
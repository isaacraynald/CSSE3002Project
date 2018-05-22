@extends('layouts.app')

@section('content')

<div style="padding-top: 10vh; padding-left: 13vw; padding-right: 13vw;">

  <h1>Course List</h1>

  <div class="card">
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link btn-primary btn-lg" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Semester1, 2018
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action d-flex align-items-center makedefault">DECO1234<span class="badge badge-primary badge-danger" style="margin-left:15px;">14</span></a>
          <a href="#" class="list-group-item list-group-item-action makedefault">INFS1234<span class="badge badge-primary badge-danger" style="margin-left:15px;">2</span></a>
          <a href="#" class="list-group-item list-group-item-action makedefault">CSSE1234<span class="badge badge-primary badge-danger" style="margin-left:15px;">0</span></a>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
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
  </div>
</div>



  </div>


</div>

@endsection

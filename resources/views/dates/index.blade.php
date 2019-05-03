@extends('admin.layouts.app')

@section('admin_section')

  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center titolo-istruttori-fitness mt-5">
        <h1>ORARI DISPONIBILI</h1>
      </div>
    </div>
  </div>
  <div class="container mb-5 mt-5">
    <div class="row">
      @foreach ($dates as $date)
      <div class="col-lg-4 col-md-12 col-sm-12 text-center d-flex justify-content-center align-items-center">
          <h3>{{$date->day}}</h3>

      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 text-center d-flex justify-content-center align-items-center">
        <h3>{{$date->hour}}</h3>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 text-center date-delete d-flex justify-content-center align-items-center">
        <a href="#"><i class="fas fa-times" ></i></a>
      </div>
      @endforeach
    </div>
  </div>

@endsection

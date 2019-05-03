@extends('layouts.app')

@section('content')

@foreach ($date as $value)
  {{dd($value)}}
@endforeach

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 slider-fitness">
        <div class="slider-fitness-txt" data-aos="fade-right">

            <h1>FITNESS <span>SPORTFLY</span></h1>
            <p>Scopri tutti i nostri corsi fitness</p>
            <p>non farteli scappare</p>

        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-12 col-md-12 box-corsi-title">
        <img src="https://s3.eu-west-1.amazonaws.com/lesmills.fr/_b2b/logos/logo-lm.png" alt="">
      </div>

      @foreach ($courseslm as $courselesmilles)
        <div class="col-lg-3 col-md-12 col-sm-12 box-corsi bodypump pulse animated" style="background-image: linear-gradient(rgba(255,255,255,.7), rgba(255,255,255,.7)), url('{{asset('storage/'.$courselesmilles->bg_image)}}');">
          <a href="{{route('bodypump')}}"><img class="logo-lm" src="{{asset('storage/'.$courselesmilles->logo_course)}}" alt=""></a>
        </div>
      @endforeach

    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 visualizza-istruttori">
        <a href="{{route('trainers.visualizza')}}"><h1>SCOPRI GLI ISTRUTTORI FITNESS <span>SPORTFLY</span></h1></a>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-12 col-md-12 box-corsi-title-sf">
        <h1><span>SPORTFLY</span> ACTIVITIES</h1>
      </div>

      @foreach ($coursesnolm as $coursenolesmilles)
        <div class="col-lg-4 col-md-12 box-corsi-ext">
          <img src="{{asset('storage/'.$coursenolesmilles->logo_course)}}" alt="" data-aos="flip-left">
          <h3>{{$coursenolesmilles->name_course}}</h3>
          <p>{{Str::words($coursenolesmilles->description_course, 10)}}</p>
          <a href="#">scopri di più</a>
        </div>
      @endforeach

    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 box-corsi-title-sf">
        <h1><span>ORARI ATTIVITà</span> FITNESS</h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">

      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <h1 class="text-center mt-5 sportfly-grey">SALA FITNESS A</h1>
        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Lunedi</th>
              <th scope="col">Martedi</th>
              <th scope="col">Mercoledi</th>
              <th scope="col">Giovedi</th>
              <th scope="col">Venerdi</th>
              <th scope="col">Sabato</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">9:30</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">10:00</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">10:15</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">10:30</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">13:30</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-lg-6 col-md-12">
        <h1 class="text-center mt-5 sportfly-grey">SALA FITNESS B</h1>
        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Lunedi</th>
              <th scope="col">Martedi</th>
              <th scope="col">Mercoledi</th>
              <th scope="col">Giovedi</th>
              <th scope="col">Venerdi</th>
              <th scope="col">Sabato</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">9:30</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">10:00</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">10:15</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">10:30</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">13:30</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection

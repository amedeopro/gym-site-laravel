
@extends('layouts.app')

@section('content')



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
          <a href="{{route('courses.corso_singolo', $courselesmilles->slug)}}"><img class="logo-lm" src="{{asset('storage/'.$courselesmilles->logo_course)}}" alt=""></a>
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
          <a href="{{route('courses.corso_singolo', $coursenolesmilles->slug)}}">scopri di più</a>
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


  {{-- <div class="container">
    <div class="row">
      <div class="col-lg-12">
        @foreach ($dates as $date)
          <p>{{$date['day']}} {{$date['hour']}}</p>
          @foreach ($date['courses'] as $value)
            <p>{{$value['name_course']}}</p>
          @endforeach
        @endforeach
      </div>
    </div>
  </div> --}}


@endsection

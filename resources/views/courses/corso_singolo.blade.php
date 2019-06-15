@extends('layouts.app')

@section('content')

  {{-- {{dd($courses)}} --}}


@foreach ($courses as $course)
  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-lg-12 text-single-course-header">
              <h1 class="mt-5 mb-5 text-center">{{$course['name_course']}}</h1>
              <h4>{{$course['description_course']}}</h4>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row" style="background:url({{asset('storage/'.$course['bg_image'])}}); background-position: center; background-size: cover; height:500px;">
      <div class="col-lg-12">

      </div>

    </div>
  </div>

  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-lg-12 vantaggi-single-course">
      <h2 class="text-center">I VANTAGGI DI {{$course['name_course']}}</h2>
      <h4>{{$course['vantaggi']}} </h4>
      </div>
    </div>
  </div>

  <div class="container-fluid background-single-course-pre-footer">
    <div class="row">
      <div class="col-lg-12 mt-5">
        <h3 class="text-center" style="text-transform: uppercase;">I BENEFICI DI {{$course['name_course']}}</h3>
      </div>
      
      <div class="container mt-3">
        <div class="row text-center">
          <div class="col-lg-4 col-md-12 col-sm-12">
            <h6><i class="far fa-check-circle"></i> {{$course['beneficio1']}}</h6>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12">
            <h6><i class="far fa-check-circle"></i> {{$course['beneficio2']}}</h6>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12">
            <h6><i class="far fa-check-circle"></i> {{$course['beneficio3']}}</h6>
          </div>
        </div>
      </div>

      <div class="container mt-5 mb-5">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="text-center">SIETE PRINCIPIANTI ?</h3>
            <p>{{$course['principiante']}}</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="text-center mb-5 mt-5">CHI SEGUIRA LE TUE LEZIONI ?</h3>
      </div>
    </div>
  </div>

  <div class="container mb-5">
    <div class="row">
      @foreach ($course['trainers'] as $value)
      <div class="col-lg-4 col-md-12 col-sm12 text-center istruttori-corso-singolo">
        <a class="istruttore-su-corsi" href="{{route('trainers.trainer_singolo', $value['slug'])}}"><img class="mr-3" src="{{asset('storage/'.$value['image'])}}" alt="">{{$value['name']}} {{$value['surname']}}</a>
      </div>
    @endforeach
    </div>
  </div>
@endforeach



  {{-- @foreach ($courses as $course)
    <div class="container-fluid mb-5">
      <div class="row" style="background:url({{asset('storage/'.$course['bg_image'])}}); background-position: center; background-size: cover;">
        <div class="col-lg-12 mb-5 mt-5">

        </div>
      </div>
    </div>
    <div class="container mb-5">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center align-items-center">
          <img src="{{asset('storage/'.$course['logo_course'])}}" alt="">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 right-single-course">
          <h1>{{$course['name_course']}}</h1>
          <p>{{$course['description_course']}}</p>
          <h4>Istruttori che seguono il corso di {{$course['name_course']}}</h4>
          @foreach ($course['trainers'] as $value)
            <p><a class="istruttore-su-corsi" href="{{route('trainers.trainer_singolo', $value['slug'])}}">{{$value['name']}} {{$value['surname']}}</a></p>
          @endforeach
          <div class="pulsante mt-5">
            <a href="#">Richiedi una prova gratuita</a>
          </div>
        </div>
      </div>
    </div>

  @endforeach --}}


@endsection

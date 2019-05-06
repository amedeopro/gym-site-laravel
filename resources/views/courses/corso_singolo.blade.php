@extends('layouts.app')

@section('content')

  {{-- {{dd($courses)}} --}}


  @foreach ($courses as $course)
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

  @endforeach


@endsection

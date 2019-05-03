@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12 text-center d-flex justify-content-end align-items-start image-single-trainer">
        <img src="{{asset('storage/'.$trainer->image)}}" alt="">
      </div>
      <div class="col-lg-8 col-md-12 col-sm-12 mt-5 mb-5 text-single-trainer">
        <h1>{{$trainer->name}} <span>{{$trainer->surname}}</span></h1>
        <h4>Bio:</h4>
        <p>{{$trainer->description}}</p>
        <h4>Corsi seguiti da {{$trainer->name}}:</h4>

        @foreach ($trainer->courses as $course)

            <div class="mr-3"><i class="far fa-dot-circle"></i> {{$course->name_course}} </div>

        @endforeach

      </div>
    </div>
  </div>


@endsection

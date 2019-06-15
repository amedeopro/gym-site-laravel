@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 text-center courses-inner-title">
      @foreach ($categories as $category)
        <h1>CATEGORIA <span>{{$category['category_name']}}</span></h1>
      @endforeach

    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    @foreach ($categories as $category)
      @foreach ($category['courses'] as $course)
        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mb-5 courses-boxes">
          <img src="{{asset('storage/'.$course['logo_course'])}}" alt="">
          <h3>{{$course['name_course']}}</h3>
          <p>{{Str::words($course['description_course'],50)}}</p>
          <div class="pulsante-innercat text-center">
            <a href="{{route('courses.corso_singolo', $course['slug'])}}">Scopri di più</a>
          </div>
        </div>
      @endforeach


    @endforeach
  </div>
</div>


@endsection

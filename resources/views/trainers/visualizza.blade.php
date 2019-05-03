@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 text-center mt-5 mb-5 titolo-istruttori-fitness">
        <h1>ISTRUTTORI <span>FITNESS</span></h1>
      </div>
    </div>
  </div>

<div class="container">
  <div class="row">
    @foreach ($trainers as $trainer)
      <div class="col-lg-3 col-md-6 col-sm-12 trainers" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        <img src="{{asset('storage/'.$trainer->image)}}" alt="" >
        <h3>{{$trainer->name}} {{$trainer->surname}}</h3>
        <p>{{Str::words($trainer->description, 10)}}</p>

        <a href="{{route('trainers.show', $trainer->id)}}" class="btn btn-info mb-5">Scopri di più</a>
      </div>
    @endforeach
  </div>
</div>




@endsection

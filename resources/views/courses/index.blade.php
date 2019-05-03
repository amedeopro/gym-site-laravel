@extends('admin.layouts.app')

@section('admin_section')
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 text-center mt-5 mb-5 titolo-istruttori-fitness">
        <h1>CORSI <span>SPORTFLY</span></h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 mb-5 text-center">
        <a href="{{route('courses.create')}}" class="btn btn-primary">AGGIUNGI UN NUOVO CORSO</a>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row mb-3">
      <div class="col-lg-2 col-md-12 col-sm-12 text-center">
        <h4>Logo</h4>
      </div>
      <div class="col-lg-2 col-md-12 col-sm-12 text-center">
        <h4>Nome del Corso</h4>
      </div>
      <div class="col-lg-2 col-md-12 col-sm-12 text-center">
        <h4>Descrizione</h4>
      </div>
      <div class="col-lg-2 col-md-12 col-sm-12 text-center">

      </div>
      <div class="col-lg-2 col-md-12 col-sm-12 text-center">

      </div>
      <div class="col-lg-2 col-md-12 col-sm-12 text-center">

      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row mb-5">
      @foreach ($courses as $course)
        <div class="col-lg-2 col-md-12 col-sm-12 d-flex justify-content-center align-items-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">

          <img class="image-responsive" src="{{asset('storage/'.$course->logo_course)}}" alt="" >

        </div>

        <div class="col-lg-2 col-md-12 col-sm-12 d-flex justify-content-center align-items-center text-align-center mb-5 mt-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">

          <h3>{{$course->name_course}}</h3>

        </div>

        <div class="col-lg-2 col-md-12 col-sm-12 d-flex justify-content-center align-items-center text-align-center mb-5 mt-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">

          <p>{{Str::words($course->description_course, 10)}}</p>

        </div>

        <div class="col-lg-2 col-md-12 col-sm-12 d-flex justify-content-center align-items-center text-align-center mb-5 mt-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">

          <a href="#" class="btn btn-primary">VISUALIZZA</a>

        </div>
        <div class="col-lg-2 col-md-12 col-sm-12 d-flex justify-content-center align-items-center text-align-center mb-5 mt-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">

          <a href="{{ route('courses.edit', $course->id)}}" class="btn btn-warning">MODIFICA</a>

        </div>
        <div class="col-lg-2 col-md-12 col-sm-12 d-flex justify-content-center align-items-center text-align-center mb-5 mt-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">

          <form action="{{route('courses.destroy', $course->id)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Elimina">
          </form>

        </div>
      @endforeach
    </div>
  </div>

@endsection

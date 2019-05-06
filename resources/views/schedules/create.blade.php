@extends('admin.layouts.app')

@section('admin_section')
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 text-center mt-5 mb-5 titolo-istruttori-fitness">
        <h1>INSERISCI UN NUOVO <span>ORARIO</span></h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form class="form-group" action="{{route('schedules.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
              <label for="title">Corso</label>
              <select class="form-control" name="course">
                <option selected value=""> </option>
                @foreach ($courses as $course)
                  <option value="{{$course->name_course}}">{{$course->name_course}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="title">Istruttore</label>
              <select class="form-control" name="trainer">
                <option selected value=""> </option>
                @foreach ($trainers as $trainer)
                  <option value="{{$trainer->name}} {{$trainer->surname}}">{{$trainer->name}} {{$trainer->surname}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="title">Giorno</label>
              <select class="form-control" name="day">
                <option selected value=""> </option>
                @foreach ($days as $day)
                  <option value="{{$day->day}}">{{$day->day}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="title">Orario</label>
              <select class="form-control" name="hour">
                <option selected value=""> </option>
                @foreach ($hours as $hour)
                  <option value="{{$hour->hour}}">{{$hour->hour}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="title">Sala</label>
              <select class="form-control" name="room">
                <option selected value=""> </option>

                <option value="fitness a">FITNESS A</option>
                  <option value="fitness b">FITNESS B</option>

              </select>
            </div>


            <div class="form-group">
              <input type="submit" class="form-control" value="INSERISCI ORARIO">
            </div>
          </form>
      </div>
    </div>
  </div>
@endsection

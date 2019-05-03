@extends('admin.layouts.app')

@section('admin_section')
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5 mb-5 titolo-istruttori-fitness">

        <h1>INSERISCI UN ORARIO</h1>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form class="form-group" action="{{route('dates.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
              <label for="day">Scegli un giorno della settimana</label>
              <select class="form-control" name="day">
                <option value="lunedì">Lunedì</option>
                <option value="martedì">Martedì</option>
                <option value="mercoledì">Mercoledì</option>
                <option value="giovedì">Giovedì</option>
                <option value="venerdì">Venerdì</option>
                <option value="sabato">Sabato</option>
              </select>
            </div>

            <div class="form-group">
              <label for="hour">Inserisce l'orario in questo formato es. 13:30</label>
              <input type="text" class="form-control" name="hour" placeholder="Inserisci l'orario">
            </div>

            <div class="form-group">
              <input type="submit" class="form-control" value="INSERISCI ORARIO">
            </div>

          </form>
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

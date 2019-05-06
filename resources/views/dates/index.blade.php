@extends('admin.layouts.app')

@section('admin_section')

  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center titolo-istruttori-fitness mt-5">
        <h1>ORARI DISPONIBILI</h1>
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
        <form action="{{route('dates.destroy', $date->id)}}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" class="btn btn-danger" value="Elimina">
        </form>
      </div>
      @endforeach
    </div>
  </div>

@endsection

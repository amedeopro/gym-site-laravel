@extends('admin.layouts.app')

@section('admin_section')
  <div class="container">
    @foreach ($hours as $hour)
    <div class="row text-center mb-3">
      <div class="col-lg-6">
        <h3>{{$hour->hour}}</h3>
      </div>
      <div class="col-lg-6">
        <a href="#" class="btn btn-danger">Elimina</a>
      </div>
    </div>
  @endforeach
  </div>



@endsection

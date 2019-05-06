@extends('admin.layouts.app')

@section('admin_section')

  <div class="container-fluid">
    @foreach ($schedules as $schedule)
      <div class="row mb-3 text-center">
        <div class="col-lg-2">
          {{$schedule->course}}
        </div>
        <div class="col-lg-2">
          {{$schedule->trainer}}
        </div>
        <div class="col-lg-1">
          {{$schedule->day}}
        </div>
        <div class="col-lg-1">
          {{$schedule->hour}}
        </div>
        <div class="col-lg-1">
          {{$schedule->room}}
        </div>
        <div class="col-lg-1">
          {{$schedule->logo}}
        </div>
        <div class="col-lg-2">
          <a href="#" class="btn btn-warning">Modifica</a>
        </div>
        <div class="col-lg-2">
          <a href="#" class="btn btn-danger">Elimina</a>
        </div>
      </div>
    @endforeach
  </div>

@endsection

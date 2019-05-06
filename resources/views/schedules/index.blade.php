@extends('admin.layouts.app')

@section('admin_section')

  <div class="container">
    @foreach ($schedules as $schedule)
      <div class="row">
        <div class="col-lg-2">
          {{$schedule->course}}
        </div>
        <div class="col-lg-2">
          {{$schedule->trainer}}
        </div>
        <div class="col-lg-2">
          {{$schedule->day}}
        </div>
        <div class="col-lg-2">
          {{$schedule->hour}}
        </div>
        <div class="col-lg-2">
          {{$schedule->room}}
        </div>
        <div class="col-lg-2">
          {{$schedule->logo}}
        </div>
      </div>
    @endforeach
  </div>

@endsection

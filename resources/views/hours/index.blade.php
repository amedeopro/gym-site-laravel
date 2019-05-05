@extends('admin.layouts.app')

@section('admin_section')
  @foreach ($hours as $hour)
    {{$hour->hour}}
  @endforeach
@endsection

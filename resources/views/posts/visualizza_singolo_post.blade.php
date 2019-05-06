@extends('layouts.app')

@section('content')

@foreach ($posts as $post)
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>{{$post['title']}}</h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-12 image-single-post">
      <img src={{asset('storage/'.$post['image_post'])}} alt="">
    </div>
  </div>
</div>

<div class="container mb-5">
  <div class="row">
    <div class="col-lg-12">
      <p>{{$post['content']}}</p>
    </div>
  </div>
</div>
@endforeach
@endsection

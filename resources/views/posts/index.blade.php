@extends('admin.layouts.app')

@section('admin_section')

  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 mb-5 mt-5 text-center titolo-gestione-articoli">
        <h1>TUTTI I TUOI <span>ARTICOLI</span> </h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      @foreach ($posts as $post)
      <div class="col-lg-3 col-sm-12 mt-3">
        <h4>{{$post->title}}</h4>
      </div>
      <div class="col-lg-3 col-sm-12 mt-3">
        {{$post->updated_at}}
      </div>
      <div class="col-lg-3 col-sm-12 mt-3 text-center">
        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-warning">Modifica</a>
      </div>
      <div class="col-lg-3 col-sm-12 mt-3 text-center">
        <form action="{{route('posts.destroy', $post->id)}}" method="post">
          @csrf
          @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Elimina">
      </form>
      </div>
        @endforeach
    </div>
  </div>



@endsection

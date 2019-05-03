@extends('admin.layouts.app')

@section('admin_section')
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 text-center mt-5 mb-5 titolo-istruttori-fitness">
        <h1>INSERISCI UN NUOVO <span>ARTICOLO</span></h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form class="form-group" action="{{route('posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="title">Titolo</label>
              <input type="text" class="form-control" name="title" value="{{$post->title}}">
            </div>

            <div class="form-group">
              <label for="content">Contenuto dell'articolo</label>
              <textarea id="summary-ckeditor" class="form-control" name="content" rows="8" cols="80">{{$post->content}}</textarea>
            </div>

            <div class="form-group">
              <img src="{{asset('storage/'.$post->image_post)}}" alt="">
            </div>


            <div class="custom-file">
              <input type="file" class="custom-file-input" name="image_post">
              <label class="custom-file-label" for="image_post">Scegli un'immagine</label>
            </div>

            <div class="form-group">
              <input type="submit" class="form-control" value="AGGIORNA ARTICOLO">
            </div>
          </form>
      </div>
    </div>
  </div>
@endsection

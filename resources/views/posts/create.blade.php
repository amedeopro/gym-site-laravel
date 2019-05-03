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
        <form class="form-group" action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
              <label for="title">Titolo</label>
              <input type="text" class="form-control" name="title" placeholder="Inserisci il titolo dell'articolo">
            </div>

            <div class="form-group">
              <label for="content">Contenuto dell'articolo</label>
              <textarea id="summary-ckeditor" class="form-control" name="content" rows="8" cols="80"></textarea>
            </div>


            <div class="custom-file">
              <input type="file" class="custom-file-input" name="image_post">
              <label class="custom-file-label" for="image_post">Scegli un'immagine</label>
            </div>

            <div class="form-group">
              <input type="submit" class="form-control" value="INSERISCI ARTICOLO">
            </div>
          </form>
      </div>
    </div>
  </div>
@endsection

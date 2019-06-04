@extends('admin.layouts.app')

@section('admin_section')
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 text-center mt-5 mb-5 titolo-istruttori-fitness">
        <h1>AGGIORNA <span>CATEGORIA</span></h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form class="form-group" action="{{route('categories.update', $category->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="category_name">Nome della categoria</label>
              <input type="text" class="form-control" name="category_name" placeholder="Inserisci il nome della categoria" value="{{$category->category_name}}">
            </div>

            <div class="form-group">
              <label for="category_dsc">Descrizione della categoria</label>
              <textarea name="category_dsc" rows="8" cols="80" class="form-control">{!! $category->category_dsc !!}</textarea>
            </div>

            <div class="form-group img-update-category">
              <img src="{{asset('storage/'.$category->category_img)}}" alt="">
            </div>


            <div class="custom-file">
              <input type="file" class="custom-file-input" name="category_img">
              <label class="custom-file-label" for="category_img">Scegli un'immagine</label>
            </div>

            <div class="form-group">
              <input type="submit" class="form-control" value="MODIFICA CATEGORIA">
            </div>
          </form>
      </div>
    </div>
  </div>
@endsection

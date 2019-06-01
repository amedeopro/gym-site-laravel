@extends('admin.layouts.app')

@section('admin_section')

  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 text-center mt-5 mb-5 titolo-istruttori-fitness">
        <h1>INSERISCI UNA NUOVA <span>CATEGORIA</span></h1>
      </div>
    </div>
  </div>


<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <form class="form-group" action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('POST')

          <div class="form-group">
            <label for="category_name">Nome della categoria</label>
            <input type="text" class="form-control" name="category_name" placeholder="Inserisci il nome della categoria">
          </div>

          <div class="form-group">
            <label for="category_dsc">Descrizione della categoria</label>
            <textarea name="category_dsc" rows="8" cols="80" class="form-control"></textarea>
          </div>


          <div class="custom-file">
            <input type="file" class="custom-file-input" name="category_img">
            <label class="custom-file-label" for="category_img">Scegli un'immagine</label>
          </div>

          <div class="form-group">
            <input type="submit" class="form-control" value="INSERISCI CATEGORIA">
          </div>
        </form>
    </div>
  </div>
</div>
@endsection

@extends('admin.layouts.app')

@section('admin_section')
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 text-center mt-5 mb-5 titolo-istruttori-fitness">
        <h1>CATEGORIE <span>CORSI</span></h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 mb-5 text-center">
        <a href="{{route('categories.create')}}" class="btn btn-primary">AGGIUNGI UNA NUOVA CATEGORIA</a>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row mb-3">
      <div class="col-lg-2 col-md-12 col-sm-12 text-center">
        <h4>Immagine</h4>
      </div>
      <div class="col-lg-2 col-md-12 col-sm-12 text-center">
        <h4>Nome della Categoria</h4>
      </div>
      <div class="col-lg-2 col-md-12 col-sm-12 text-center">

      </div>
      <div class="col-lg-2 col-md-12 col-sm-12 text-center">

      </div>
      <div class="col-lg-2 col-md-12 col-sm-12 text-center">

      </div>
      <div class="col-lg-2 col-md-12 col-sm-12 text-center">

      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row mb-5">
      @foreach ($categories as $category)
        <div class="col-lg-2 col-md-12 col-sm-12 d-flex justify-content-center align-items-center">

          <img class="image-responsive" src="{{asset('storage/'.$category->category_img)}}" alt="" >

        </div>

        <div class="col-lg-2 col-md-12 col-sm-12 d-flex justify-content-center align-items-center text-align-center mb-5 mt-5">

          <h3>{{$category->category_name}}</h3>

        </div>

        <div class="col-lg-2 col-md-12 col-sm-12 d-flex justify-content-center align-items-center text-align-center mb-5 mt-5">



        </div>

        <div class="col-lg-2 col-md-12 col-sm-12 d-flex justify-content-center align-items-center text-align-center mb-5 mt-5">

          <a href="#" class="btn btn-primary">VISUALIZZA</a>

        </div>
        <div class="col-lg-2 col-md-12 col-sm-12 d-flex justify-content-center align-items-center text-align-center mb-5 mt-5">

          <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">MODIFICA</a>

        </div>
        <div class="col-lg-2 col-md-12 col-sm-12 d-flex justify-content-center align-items-center text-align-center mb-5 mt-5">

          <form action="{{route('categories.destroy', $category->id)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Elimina">
          </form>

        </div>
      @endforeach
    </div>
  </div>

@endsection

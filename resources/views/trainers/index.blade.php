@extends('admin.layouts.app')

@section('admin_section')

  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 text-center mt-5 mb-5 titolo-istruttori-fitness">
        <h1>GESTIONE ISTRUTTORI <span>FITNESS</span></h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row admin-trainers">
      @foreach ($trainers as $trainer)
        <div class="col-lg-3 col-md-3 col-sm-12 trainers">
          <img src="{{asset('storage/'.$trainer->image)}}" alt="">
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 trainers">
            <h3>{{$trainer->name}} {{$trainer->surname}}</h3>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 trainers">
          <a href="{{ route('trainers.edit', $trainer->id)}}" class="btn btn-primary">Modifica</a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 trainers">
          <form action="{{route('trainers.destroy', $trainer->id)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Elimina">
          </form>

      </div>
      @endforeach
      <div class="container">
        <div class="row pulsante-creazione">
          <div class="col-lg-12">
            <a href="{{route('trainers.create')}}" class="btn btn-success">INSERISCI UN NUOVO ISTRUTTORE FITNESS</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

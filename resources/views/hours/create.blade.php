@extends('admin.layouts.app')

@section('admin_section')
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mt-5">
        <form class="form-group" action="{{route('hours.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
              <label for="hour">Inserisci un orario in questo formato es. 13:30</label>
              <input type="text" class="form-control" name="hour" placeholder="Inserisci l'orario">
            </div>

            <div class="form-group">
              <input type="submit" class="form-control" value="INSERISCI ORARIO">
            </div>

          </form>
      </div>
    </div>
  </div>
@endsection

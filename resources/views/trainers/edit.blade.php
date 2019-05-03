@extends('admin.layouts.app')

@section('admin_section')

  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 text-center mt-5 mb-5 titolo-istruttori-fitness">
        <h1>MODIFICA ISTRUTTORE <span>FITNESS</span></h1>
      </div>
    </div>
  </div>


<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <form class="form-group" action="{{route('trainers.update', $trainer->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" value="{{$trainer->name}}">
          </div>

          <div class="form-group">
            <label for="surname">Cognome</label>
            <input type="text" class="form-control" name="surname" value="{{$trainer->surname}}">
          </div>

          <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" name="description" rows="8" cols="80">{!! $trainer->description !!}</textarea>
          </div>

          @foreach ($courses as $course)
            <div class="form-check form-check-inline mb-2">
              <input name="course_id[]" class="form-check-input" type="checkbox" value="{{$course->id}}" @foreach ($trainer->courses as $value)
                {{($course->id == $value->pivot->course_id) ? 'checked' : ''}}

              @endforeach>

              <label class="form-check-label" for="course_id">{{$course->name_course}}</label>

            </div>
          @endforeach

          <div class="form-group">
            <img src="{{asset('storage/'.$trainer->image)}}" alt="">
          </div>

          <div class="custom-file">
            <input type="file" class="custom-file-input" name="image">
            <label class="custom-file-label" for="image">Scegli un'immagine</label>
            <div class="invalid-feedback"><strong>N.B.</strong> dimensione consigliata 160px x 160px</div>
          </div>

          <div class="form-group">
            <input type="submit" class="form-control" value="MODIFICA ISTRUTTORE">
          </div>
        </form>
    </div>
  </div>
</div>
@endsection

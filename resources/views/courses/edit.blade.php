@extends('admin.layouts.app')

@section('admin_section')
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 text-center mt-5 mb-5 titolo-istruttori-fitness">
        <h1>INSERISCI UN NUOVO <span>CORSO</span></h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form class="form-group" action="{{route('courses.update', $course->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="name_course">Nome del corso</label>
              <input type="text" class="form-control" name="name_course" value="{{$course->name_course}}">
            </div>

            <div class="form-group">
              <label for="description_course">Descrizione del corso</label>
              <textarea class="form-control" name="description_course" rows="8" cols="80">{!! $course->description_course !!}</textarea>
            </div>

            <div class="form-group">
              <img src="{{asset('storage/'.$course->logo_course)}}" alt="">
            </div>

            <div class="custom-file">
              <input type="file" class="custom-file-input" name="logo_course">
              <label class="custom-file-label" for="logo_course">Scegli un'immagine</label>
              <div class="invalid-feedback"><strong>N.B.</strong> dimensione consigliata 160px x 160px</div>
            </div>

            <div class="form-group">
              <img src="{{asset('storage/'.$course->bg_image)}}" alt="">
            </div>

            <div class="custom-file">
              <input type="file" class="custom-file-input" name="bg_image">
              <label class="custom-file-label" for="bg_image">Scegli un'immagine</label>
              <div class="invalid-feedback"><strong>N.B.</strong> dimensione consigliata 160px x 160px</div>
            </div>

            <div class="form-group">
              <input type="submit" class="form-control" value="MODIFICA CORSO">
            </div>
          </form>
      </div>
    </div>
  </div>
@endsection

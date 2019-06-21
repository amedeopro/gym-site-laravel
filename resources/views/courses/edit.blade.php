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
              <label for="vantaggi">Vantaggi</label>
              <textarea class="form-control" name="vantaggi" rows="8" cols="80">{!! $course->vantaggi !!}</textarea>
            </div>

            <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="beneficio1">Beneficio 1</label>
                  <textarea class="form-control" name="beneficio1" rows="8" cols="80">{!! $course->beneficio1 !!}</textarea>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group">
                  <label for="beneficio2">Beneficio 2</label>
                  <textarea class="form-control" name="beneficio2" rows="8" cols="80">{!! $course->beneficio2 !!}</textarea>
                </div>
              </div>

              <div class="col-lg-4">

                <div class="form-group">
                  <label for="beneficio3">Beneficio 3</label>
                  <textarea class="form-control" name="beneficio3" rows="8" cols="80">{!! $course->beneficio3 !!}</textarea>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="principiante">Principiante</label>
              <textarea class="form-control" name="principiante" rows="8" cols="80">{!! $course->principiante !!}</textarea>
            </div>

            {{-- <p>Quando viene svolto questo corso ?</p>
            @foreach ($dates as $date)
              <div class="form-check form-check-inline mb-3">
                <input name="date_id[]" class="form-check-input" type="checkbox" value="{{$date->id}}" @foreach ($course->dates as $value)
                  {{($date->id == $value->pivot->date_id) ? 'checked' : ''}}

                @endforeach>
                <label class="form-check-label" for="date_id">{{$date->day}} {{$date->hour}}</label>
              </div>
            @endforeach --}}

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

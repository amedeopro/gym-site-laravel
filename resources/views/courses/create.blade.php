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
        <form class="form-group" action="{{route('courses.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
              <label for="name_course">Nome del corso</label>
              <input type="text" class="form-control" name="name_course" placeholder="Inserisci il nome del corso">
            </div>

            <div class="form-check form-check-inline mb-2">
              <input name="lesmills" type="hidden" value="0">
              <input name="lesmills" class="form-check-input" type="checkbox" value="1">
              <label class="form-check-label" for="lesmills">Se stai inserendo un corso Les Mills spunta questa casella</label>
            </div>

            <div class="form-group">
              <label for="description_course">Descrizione del corso</label>
              <textarea class="form-control" name="description_course" rows="8" cols="80"></textarea>
            </div>

            @foreach ($categories as $category)
              <div class="form-check form-check-inline mb-2">
                <input name="category_id[]" class="form-check-input" type="checkbox" value="{{$category->id}}">
                <label class="form-check-label" for="category_id">{{$category->category_name}}</label>
              </div>
            @endforeach

            {{-- @foreach ($days as $day)
              <div class="form-check form-check-inline mb-3">
                <input name="day_id[]" class="form-check-input" type="checkbox" value="{{$day->id}}">
                <label class="form-check-label" for="day_id">{{$day->day}}</label>
              </div>
            @endforeach --}}

            {{-- <div class="container mb-5">
              <div class="row">
                <div class="col-lg-4">
                  <span>In quale giorno viene svolto questo corso ?</span>
                  <select class="form-control" name="day_id[]">
                    <option value="" selected> </option>
                    @foreach ($days as $day)
                    <option value="{{$day->id}}">{{$day->day}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-4">
                  <span>In quale orario ?</span>
                  <select class="form-control" name="hour_id[]">
                    <option value="" selected> </option>
                    @foreach ($hours as $hour)
                    <option value="{{$hour->id}}">{{$hour->hour}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-4">
                  <span>Scegli l'istruttore</span>
                  <select class="form-control" name="trainer_id[]">
                    <option value="" selected> </option>
                    @foreach ($trainers as $trainer)
                    <option value="{{$trainer->id}}">{{$trainer->name}} {{$trainer->surname}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div> --}}

            {{-- @foreach ($days as $day)
              {{dd($day['day'])}}
            @endforeach --}}


            {{-- @foreach ($days as $day)
              <div class="form-check form-check-inline mb-3">
                <input name="day_id[]" class="form-check-input" type="checkbox" value="{{$day->id}}">
                <label class="form-check-label" for="day_id">{{$day->day}}</label>
              </div>
            @endforeach --}}

            {{-- <div class="container mb-5">
              <div class="row">
                <div class="col-lg-6">
                  <span>In quale giorno viene svolto questo corso ?</span>
                  <select class="form-control" name="day_id[]">
                    <option value="" selected> </option>
                    @foreach ($days as $day)
                    <option value="{{$day->id}}">{{$day->day}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-6">
                  <span>In quale orario ?</span>
                  <select class="form-control" name="hour_id[]">
                    <option value="" selected> </option>
                    @foreach ($hours as $hour)
                    <option value="{{$hour->id}}">{{$hour->hour}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div> --}}

            {{-- @foreach ($days as $day)

              <div class="form-check form-check-inline mb-3">
                <input name="day_id[]" class="form-check-input" type="checkbox" value="{{$day->id}}">
                <label class="form-check-label" for="day_id">{{$day->day}}</label>
              </div>
            @endforeach

            <p>In quale orario ?</p>
            @foreach ($hours as $hour)

              <div class="form-check form-check-inline mb-3">
                <input name="hour_id[]" class="form-check-input" type="checkbox" value="{{$hour->id}}">
                <label class="form-check-label" for="hour_id">{{$hour->hour}}</label>
              </div>
            @endforeach --}}


            <div class="custom-file">
              <input type="file" class="custom-file-input" name="logo_course">
              <label class="custom-file-label" for="logo_course">Scegli il logo</label>
              <div class="invalid-feedback"><strong>N.B.</strong> dimensione consigliata 160px x 160px</div>
            </div>

            <div class="custom-file">
              <input type="file" class="custom-file-input" name="bg_image">
              <label class="custom-file-label" for="bg_image">Scegli il background</label>
              <div class="invalid-feedback"><strong>N.B.</strong> dimensione consigliata 160px x 160px</div>
            </div>

            <div class="form-group">
              <input type="submit" class="form-control" value="INSERISCI CORSO">
            </div>
          </form>
      </div>
    </div>
  </div>
@endsection

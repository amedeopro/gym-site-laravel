@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 text-center courses-inner-title">
      @foreach ($categories as $category)
        <h1>CATEGORIA <span>{{$category['category_name']}}</span></h1>
      @endforeach

    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    @foreach ($categories as $category)
      @foreach ($category['courses'] as $course)
        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mb-5 courses-boxes">

          @if(!empty($course['copertina']))
            <img src="{{asset('storage/'.$course['copertina'])}}" alt="">
          @else
            <img src="{{asset('storage/'.$course['logo_course'])}}" alt="">
          @endif

          <h3>{{$course['name_course']}}</h3>
          <p>{{Str::words($course['description_course'],50)}}</p>
          <div class="pulsante-innercat text-center">
            <a href="{{route('courses.corso_singolo', $course['slug'])}}">Scopri di più</a>
          </div>
        </div>

      @endforeach

      @if ($category['category_name'] == 'Sport Acquatici')
        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mb-5 courses-boxes">
          <img src="{{asset('img/nuoto.jpg')}}" alt="">
          <h3>Nuoto</h3>
          <p>Il movimento in acqua drena, aiuta l'intero organismo a rimuovere le tossine, fa lavorare in armonia il sistema linfatico. In tutti gli stili è richiesta una coordianzioen di gambe, braccia, tronco, testa. Lo stile più indicato per i problemi alla colonna vertebrale è il dorso, dove le gambe sono distese e il volto è rivolto verso l'alto.</p>
          <div class="pulsante-innercat text-center">
            <a href="{{route('nuoto')}}">Scopri di più</a>
          </div>
        </div>

      @endif



    @endforeach


  </div>
</div>


@endsection

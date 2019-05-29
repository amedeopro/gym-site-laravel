@extends('layouts.app')

@section('content')


<div class="container-fluid pr-0">
  <div class="row mr-0">
    <div class="col-12 col-xs-12 slider">

      <div class="container testo-slider" data-aos="fade-down">
        <h1>Impossibile stare fermi</h1>
        <p>allenati come vuoi e decidi tu quando disdire</p>
        <a href="#">Abbonati gratis per 14 giorni</a>
      </div>

    </div>
  </div>
</div>





<div class="container-fluid pr-0">
  <div class="row mr-0">
    <div class="col-lg-4 col-md-12 btn-us orange" data-aos="fade-right">

        <h2>ISCRIVITI ONLINE</h2> <i class="fas fa-angle-right"></i>


      </div>

      <div class="col-lg-4 col-md-12 btn-us lightorange " data-aos="fade-right">

        <h2>PROVA GRATIS</h2> <i class="fas fa-angle-right"></i>


    </div>
    <div class="col-lg-4 col-md-12 btn-us lightgrey" data-aos="fade-right">

        <h2>DECIDI QUANDO DISDIRE</h2>  <i class="fas fa-angle-right"></i>

    </div>

  </div>
</div>



<div class="container-fluid contenuto-1">
  <div class="row mr-0">
    <div class="col-lg-4 col-md-12 left-home-servizio">

    </div>
    <div class="col-lg-8 col-md-12 right-home-servizio">
      <h1><span>SportFly</span> Wellness Club</h1>
      <p>Da anni, la palestra Sportfly Wellness Club opera nel settore del Fitness&Wellness con massimo impegno, passione e serietà. Dalla sala pesi alla sala cardio, dai corsi di Body Balance fino all’attività in piscina, troverai un personale altamente qualificato, in grado di aiutarti a raggiungere tutti gli obbiettivi che ti sei prefissato per la tua salute fisica e mentale. Vieni a trovarci a Sora, in Via Ponte Marziano 1. Verificherai tu stesso la bellezza della nostra struttura, la preparazione del nostro personale e l’efficienza dei consigli dei nostri personal trainer. </p>
    </div>

  </div>

</div>


<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 attivita-corsi att-cors" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">

          <p class="att-corsi-title">attivitÀ e <span>corsi</span></p>
          <p class="att-corsi-descrizione">Cerchi una palestra? Questo è il posto giusto, se cerchi corsi con trainer dal vivo,
            allenamenti cardio, pesi, isotonici e molto altro ancora,
            SportFly è quello che cerchi.</p>

      </div>
    </div>
  </div>
</div>

<div class="container-fluid pr-0 overflow-hidden">
  <div class="row mr-0 overflow-hidden">
    <div class="col-lg-3 col-md-12 gruppo" data-aos="zoom-in">
      <h1>AttivitÀ di gruppo</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="{{route('corsifitness')}}">scopri di piÙ</a>
    </div>
    <div class="col-lg-3 col-md-12 personal-trainer" data-aos="zoom-in">
      <h1>Lezioni Individuali</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="{{route('personal')}}">scopri di piÙ</a>
    </div>
    <div class="col-lg-3 col-md-12 allenamenti" data-aos="zoom-in">
      <h1>Lezioni di Rieducazione Funzionale</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="{{route('rieducazionefunzionale')}}">scopri di piÙ</a>
    </div>
    <div class="col-lg-3 col-md-12 nuoto" data-aos="zoom-in">
      <h1>Nuoto</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="{{route('nuoto')}}">scopri di piÙ</a>
    </div>
  </div>
</div>

<div class="container-fluid pr-0">
  <div class="row mr-0">
    <div class="col-lg-6 col-md-12 prova-corsi" data-aos="zoom-in">
      <p class="txt-prova-corsi overflow-hidden">Iscriviti <span>ONLINE</span></p>
      <p class="txt-prova-corsi overflow-hidden">per te il <span>20% di sconto</span></p>
      <a href="#">ISCRIVITI SUBITO</a>
    </div>
    <div class="col-lg-6 col-md-12 bg-prova-corsi">
      <img src="{{ asset('img/big-sportfly-white-new.png') }}" alt="">
    </div>
  </div>
</div>

<div class="container-fluid mb-5 mt-5">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 text-center news">
      <h1>NEWS</h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    @foreach ($posts as $post)
      <div class="col-lg-4 col-md-12 col-sm-12 news-box mb-5">
        <img src="{{asset('storage/'.$post->image_post)}}" alt="">
        <h5>{{$post->title}}</h5>
        <p>{!!Str::words($post->content, 20)!!}</p>
        <a href="{{route('posts.visualizza_singolo_post', $post->slug)}}" class="btn-blog-sportfly">Leggi</a>
      </div>
    @endforeach
  </div>
</div>
@endsection

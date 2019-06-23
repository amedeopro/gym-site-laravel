@extends('layouts.app')

@section('content')
<div class="container-fluid background-nuoto">
  <div class="row mr-0 ml-0 overflow-hidden">
    <div class="col-lg-12">
      <img src="{{asset('/img/logo-nuoto-bianco-new.png')}}" alt="" data-aos="zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 corso-adulti-txt p-5">
      <h1>SCUOLA <span>NUOTO</span></h1>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 bk-nuoto-bimbi">
      <h1 id="titolo-bambini">IMPARARE GIOCANDO</h1>
      <p id="testo-bambini">Corsi di nuoto per bambini di 3,4,5 anni.</p>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 bk-nuoto-baby">
      <h1 id="titolo-baby">NEONATALE</h1>
      <p id="testo-baby">Corsi di nuoto per bambini da 0 a 3 anni.</p>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 corso-adulti">

    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 corso-adulti-txt">
      <h1>CORSO <span>ADULTI</span></h1>
      <p>Il nuoto è uno degli sport più completi dal punto di vista del coinvolgimento muscolare e, nello stesso tempo, il meno traumatico (condizione favorevole di sforzo) . Per questo motivo è tra le attività fisiche particolarmente consigliate per gli adulti.</p>
    </div>
  </div>
</div>

<div class="container-fluid bk-individuali">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h1>CORSI <span>INDIVIDUALI</span></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 corso-adulti-txt p-5">
      <h1>SETTORE <span>AGONISTICO</span></h1>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 corso-agonistica-txt">
      <h1><span>AGONISTICA</span></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 corso-agonistica">

    </div>
  </div>
</div>

<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 corso-propaganda">

    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 corso-agonistica-txt">
      <h1><span>PROPAGANDA</span></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">

    <div class="col-lg-4 col-md-12 col-sm-12 box-nuoto">
      <h1>CORSI NUOTO</h1>

        <p>Neonatale</p>
        <p>Bambini</p>
        <p>Adulti</p>
        <p>Individuali</p>
        <p>Agonistica</p>

    </div>

    <div class="col-lg-4 col-md-12 col-sm-12 box-nuoto">
      <h1>CONOSCI GLI ISTRUTTORI</h1>
      <p>Scoprti gli istruttori di nuoto e fitness di questa stagione</p>
      <a href="{{route('trainers.visualizza')}}">SCOPRI GLI ISTRUTTORI</a>
    </div>

    <div class="col-lg-4 col-md-12 col-sm-12 box-nuoto">
      <h1>CHIEDICI MAGGIORI INFORMAZIONI</h1>
      <p>Hai informazioni da richiedere ? non esitare a contattarci, il nostro STAFF sarà lieto di rispondere a tutte le tue domande relative a corsi, orari e servizi.</p>
      <a href="{{route('contatti')}}">CHIEDI MAGGIORI INFORMAZIONI</a>
    </div>

  </div>
</div>
@endsection

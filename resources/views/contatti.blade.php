{{-- @extends('layouts.app')

@section('content')

@endsection --}}
<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sportfly - Contatti</title>
    {!! $map['js'] !!}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
  </head>
  <body>
    <div class="pre-header overflow-hidden">

        <div class="pre-header-left">
          <div class="col-12 col-xs-12">
            <a href="https://wa.me/393939471610?text=Avrei%20bisogno%20di%20informazioni" target="_blank">
              <i class="fab fa-whatsapp"></i> Contattaci su WhatsApp
            </a>
          </div>
        </div>
        <div class="pre-header-right">
          <div class="col-12 col-xs-12">
            <ul>
              <li>Seguici su</li>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="far fa-user"></i> Area riservata</a></li>
              <li><a href="#"><i class="fas fa-briefcase"></i> Lavora con noi</a></li>
            </ul>
          </div>
        </div>

    </div>

      <div class="container-fluid">
        <div class="row navbar navbar-expand-lg navbar-light bg-light">
          <div class="col-lg-6 col-md-12 allinea-logo">
            <a class="navbar-brand" href="{{route('home')}}"> <img src="{{asset('img/logo-sportfly-new.png')}}" alt=""> </a>
            <div class="col-md12 col-sm-12 text-right">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
              <div class="navbar-nav pulsanti-header">
                <a class="nav-item nav-link orange-btn" href="{{route('corsifitness')}}">SPORTFLY ACTIVITIES</a>
                <a class="nav-item nav-link lightorange-btn" href="#">PROVA GRATIS</a>
                <a class="nav-item nav-link darkorange-btn" href="#">ABBONAMENTI</a>
                <a class="nav-item nav-link blue-btn" href="{{route('nuoto')}}">NUOTO</a>
                <a class="nav-item nav-link" href="{{route('contatti')}}">CONTATTI</a>
              </div>
            </div>
          </div>
        </div>
      </div>


    {!! $map['html'] !!}

    @if (!empty($message))
      <div class="container mt-3">
        <div class="alert alert-success" role="alert">
          {{$message}}
        </div>
      </div>
    @endif

    <div class="container mt-5 mb-3">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12 logo-contatti text-center d-flex justify-content-center align-items-center">
          <img src="{{asset('img/logo-sportfly-new.png')}}" alt="">
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 pl-5 informazioni-varie-contatti d-flex justify-content-center flex-column">
          <p>Via Ponte Marziano,1 <i class="fas fa-road"></i></p>
          <p>03039 Sora, FR <i class="fas fa-map-marked-alt"></i></p>
          <p>+39 0776 123456 <i class="fas fa-phone"></i></p>
          <p>+39 347 1234567 <i class="fab fa-whatsapp"></i></p>
          <p>Email info@sportfly.it <i class="fas fa-envelope"></i></p>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 p-5 contattaci-right">
          <h2>CONTATTACI</h2>
          <p>Per qualsiasi informazione o richiesta non esitare a contattarci, il nostro STAFF sarà lieto di risponderti entro 24h</p>
        </div>
      </div>
    </div>

    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-lg-12">
          <form class="form-group" action="{{route('richiestacontatti')}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('POST')

              <div class="form-group">
                <label for="name">Nome e Cognome</label>
                <input type="text" class="form-control" name="name" placeholder="Inserisci il tuo nome e il tuo cognome" required>
              </div>

              <div class="form-group">
                <label for="email">Il tuo indirizzo email</label>
                <input type="email" class="form-control" name="email" placeholder="Inserisci la tua mail" required>
              </div>

              <div class="form-group">
                <label for="phone">Il tuo numero di telefono</label>
                <input type="text" class="form-control" name="phone" placeholder="Inserisci il tuo numero di telefono" required>
              </div>

              <div class="form-group">
                <label for="object">Per cosa ci contatti</label>
                <input type="text" class="form-control" name="object" placeholder="Oggetto" required>
              </div>

              <div class="form-group">
                <label for="message">Messaggio</label>
                <textarea name="message" rows="8" cols="80" class="form-control"></textarea>
              </div>

              <div class="form-group">
                <input type="checkbox" name="privacy" value="privacy accettata" required>
                <label for="privacy">Accetta il trattamento dei dati personali</label>
              </div>


              <div class="form-group">
                <input type="submit" class="form-control" value="INVIA">
              </div>

            </form>
        </div>
      </div>
    </div>

    <script src="js/app.js" charset="utf-8"></script>

    </script>
    <div class="container-fluid footer-sport-fly">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-12 widget-1">
            <img src="{{ asset('img/big-sportfly-white-new.png') }}" alt="">
          </div>

          <div class="col-lg-4 col-md-12 widget-2">
            <div class="widget-2-testo">
              <h2>Contatti</h2>
              <p>Tel. 0776 12 34 56</p>
              <p>Mail info@sportfly.it</p>
              <p>Whatsapp 333 12 34 567</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 widget-3">
            <div class="widget-3-testo">
              <h2>Menu</h2>
              <a href="#">Privacy Policy</a>
              <a href="#">Cookie Policy</a>
              <a href="#">Fitness</a>
              <a href="#">Nuoto</a>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 txt-final-footer">
            <p>Tutti i diritti sono riservati - SportFly Società Sportiva Dilettantistica - 03039 Sora(FR) - P.IVA 0000000000</p>
          </div>

      </div>
      </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>


  </body>
</html>

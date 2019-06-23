<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nuova Mail - Contatti</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Hai ricevuto una mail dal sito web dalla pagina contatti</h3>
        </div>
      </div>
    </div>

<div class="container">
  <div class="row">

    <div class="col-lg-4 col-md-12">
      <label><strong>Nome del Mittente:</strong></label>
      <p>{{$contact->name}}</p>
    </div>

    <div class="col-lg-4 col-md-12">
      <label><strong>indirizzo e-mail del mittente:</strong></label>
      <p>{{$contact->email}}</p>
    </div>

    <div class="col-lg-4 col-md-12">
      <label><strong>Numero di telefono:</strong></label>
      <p>{{$contact->phone}}</p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <label><strong>Oggetto della richiesta:</strong></label>
      <p>{{$contact->object}}</p>
    </div>
    <div class="col-lg-6">
      <label><strong>Privacy:</strong></label>
      <p>{{$contact->privacy}}</p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <label><strong>Messaggio:</strong></label>
      <p>{{$contact->message}}</p>
    </div>
  </div>

</div>

</body>
</html>

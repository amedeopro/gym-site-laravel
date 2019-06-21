<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nuova Mail - Richiesta orari</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Hai ricevuto una mail dal sito web</h3>
        </div>
      </div>
    </div>

<div class="container">
  <div class="row">

    <div class="col-lg-4 col-md-12">
      <label><strong>Nome del Mittente:</strong></label>
      <p>{{$informations->name}}</p>
    </div>

    <div class="col-lg-4 col-md-12">
      <label><strong>indirizzo e-mail del mittente:</strong></label>
      <p>{{$informations->email}}</p>
    </div>

    <div class="col-lg-4 col-md-12">
      <label><strong>Numero di telefono:</strong></label>
      <p>{{$informations->phone}}</p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <label><strong>Orari richiesti:</strong></label>
      <p>{{$informations->schedule}}</p>
    </div>
    <div class="col-lg-6">
      <label><strong>Privacy:</strong></label>
      <p>{{$informations->privacy}}</p>
    </div>
  </div>
</div>

</body>
</html>

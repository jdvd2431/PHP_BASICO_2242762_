<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <title>Lista de paises</title>
</head>
<body class="container">
    <style>
        .titulo {
  color: rgb(31, 168, 247);
  font-size: 27px;
  font-weight: bold;
  font-family: Helvetica;
  text-shadow:
    0 1px 0 #ccc,
    0 2px 0 #c9c9c9,
    0 3px 0 #bbb,
    0 4px 0 #b9b9b9,
    0 5px 0 #aaa,
    0 6px 1px rgba(0,0,0,.1),
    0 0 5px rgba(0,0,0,.1),
    0 1px 3px rgba(0,0,0,.3),
    0 3px 5px rgba(0,0,0,.2),
    0 5px 10px rgba(0,0,0,.25),
    0 10px 10px rgba(0,0,0,.2),
    0 20px 20px rgba(0,0,0,.15);
}

.hit-the-floor {
  text-align: center;
}

body {
  background-color: #f8f8f8;
  margin-top: 70px;
}
    </style>
    
    <div class="row d-flex justify-content-center">
        <div class="table-responsive">
        <div class="col-xs-6 text-center">
    <div class="titulo">Lista de paises</div>
<table class="table table-hover table-dark">
    <tr class="text-primary">
        <th >Nombre</th>
        <th>Capital</th>
        <th>Moneda</th>
        <th>Poblacion</th>
    </tr>

@foreach ($naciones as $nombre => $nacion)
    <tr>
        <td>{{ $nombre }}</td>
        <td>{{ $nacion["capital"] }}</td>
        <td>{{ $nacion["moneda"] }}</td>
        <td>{{ $nacion["poblacion"] }}</td>
    </tr>
@endforeach

</table>
        </div>
    </div>
    </div>
</body>
</html>

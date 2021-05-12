<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    <title>Buscador</title>
</head>
<body>
    <form class="form-horizontal" method="post" action="{{url('buscar')}}">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>buscador en diferentes motores de busqueda</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="termino">Termino a buscar</label>
          <div class="col-md-4">
          <input id="termino" name="termino" type="text" placeholder="Buscar" class="form-control input-md">

          </div>
        </div>

        <!-- Multiple Checkboxes -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="motores">Seleccione motor de busqueda</label>
          <div class="col-md-4">
          <div class="checkbox">
            <label for="motores-0">
              <input type="checkbox" name="motores" id="motores-0" value="1">
              Google
            </label>
            </div>
          <div class="checkbox">
            <label for="motores-1">
              <input type="checkbox" name="motores" id="motores-1" value="2">
              Bing
            </label>
            </div>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="buscar"></label>
          <div class="col-md-4">
            <button type="submit" id="buscar" name="buscar" class="btn btn-success">Buscar</button>
          </div>
        </div>

        </fieldset>
        </form>
</body>
</html>

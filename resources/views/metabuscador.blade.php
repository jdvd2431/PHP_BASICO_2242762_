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
        <center><legend style="background:#C8C8C8; color:#000000; ">Buscador en diferentes motores de busqueda</legend></center>

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
              <div class="radio">
          <div class="checkbox">
            <label for="motores-0">
              <input type="checkbox" name="motores" id="motores-0" value="1">
              Google
            </label>
            </div>
        </div>
            <div class="radio">
          <div class="checkbox">
            <label for="motores-1">
              <input type="checkbox" name="motores" id="motores-1" value="2">
              Bing
            </label>
            </div>
        </div>
            <div class="radio">
                <div class="checkbox">
                    <label for="motores-3">
                      <input type="checkbox" name="motores" id="motores-3" value="3">
                      Duckduckgo
                    </label>
                    </div>
            </div>
            <div class="radio">
                <div class="checkbox">
                    <label for="motores-4">
                      <input type="checkbox" name="motores" id="motores-4" value="4">
                      ask
                    </label>
                    </div>
            </div>
            <div class="radio">
                <div class="checkbox">
                    <label for="motores-5">
                      <input type="checkbox" name="motores" id="motores-5" value="5">
                    Udemy
                    </label>
                 </div>
            </div>
            <div class="radio">
                <div class="checkbox">
                    <label for="motores-6">
                      <input type="checkbox" name="motores" id="motores-6" value="6">
                      Ecosia
                    </label>
                 </div>
            </div>
            <div class="radio">
                <div class="checkbox">
                    <label for="motores-7">
                      <input type="checkbox" name="motores" id="motores-7" value="7">
                      Seznam
                    </label>
                 </div>
            </div>
            <div class="radio">
                <div class="checkbox">
                    <label for="motores-8">
                      <input type="checkbox" name="motores" id="motores-8" value="8">
                      Qwant
                    </label>
                 </div>
            </div>
            <div class="radio">
                <div class="checkbox">
                    <label for="motores-9">
                      <input type="checkbox" name="motores" id="motores-9" value="9">
                      Amazon
                    </label>
                 </div>
            </div>
            <div class="radio">
                <div class="checkbox">
                    <label for="motores-10">
                      <input type="checkbox" name="motores" id="motores-10" value="10">
                      Youtube
                    </label>
                 </div>
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

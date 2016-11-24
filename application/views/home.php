<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">

    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <style type="text/css">
    body {
     background-image:url("<?= base_url()?>xmas.jpeg");
     background-repeat: no-repeat;
     background-position: center center;
     background-attachment: fixed;
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
     background-size: cover;
    }
    </style>
    <div class="container">
      <form class="" action="<?= base_url()?>corazon/guardar" method="post">
        <h1>Detalle del producto</h1>
        <div class="col col-sm-6">
          <div class="form-group input-group">
            <span class="input-group-addon">Nombre</span><input class="form-control" type="text" name="nombre" value="" required="">
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon">Descripcion</span><input class="form-control" type="text" name="descripcion" value="" required="">
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon">Precio</span><input class="form-control" type="numero" name="precio" value="" required="">
          </div>
          <a class="btn btn-success" href="/segundoparcial">Nuevo</a>
          <button class="btn btn-default" type="submit" name="button">Guardar</button>
          <table class="table">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $numero = count($itla);
                for ($i=0; $i < $numero ; $i++) {
                  echo "<tr><td>".$itla[$i]->nombre."</td><td>".$itla[$i]->descripcion."</td><td>".$itla[$i]->precio."</tr>";
                }
              ?>
            </tbody>
          </table>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>

<?php

require_once("./classes/triangulo.php");
    if(isset($_POST) && $_POST){
        $base = $_POST["base"];
        $altura = $_POST["altura"];

        $resultado = ($base * $altura);

        $triangulo -> baseProp =$base;
        $triangulo -> baseProp =$altura;


        $resultado = $triangulo ->calculaArea();
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Digital House</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <form class="" action="" method="post">
      <div class="form-row">
        <div class="form-group col-md-12">
          <div class="col-md-4">
            <label for="base">Base</label>
            <input type="text" class="form-control" name="base" id="base">
          </div>
        </div>
        <div class="form-group col-md-12">
          <div class="col-md-4">
            <label for="altura">Altura</label>
            <input type="text" class="form-control" name="altura" id="altura">
          </div>
        </div>
        <div class="form-group col-md-12">
          <div class="col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
          </div>
        </div>
      </div>
    </form>
    <?php if(isset($_POST) && $_POST)
        if($resultado): ?>
          <div class="col-md-12">
            <div class="col-md-2 alert alert-success">
              <p><?= "A área do triangulo é: " . $resultado ?></p>
            </div>
          </div>
        <?php endif; ?>
    <?php endif; ?>
    </form>
  </body>
</html>
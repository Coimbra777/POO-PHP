<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POO-PHP</title>
</head>

<body>
  <pre>
  <?php
  require_once 'ControleRemoto.php';

  $c1 = new ControleRemoto();

  $c1->ligar();
  $c1->maisVolume();
  $c1->maisVolume();
  $c1->desligar();
  $c1->abriMenu();
  // $c1->maisVolume();
  // $c1->maisVolume();
  // $c1->desligar();

  ?>
  </pre>

</body>

</html>
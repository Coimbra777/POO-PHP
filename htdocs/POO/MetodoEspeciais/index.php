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

  require_once 'Caneta.php';

  $c1 = new Caneta("BIC", 0.5, "Azul");
  // $c1->setModel("BIC");
  // $c1->setPonta(0.5);
  var_dump($c1);
  // echo $c1->getModel();
  ?>
  </pre>

</body>

</html>
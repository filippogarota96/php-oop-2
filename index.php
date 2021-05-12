<?php

include __DIR__ . '/classes/prodotto.class.php';
include __DIR__ . '/classes/elettronica.class.php';
include __DIR__ . '/classes/abbigliamento.class.php';

$kindle = new Elettronica('Kindle Paperwhite', '120.00$', '569-094-12345', '8gb', '6"');
$maglietta = new Abbigliamento('North Face', '50.00$', '670-3240-1234', 'L', 'cotone')
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prodotto</title>
</head>

<body>

  <h2>Prodotto di elettronica</h2>
  <h3><?php echo $kindle->nome ?></h3>
  <p><?php echo $kindle->prezzo ?></p>
  <p><?php echo 'Memoria: ' . $kindle->memoria ?></p>
  <p><?php echo 'Risoluzione: ' .  $kindle->risoluzione ?></p>
  <p><?php echo $kindle->getIsbn() ?></p>

  <h2>Prodotto di abbigliamento</h2>
  <h3><?php echo $maglietta->nome  ?></h3>
  <p><?php echo $maglietta->prezzo ?></p>
  <p><?php echo 'Taglia: ' . $maglietta->taglia ?></p>
  <p><?php echo 'Tessuto: ' . $maglietta->tessuto ?></p>
  <p><?php echo $maglietta->getIsbn() ?></p>

</body>

</html>
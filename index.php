<?php

class Prodotto
{
  //attribui
  public $nome;
  public $prezzo;
  protected $isbn;

  //construct

  public function __construct($_nome, $_prezzo, $_isbn)
  {
    $this->nome = $_nome;
    $this->prezzo = $_prezzo;
    $this->isbn = $_isbn;
  }

  //Metodi 
  public function getIsbn()
  {
    return $this->isbn;
  }
}

class Elettronica extends Prodotto
{
  public $memoria;
  public $risoluzione;

  public function __construct($_nome, $_prezzo, $_isbn, $_memoria, $_risoluzione)
  {
    parent::__construct($_nome, $_prezzo, $_isbn);
    $this->memoria = $_memoria;
    $this->risoluzione = $_risoluzione;
  }
}

$kindle = new Elettronica('Kindle Paperwhite', '120.00$', '569-094-12345', '8gb', '6"');
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
  <h2><?php echo $kindle->nome ?></h2>
  <p><?php echo $kindle->prezzo ?></p>
  <p><?php echo 'Memoria: ' . $kindle->memoria ?></p>
  <p><?php echo 'Risoluzione: ' .  $kindle->risoluzione ?></p>
  <p><?php echo $kindle->getIsbn()?></p>



</body>

</html>
<?php

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
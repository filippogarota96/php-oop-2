<?php

class Abbigliamento extends Prodotto {
  public $taglia;
  public $tessuto;

  public function __construct($_nome, $_prezzo, $_isbn, $_taglia, $_tessuto)
  {
    parent::__construct($_nome, $_prezzo, $_isbn);
    $this->taglia = $_taglia;
    $this->tessuto = $_tessuto;
  }
}
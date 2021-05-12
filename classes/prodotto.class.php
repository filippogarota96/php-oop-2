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
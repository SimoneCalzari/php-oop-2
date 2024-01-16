<?php

class Product
{
  protected $nome;
  protected $prezzo;
  protected $img;
  protected $category;
  function __construct($nome, $prezzo, $img, Category $category)
  {
    $this->nome = $nome;
    $this->prezzo = $prezzo;
    $this->img = $img;
    $this->category = $category;
  }
  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function getNome()
  {
    return $this->nome;
  }
  public function setPrezzo($prezzo)
  {
    $this->prezzo = $prezzo;
  }
  public function getPrezzo()
  {
    return $this->prezzo;
  }
}

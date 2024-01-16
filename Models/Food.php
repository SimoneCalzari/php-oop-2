<?php

class Food extends Product
{
  private $type;
  private $peso;

  function __construct($nome, $prezzo, $img, Category $category, $type, $peso)
  {
    parent::__construct($nome, $prezzo, $img, $category);
    $this->type = $type;
    $this->peso = $peso;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setPeso($peso)
  {
    $this->peso = $peso;
  }
  public function getPeso()
  {
    return $this->peso;
  }
}

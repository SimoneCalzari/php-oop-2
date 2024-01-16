<?php

class Toy extends Product
{
  private $type;
  private $material;

  function __construct($nome, $prezzo, $img, Category $category, $type, $material)
  {
    parent::__construct($nome, $prezzo, $img, $category);
    $this->type = $type;
    $this->material = $material;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setMaterial($material)
  {
    $this->material = $material;
  }
  public function getMaterial()
  {
    return $this->material;
  }
}

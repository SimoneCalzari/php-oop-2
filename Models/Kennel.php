<?php

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Product.php';

class Kennel extends Product
{
  private $type;
  private $size;

  function __construct($nome, $prezzo, $img, Category $category, $type, $size)
  {
    parent::__construct($nome, $prezzo, $img, $category);
    $this->type = $type;
    $this->size = $size;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setSize($size)
  {
    $this->size = $size;
  }
  public function getSize()
  {
    return $this->size;
  }
}

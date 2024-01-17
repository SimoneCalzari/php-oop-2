<?php

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Prezzo.php';

class Product
{
  use Prezzo;

  protected $nome;
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
  public function setImg($img)
  {
    $this->img = $img;
  }
  public function getImg()
  {
    return $this->img;
  }
  public function setCategory($category)
  {
    $this->category = $category;
  }
  public function getCategory()
  {
    return $this->category;
  }
}

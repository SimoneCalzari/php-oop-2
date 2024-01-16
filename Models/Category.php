<?php

class Category
{
  private $category;
  function __construct($category)
  {
    $this->category = $category;
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

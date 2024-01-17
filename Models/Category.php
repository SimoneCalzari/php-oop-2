<?php

class Category
{
  private $category;
  private $icon;
  function __construct($category, $icon)
  {
    $this->category = $category;
    $this->icon = $icon;
  }
  public function setCategory($category)
  {
    $this->category = $category;
  }
  public function getCategory()
  {
    return $this->category;
  }
  public function setIcon($icon)
  {
    $this->icon = $icon;
  }
  public function getIcon()
  {
    return $this->icon;
  }
}

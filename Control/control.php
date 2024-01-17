<?php
// importo classi per costruire i miei prodotti
require_once __DIR__ . '/../Models/Category.php';
require_once __DIR__ . '/../Traits/Prezzo.php';
require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Traits/Peso.php';
require_once __DIR__ . '/../Models/Food.php';
require_once __DIR__ . '/../Models/Toy.php';
require_once __DIR__ . '/../Models/Kennel.php';
// importo dati dal database per effettuarci operazioni
require_once __DIR__ . '/../Database/db.php';
// array di oggetti prodotti
$products = [];
// trasformo gli array associativi in oggetti delle mie classi
foreach ($data_db as $product) {
  if ($product['type'] === 'food') {
    // salvo oggetto categoria in una variabile
    $category = new Category($product['category'], $product['icon']);
    // salvo oggetto food in una variabile
    $food = new Food($product['nome'], $product['prezzo'], $product['img'], $category, $product['type'], $product['peso']);
    //pusho food in array prodotti
    $products[] = $food;
  } else if ($product['type'] === 'toy') {
    // salvo oggetto categoria in una variabile
    $category = new Category($product['category'], $product['icon']);
    // salvo oggetto toy in una variabile
    $toy = new Toy($product['nome'], $product['prezzo'], $product['img'], $category, $product['type'], $product['material']);
    //pusho toy in array prodotti
    $products[] = $toy;
  } else {
    // salvo oggetto categoria in una variabile
    $category = new Category($product['category'], $product['icon']);
    // salvo oggetto toy in una variabile
    $kennel = new Kennel($product['nome'], $product['prezzo'], $product['img'], $category, $product['type'], $product['size']);
    //pusho toy in array prodotti
    $products[] = $kennel;
  }
}

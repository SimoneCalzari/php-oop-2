<?php
// importo array con prodotti
require_once __DIR__ . '/../Control/control.php';
?>

<main>
  <div class="container">
    <div class="products">
      <?php foreach ($products as $product) : ?>
        <!-- PRODOTTO -->
        <div class="product">
          <div class="content">
            <!-- IMMAGINE -->
            <div class="content-img">
              <!-- ICONA CATEGORIA -->
              <?php if ($product->getCategory()->getCategory() === 'dog') : ?>
                <i class="fa-solid fa-dog"></i>
              <?php else : ?>
                <i class="fa-solid fa-cat"></i>
              <?php endif; ?>
              <!-- /ICONA CATEGORIA -->
              <!-- IMMAGINE PRODOTTO -->
              <img src="<?php echo "img/{$product->getImg()}"; ?>" alt="Foto Prodotto">
              <!-- /IMMAGINE PRODOTTO -->
            </div>
            <!-- /IMMAGINE -->
            <!-- INFO -->
            <div class="content-text">
              <!-- NOME PRODOTTO -->
              <h2>
                <?php echo $product->getNome() ?>
              </h2>
              <!-- /NOME PRODOTTO -->
              <!-- TIPO PRODOTTO -->
              <h4>
                Type: <span><?php echo $product->getType() ?></span>
              </h4>
              <!-- /TIPO PRODOTTO -->
              <!-- CARATTERISTICA PRODOTTO IN BASE AL TIPO -->
              <h4>
                <?php if ($product instanceof Food) : ?>
                  Peso: <span><?php echo $product->getPeso() ?></span>
                <?php elseif ($product instanceof Toy) : ?>
                  Material: <span><?php echo $product->getMaterial() ?></span>
                <?php else : ?>
                  Size: <span><?php echo $product->getSize() ?></span>
                <?php endif; ?>
              </h4>
              <!-- /CARATTERISTICA PRODOTTO IN BASE AL TIPO -->
              <!-- PREZZO -->
              <div class="price"><?php echo $product->getPrezzo() ?></div>
              <!-- /PREZZO -->
            </div>
            <!-- /INFO -->
          </div>
        </div>
      <?php endforeach; ?>
      <!-- /PRODOTTO -->
    </div>
  </div>
</main>
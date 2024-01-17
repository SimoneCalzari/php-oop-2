<?php
// fornisce un attributo prezzo e un metodo per affiancare la valuta quando lo si visualizza in pagina
trait Prezzo
{
  public $prezzo;

  public function getPriceWithCurrency($currency)
  {
    return $this->prezzo . " $currency";
  }
}

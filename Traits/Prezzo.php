<?php
// fornisce un attributo prezzo e un metodo per affiancare la valuta quando lo si visualizza in pagina
trait Prezzo
{
  public $prezzo;

  public function getPriceWithCurrency($currency)
  {
    // verifico se il prezzo è un valore numerico, se non dovesse esserlo lancio un'eccezione per qualcun altro che lavorerà al mio codice
    if (!is_numeric($this->prezzo)) {
      throw new Exception('Il valore inserito non è numerico');
    }
    return $this->prezzo . " $currency";
  }
}

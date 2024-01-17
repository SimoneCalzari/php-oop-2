<?php
// fornisce un attributo peso e un metodo per affiancare l'unità di misura quando si vede in pagina
trait Peso
{
  public $peso;

  public function getPesoWithUnit($unit)
  {
    return $this->peso . " $unit";
  }
}

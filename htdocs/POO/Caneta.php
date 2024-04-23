<?php

class Caneta
{

  public $cor;
  public $ponta;
  public $carga;
  public $tampada;

  public function rabiscar()
  {
    if ($this->tampada == true) {
      echo "Erro! Não posso rabiscar!";
    } else {
      echo "Estou rabiscando!";
    }
  }

  public function tampar()
  {
    $this->tampada = true;
  }

  public function destampar()
  {
    $this->tampada = false;
  }
}

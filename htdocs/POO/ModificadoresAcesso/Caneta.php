<?php

class Caneta
{

  //Atributos
  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampada;

  public function rabiscar()
  {
    if ($this->tampada == true) {
      echo "Erro! Não posso rabiscar!";
    } else {
      echo "Estou rabiscando!";
    }
  }

  private function tampar()
  {
    $this->tampada = true;
  }

  private function destampar()
  {
    $this->tampada = false;
  }
}

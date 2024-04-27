<?php

class Caneta
{

  //Atributos
  private $modelo;
  private $ponta;
  private $cor;
  private $carga;
  private $tampada;

  public function __construct($m, $p, $c)
  {
    $this->modelo = $m;
    $this->ponta = $p;
    $this->cor = $c;

    $this->tampar();
  }

  public function getModel()
  {
    return $this->modelo;
  }

  public function setModel($m)
  {
    $this->modelo = $m;
  }

  public function getPonta()
  {
    return $this->ponta;
  }

  public function setPonta($p)
  {
    $this->ponta = $p;
  }

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

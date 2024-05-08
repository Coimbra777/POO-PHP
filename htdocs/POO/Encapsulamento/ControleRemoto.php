<?php

require_once 'Controlador.php';
class ControleRemoto implements Controlador
{
  private $volume;
  private $ligado;
  private $tocando;

  public function __construct()
  {
    $this->volume = 50;
    $this->ligado = false;
    $this->tocando = false;
  }

  public function play()
  {
    $this->setTocando(true);
  }

  public function pause()
  {
    $this->setTocando(false);
  }


  public function getVolume()
  {
    return $this->volume;
  }

  public function getLigado()
  {
    return $this->ligado;
  }

  public function getTocando()
  {
    return $this->tocando;
  }

  public function setVolume($volume)
  {
    $this->volume = $volume;
  }

  public function setLigado($ligado)
  {
    $this->ligado = $ligado;
  }

  public function setTocando($tocando)
  {
    $this->tocando = $tocando;
  }

  public function ligar()
  {
    $this->setLigado(true);
  }

  public function desligar()
  {
    $this->setLigado(false);
  }

  public function abriMenu()
  {
    echo "<br>Esta Tocando: " . ($this->getTocando() ? "Sim" : "Nao") . "<br>";
    echo "Volume: " . $this->getVolume() . "<br>";
    echo "Ligado: " . ($this->getLigado() ? "Sim" : "Nao") . "<br>";
  }

  public function fecharMenu()
  {
    echo "Fechando Menu";
  }

  public function maisVolume()
  {
    if ($this->getLigado()) {
      $this->setVolume($this->getVolume() + 5);
    }
  }

  public function menosVolume()
  {
    if ($this->getLigado()) {

      $this->setVolume($this->getVolume() - 5);
    }
  }

  public function ligarMudo()
  {
    if ($this->getLigado()) {
      $this->setVolume(0);
    }
  }

  public function desligarMudpo()
  {
    if ($this->getLigado()) {
      $this->setVolume($this->getVolume());
    }
  }
}

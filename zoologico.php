<?php
class Zoologico {
  public $nombreAnimal;
  public $especie;
  public function setNombreAnimal($nombreAnimal) {
    $this->nombreAnimal = $nombreAnimal;
  }
  public function getNombreAnimal() {
   return $this->nombreAnimal;
  }
  public function setEspecie($especie) {
    $this->especie = $especie;
  }
  public function getEspecie() {
    $this->especie;
  }
}
class Mono extends Zoologico {
  private $comida;
  public function setComida($comida) {
    $this->comida = $comida;
  }
  public function getComida() {
    return $this->comida;
  }
  public function juega() {
    if ($this->getComida()) {
      print "El " . $this->getNombreAnimal() . "quiere jugar<br>";
    }
    else {
      print "El " . $this->getNombreAnimal() . " no quiere jugar, tiene hambre<br>";
    }
  }
}

class Ardilla extends Zoologico{
  private $cafeina;
  public function setCafeina($cafeina) {
    $this->cafeina = $cafeina;
  }
  public function getCafeina() {
    return $this->cafeina;
  }
  public function hiperactividad() {
    if ($this->getCafeina()){
      print "La " . $this->getNombreAnimal() . "se volvio loca!!<br>";
    }
    else {
      print "La " . $this->getNombreAnimal() . " esta tranquila..<br>";
    }
  }
}
interface Viajan {
  public function tomaAuto();
}

class Trabajador implements Viajan {
  public $nombreTrabajador;
  public $nombreAnimal;
  public function setNombreTrabajador($nombreTrabajador) {
    $this->nombreTrabajador = $nombreTrabajador;
  }
  public function getNombreTrabajador() {
    return $this->nombreTrabajador;
  }
  public function tomaAuto() {
    return "El trabajador toma auto para ir al trabajo";
  }
  public function cuida($nombreTrabajador, Mono $nombreAnimal) {
    $this->setNombreAnimal($nombreAnimal);
    $this->setNombreTrabajador($nombreTrabajador);
  }
  public function setNombreAnimal(Mono $nombreAnimal) {
    $this->nombreAnimal = $nombreAnimal;
  }
  public function getNombreAnimal() {
    return $this->nombreAnimal;
  }
}


$mono = new Mono();
$mono->setNombreAnimal("Mono");
$mono->setComida(false);
print $mono->juega();
$ardilla = new Ardilla();
$ardilla->setNombreAnimal("Ardilla");
$ardilla->setCafeina(true);
print $ardilla->hiperactividad();
print_r ($trabajador = new Trabajador());
$trabajador->setNombreTrabajador("Juan");
print $trabajador->getNombreTrabajador();
print "</br>";
print $trabajador->tomaAuto();
?>
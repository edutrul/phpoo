<?php
// Title Test : Herencia - Interface - Polimorfismo

/*
 * Clase padre  - Father Class
 */
class Banco {
  private $nombreBanco;
  private $interesDelBanco;
/*
 * Creando el constructor con parametro
 * Create construc with parameter
 */
  function  __construct($nombreBanco,$interesDelBanco) {
    $this->setNombreBanco($nombreBanco);
    $this->setInteresDelBanco($interesDelBanco);
  }
  /*
   * Setter and Getter of Atribb
   */
  public function setNombreBanco($nombreBanco){
    $this->nombreBanco = $nombreBanco;
  }
  public function getNombreBanco() {
    return $this->nombreBanco;
  }
  public function setInteresDelBanco($interesDelBanco) {
    $this->interesDelBanco = $interesDelBanco;
  }
  public function getInteresDelBanco() {
    return $this->interesDelBanco;
  }
}
/*
 * Usando Interface
 */
interface Deuda {
  //Metodo a implementar - Method to implement
  public function calculoDeuda();
}

/*
 * Declarando clases que heredan
 */
class Interbank extends Banco implements Deuda{
  private $deuda;
  
  public function nombreBanco() {
    return $this->getNombreBanco();
  }
  public function interesDelBanco() {
    return $this->getInteresDelBanco();
  }
  public function calculoDeuda() {
    return $this->deuda =$deuda;  
  }
  public function setDeuda($deuda) {
    $this->deuda = $deuda;
  }
  public function getDeuda() {
    return $this->deuda;
  }
}


$ba = new banco("Banco","-");
$in = new Interbank("Interbank",0.2);
print "El nombre del banco es " . $in->nombreBanco();
print "</br>";
print "Sus intereses son de :" . $in->interesDelBanco() . "%";

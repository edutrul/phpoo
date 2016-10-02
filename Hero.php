<?php
  /*
   * Herencia Interface
   */
Interface Hero {
  public function salvaElMundo();
  public function protegeSuFamilia();
}
Interface HeroChipote extends Hero {
  public function preparaHeroes();
}
class BenjiChipote implements HeroChipote{
  private $poder = 0;
  private $amor = 0;
  private $powerOfGod;
  
  //PROBANDO Metodos GETTER AND SETTER
  public function setPowerOfGod ($powerOfGod) {
    $this->powerOfGod = $powerOfGod;
  }
  public function getPowerOfGod() {
   return $this->powerOfGod;
  }
  /*
   * Metodos de la clase sin set and get
   */
  public function amorHero($amor) {
    $this->amor = $amor;
  }
  public function poderHero($poder) {
    $this->poder = $poder;
  }
  /*
   * Metodos de herencia interface
   */
  public function salvaElMundo() {
    if ($this->poder == 0) {
      print "Necesitas poder para salvar el mundo<br>";
    }
    else {
      print "Salvaste al mundo HERO!!!<br>";
    }
  }
  public function protegeSuFamilia() {
    if ($this->amor == 0) {
      print "Necesitas amor para salvar a tu familia<br>";
    }
    else {
      print "Salvaste a tu familia HERO!!!<br>";
    }
  }
  /*
   * En este metodo probamos el getter
   */
  public function indestructible() {
    if($this->getPowerOfGod()){
      print "Eres Invencible.. Dios contigo, quien contra ti?<br>";
    }
    else {
      print "Estas perdido.. <br>";
    }
  }
  /*
   * Metodo de la clase sin herencia
   * @return string
   */
  public function preparaHeroes() {
    print "Preparando Heroes.. -- <a href='http://devstec.com/'> DEVSTEC.COM  </a>--<br>";
  }
}
 $r = new BenjiChipote();
 $r->poderHero(100);
 print $r->salvaElMundo();
 $r->amorHero(100);
 print $r->protegeSuFamilia();
 print $r->setPowerOfGod(true);
 print $r->indestructible();
 print $r->preparaHeroes();
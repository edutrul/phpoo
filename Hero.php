<?php
  /*
   * Herencia Interface.
   */
Interface Hero {
  public function saveTheWorld();
  public function protectYourFamily();
}
Interface HeroChipote extends Hero {
  public function prepareHero();
}
class BenjiChipote implements HeroChipote {
  private $power;
  private $love;
  private $powerOfGod;
  

  public function setPowerOfGod ($powerOfGod) {
    $this->powerOfGod = $powerOfGod;
  }
  public function getPowerOfGod() {
   return $this->powerOfGod;
  }
  /*
   * Metodos de la clase sin set and get.
   */
  public function useLove($love) {
    $this->love = $love;
  }
  public function usePower($power) {
    $this->power = $power;
  }
  /*
   * Metodos de herencia interface.
   */
  public function saveTheWorld() {
    if ($this->power == 0) {
      return "Necesitas poder para salvar el mundo<br>";
    }
    else {
      return "Salvaste al mundo HERO!!!<br>";
    }
  }
  public function protectYourFamily() {
    if ($this->love == 0) {
      return "Necesitas amor para salvar a tu familia<br>";
    }
    else {
      return "Salvaste a tu familia HERO!!!<br>";
    }
  }
  /*
   * En este metodo probamos el getter.
   */
  public function indestructible() {
    if ($this->getPowerOfGod()) {
      return "Eres Invencible.. Dios contigo, quien contra ti?<br>";
    }
    else {
      return "Estas perdido.. <br>";
    }
  }
  /*
   * Metodo de la clase sin herencia.
   * 
   * @return string
   */
  public function prepareHero() {
    return "Preparando Heroes.. -- <a href='http://devstec.com/'> DEVSTEC.COM  </a>--<br>";
  }
}
 $hero = new BenjiChipote();
 $hero->usePower(100);
 print $hero->saveTheWorld();
 $hero->useLove(100);
 print $hero->protectYourFamily();
 print $hero->setPowerOfGod(true);
 print $hero->indestructible();
 print $hero->prepareHero();
 
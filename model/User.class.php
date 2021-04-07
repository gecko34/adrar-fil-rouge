<?php


class User {
  private $firstName = "";
  private $lastName = "";
  private $level = 4;

  public function __construct($firstName, $lastName, $level) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->level = $level;
  }


  public function show() {
    echo "<br><hr>Données transmises :<br/>";
    echo "Prénom : <b>".$this->firstName."</b><br/>";
    echo "Nom : <b>".$this->lastName."</b><br/>";
    echo "Level : <b>".$this->level."</b><br/>";
  }

}

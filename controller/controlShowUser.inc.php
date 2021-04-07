<?php

class ControlShowUser extends ControlMain {
  

  public function __construct($action="start") {
    $this->action = $action;
  }

  public function run() {
    echo "<br><hr>Contrôleur voir utilisateurs - Classe instanciée !<br/>";
    echo "Action en cours : <b>".$this->action."</b><br/>";
  }


}

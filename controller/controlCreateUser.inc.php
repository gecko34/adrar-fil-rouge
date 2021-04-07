<?php

class ControlCreateUser extends ControlMain {
  

  public function __construct($action="start") {
    $this->action = $action;
  }

  public function run() {
    echo "<br><hr>Contrôleur créate user - Classe instanciée !<br/>";
    echo "Action en cours : <b>".$this->action."</b><br/>";

    switch ($this->action) {
      case "start":
        require_once('view/userForm.inc.php');
        echo formUser();    // display form create user
        break;

      case "check":
        require_once('model/User.class.php');
        require_once('tools/CheckEntry.class.php');
        $firstName="";
        if (isset($_POST["userFirstName"])) {
          $firstName = htmlspecialchars($_POST["userFirstName"]);
        }
        $lastName="";
        if (isset($_POST["userLastName"])) {
          $lastName = htmlspecialchars($_POST["userLastName"]);
        }
        $level="";
        if (isset($_POST["userLevel"])) {
          $level = htmlspecialchars($_POST["userLevel"]);
        }
        $user = new User($firstName,$lastName,$level);
        $user -> show();
        break;

      default :
        exit ("Erreur");
    }
  }
}

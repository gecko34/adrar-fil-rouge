<?php

class CheckEntry {

  public function postName($string, $limit=0) {
    // ----> Chaîne à tester, Nombre de caractères minimum
    $value=false;    // Par défaut, valeur incorrecte
    if (isset($_POST[$string])) {
      if (strlen($_POST[$string])>=$limit)) {
        $value = htmlspecialchars($_POST[$string]);
        $value = ucfirst(strtolower($value));
      }
    }
    return $value;
  }

}

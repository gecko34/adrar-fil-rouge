<?php

class Test {
  protected static $compte;
  private $temp = "hello";

  public function __construct(){
    echo "Hello Objet construit !<br/>";
    echo "Il y a <b>".self::compte."</b> objets construits ! <br/>";
  }

  function compteObjet() {
    self::comte++;
  }

}

for ($i=0; $i < 10; $i++) {
  new Test();
}


// ===============================
// Fichier Dao

function readBDD($request, $connexion) {
 	$result = $connexion -> query($request);
 	return $result;
}



function openConnexion() {
	try {
	 	$myConnexion = new PDO(BDDNAME, BDDUSER, BDDPASSWORD);
		echo '<br/>Connexion base ok !</br/>';
	}
	catch (PDOException $e) {
		die ("Erreur de connexion à la base de donnée : " .$e->getMessage());
	}
	return $myConnexion;
}


// ================================
// Fichier tests

$connexion = openConnexion();

$sql = "SELECT * FROM tableA";
$data = $connexion -> query($sql);
echo displayTableA($data);

$sql = "SELECT * FROM tableB";
$data = $connexion -> query($sql);
echo displayTableB($data);

break;


case "createUser":
$routeB = "startForm";
if (isset($_GET["action"])) {
  $routeB = htmlspecialchars($_GET["action"]);
}
echo "<br/>Ajout d'un utilisateur !</br>";
if ($routeB == "startForm") {
  echo formUser();    // display lesson form for non customer
} elseif ($routeB == "sendForm") {
  echo "<br/>Formulaire envoyé !<br/>";
  $form_userFirstName = htmlspecialchars($_POST["userFirstName"]);
  $form_userLastName = htmlspecialchars($_POST["userLastName"]);
  $form_userLevel = htmlspecialchars($_POST["userLevel"]);
  $form_userRegistrationDate = date('Y-m-d', time());

  echo "<hr>firstname : ".$form_userFirstName." - lastname : ".$form_userLastName."
  level : ".$form_userLevel."Date : ***".$form_userRegistrationDate."****<hr>";

  $connexion = openConnexion();

  $sql = "
      INSERT INTO tableA
        (title, content)
      VALUES
        (:titleArticle, :contentArticle)
        ";

  $request = $connexion->prepare($sql);
  $request->bindValue(':titleArticle', $form_userFirstName);
  $request->bindValue(':contentArticle',$form_userLastName);

  if ($request->execute()) {
    echo "Utilisateur ajouté !";
  } else {
    echo "Erreur lors de l'enregistrement !";
  }
}
break;

case "deconnexion":
echo "bye";
session_destroy();
break;

default :
echo 'Aucun choix ! Faites un choix';
}


// class Test {
//   protected static $compte;
//   private $temp = "hello";
//
//
//   public function __construct(){
//     echo "Hello Objet construit !<br/>";
//     self::compteObjet();
//     echo "Il y a <b>".self::$compte."</b> objets construits ! <br/>";
//   }
//
//   function compteObjet() {
//     self::$compte++;
//   }
//
// }
//
// for ($i=0; $i < 10; $i++) {
//   new Test();
// }

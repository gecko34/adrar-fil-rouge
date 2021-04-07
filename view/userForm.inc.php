<?php

function formUser() {
  global $ROUTEBASE, $playerName, $playerAge;

	$render = <<<EOD
	<div class="formContainer">
    	<h3><b>Enregistrer un nouvel utilisateur</b></h3>
    	<form action="$ROUTEBASE?page=createUser&action=check" method="post">
    		<div class="espace5">
      	    <label for="userFirstName">Prénom</label>
     	      <input type="text" id="userFirstName" name="userFirstName">
    	  </div>
        <div class="espace5">
      	    <label for="userLastName">Nom</label>
     	      <input type="text" id="userLastName" name="userLastName">
    	  </div>
        <div class="espace5">
      	    <label for="userLevel">Niveau autorisation</label>
            <select name="userLevel" id="userLevel">
              <option value="1">1 : Me</option>
              <option value="2">2 : God</option>
              <option value="3">3 : Chief</option>
              <option value="4">4 : Simple user</option>
            </select>
    	  </div>
     		<div class="button">
          	<button type="submit" class="boutonSend">Créer l'utilisateur</button>
     		 </div>
    	</form>
  </div>
EOD;
	return $render;
}

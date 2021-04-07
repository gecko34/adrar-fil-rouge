<?php

function formArticle() {
  global $ROUTEBASE;

	$render = <<<EOD
	<div class="formContainer">
    	<h3><b>Enregistrer un nouvel article</b></h3>
    	<form action="$ROUTEBASE?page=createArticle&action=check" method="post">
    		<div class="espace5">
      	    <label for="title">Title</label>
     	      <input type="text" id="title" name="title">
    	  </div>
        <div class="espace5">
      	    <label for="articleContent">Texte de l'article</label>
				<textarea id="articleContent" name="articleContent">
				</textarea>
    	  </div>
     		<div class="button">
          	<button type="submit" class="boutonSend">Créer l'article</button>
     		 </div>
    	</form>
  </div>
EOD;
	return $render;
}

<?php


function displayTotalPrice() {
	global $playerName, $playerAge, $lessonNumber, $totalPrice, $normalPrice;

	$render = <<<EOD
	<div class="resultats">
		<h2>Tarif</h2>
		<hr/>
			Nom du joueur : $playerName
		<br/>
			Age : $playerAge ans
		<br/>
			Nombre de lessons : $lessonNumber
		<br/>
			<b>Prix total : $totalPrice €</b> <i>(prix normal : $normalPrice €)</i>
		<br/>
	</div>
EOD;
	return $render;
}

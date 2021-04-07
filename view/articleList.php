<?php


function listArticle($allArticles) {


	$render = '
	<div class="resultats">
			<h2>Liste des articles</h2>
			('.count($allArticles).' articles enregistrés)
			<hr/>
			<table>
			<tr><th>Id</th><th>Titre</th></tr>';

		foreach ($allArticles as $article) {
			$render .= '
			<tr>
				<td>'.$article->getId().'</td>
				<td>'.$article->getTitle().'</td>
				<form action="'.ROUTEBASE.'?page=showArticles&action=showOne" method="post">
					<input type="hidden" name="articleId" value="'.$article->getId().'">
					<td><button type="submit" class="button100 buttonGreen">Voir</button></td>
				</form>
				<form action="'.ROUTEBASE.'?page=showArticles&action=modify" method="post">
					<input type="hidden" name="articleId" value="'.$article->getId().'">
					<td><button type="submit" class="button100 buttonBlue">Modifier</button></td>
				</form>
				<form action="'.ROUTEBASE.'?page=showArticles&action=deleteCheck" method="post">
					<input type="hidden" name="articleId" value="'.$article->getId().'">
					<td><button type="submit" class="button100 buttonRed">Supprimer</button></td>
				</form>
			</tr>';
		}

	$render .='
			</table>
		</div>';

	return $render;
}

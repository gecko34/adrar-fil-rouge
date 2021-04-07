<?php


function oneArticle($article) {

	$render = '
	<div class="resultats">
			<h2>Voir un article</h2>
			(id : '.$article->getId().')
			<hr/>';

			$render .= '
			<b>'.$article->getTitle().'</b>
			<br/>
			<br/>
			'.$article->getContent().'
			<br/>
			<br/>
				<form action="'.ROUTEBASE.'?page=showArticles&action=addComment" method="post">
					<input type="hidden" name="articleId" value="'.$article->getId().'">
					<td><button type="submit" class="button100 buttonBlue">Laisser un commentaire</button></td>
				</form>
				</br>';

	return $render;
}


function oneArticleDelete($article) {

	$render = '
	<div class="resultats">
			<h2>Supprimer un article</h2>
			<br/>
			<form action="'.ROUTEBASE.'?page=showArticles&action=confirmDelete" method="post">
				<input type="hidden" name="articleId" value="'.$article->getId().'">
				<td><button type="submit" class="button300 buttonRed">Confirmer la suppression de l\'article : '.$article->getTitle().' !</button></td>
			</form>

			<hr/>';

			$render .= '
			<b>'.$article->getTitle().'</b>
			<br/>
			<br/>
			'.$article->getContent().'
			<br/>
			<br/>';

	return $render;
}


function oneGetDeleted($article) {

	$render = '
	<div class="resultats">
			<h2>Article supprimé</h2>
			<br/>
			<hr/>';

			$render .= '
			L\'article <b>'.$article->getTitle().'</b> à bien été supprimé !
			<br/>';

	return $render;
}

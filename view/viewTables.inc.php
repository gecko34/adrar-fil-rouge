<?php

function displayTableB($datas) {
	$render = '<br><table>';
	$render .= '<tr><th>NOM</th><th>AGE</th></tr>';
	foreach ($datas as $key => $value) {
		$render .= '<tr>';
		$render .= '<td>'.$value['Name'].'</td>';
		$render .= '<td>'.$value['Age'].'</td>';
		$render .= '</tr>';
	}
	$render .= '</table>';
	return $render;
}


function displayTableA($datas) {
	$render = '<br><table>';
	$render .= '<tr><th>PRENOM</th><th>NOM</th><th>LEVEL</th></tr>';
	foreach ($datas as $key => $value) {
		$render .= '<tr>';
		$render .= '<td>'.$value['firstName'].'</td>';
		$render .= '<td>'.$value['lastName'].'</td>';
		$render .= '<td>'.$value['level'].'</td>';
		$render .= '</tr>';
	}
	$render .= '</table>';
	return $render;
}

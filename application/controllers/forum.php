<?php

class Forum extends CI_Controller
{
	public function acceuil()
	{
		echo 'Hello World!';
	}
	//	Cette page accepte une variable $_GET facultative
	public function bonjour($pseudo = '')
	{
		echo 'Salut � toi : ' . $pseudo;
	}

	//	Cette page accepte deux variables $_GET facultatives
	public function manger($plat = '', $boisson = '')
	{
		echo 'Voici votre menu : <br />';
		echo $plat . '<br />';
		echo $boisson . '<br />';
		echo 'Bon app�tit !';
	}
	
}
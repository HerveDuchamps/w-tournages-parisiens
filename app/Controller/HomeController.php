<?php

namespace Controller;

use \W\Controller\Controller;

class HomeController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function accueil()
	{
		
		$this->show('home/accueil');

	}

		public function fiche()
	{
		if(isset($_GET["film"]))
			$this->show('home/ficheDetaillee',["nomFilm" => $_GET["film"]]);
		else
			$this->show('home/ficheDetaillee');

	}

}
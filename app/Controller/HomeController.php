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
		if(isset($_POST["film"]))
			$this->show('home/ficheDetaillee',["nomFilm" => $_POST["film"]]);
		else
			$this->show('home/ficheDetaillee');

	}

}
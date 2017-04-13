<?php
	
	$w_routes = array(
		//Home
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/accueil', 'Home#accueil', 'home'],
		['GET|POST', '/ficheDetaillee', 'Home#fiche', 'fiche_detaillee'],

		//Api Google Maps
		['GET|POST', '/api/lieu', 'Api#maps', 'api_maps'],

		//Api Movie DB
		['GET|POST', '/api/movie', 'Api#movieDB', 'api_movie'],


	);

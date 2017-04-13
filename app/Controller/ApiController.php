<?php

namespace Controller;

use \W\Controller\Controller;
use Model\LieuxModel;

class ApiController extends Controller
{

    /**
	 * Api Read all Lieux
	 */	
	public function maps()
	{	
		 $lieuxBdd = new LieuxModel();
         $this->showJson($lieuxBdd->findAll());
	}
	
    /**
	 * Api Read all Film
	 */	
	public function movieDB()
	{	
        
	}
	


}
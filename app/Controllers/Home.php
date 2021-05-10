<?php

namespace App\Controllers;

use App\Models\formular;

class Home extends BaseController
{
		/**
	 * Instance of the main Request object.
	 *
	 * @var HTTP\IncomingRequest
	 */
	protected $request;
	
	public function index() {
		echo view('header');
		echo view('formular');
	}
	public function form() {

		$data = [ 'prezdivka' =>$this->request->getVar('prezdivka'),
		'oblibene_cislo' =>$this->request->getVar('oblibene_cislo'),
		'text' =>$this->request->getVar('text'),
		'email' =>$this->request->getVar('email'),
		'datum' =>$this->request->getVar('datum'),
		'vek' =>$this->request->getVar('vek'),
		'barva' =>$this->request->getVar('barva') 
	
	];

		/*
		$db =  \Config \Database::connect();
		$builder = $db->table('film');
		$builder->insert($data); */

		$model = new formular();
		
		if ($model->insert($data))
		{
			?><style>.center {text-align: center;color: red;}</style><?php
			echo view('header');
			echo "<h3 class='center'>Úspěšně přidáno</h3>";
			echo view('prehled');
		}
		else 
		{
			echo "nepřidáno";
		}
	

	}
	public function prehled() {
		echo view('header');
		echo view('prehled');

	}

}

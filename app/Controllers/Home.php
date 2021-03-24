<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{	
		$eventosModel = new \App\Models\Eventos();
		$data['news'] = $eventosModel->findAll();
		echo view('Templates/header');
		echo view('pages/index', $data);
		echo view('Templates/footer');
	}
}

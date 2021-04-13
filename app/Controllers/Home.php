<?php

namespace App\Controllers;

class Home extends Dashboard
{
	public function index()
	{	
		$eventosModel = new \App\Models\Eventos();
		$cursosModel = new \App\Models\Cursos();
		$data['news'] = $eventosModel->findAll();
		$data['cursos'] = $cursosModel->findAll();
		echo view('Templates/header');
		echo view('pages/index', $data);
		echo view('Templates/footer');
	}
}

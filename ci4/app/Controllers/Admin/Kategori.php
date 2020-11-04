<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\kategori_M;

class kategori extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		echo "<h1>Belajar ci4</h1>";
	}

	public function select()
	{
		$model = new kategori_M();
		$kategori = $model->findAll();

		$data = [
			'judul' => 'SELECT DATA DARI controller',
			'kategori' => $kategori
		];

		return view("kategori/select", $data);
	}

	public function selectWhere($id = null)
	{
		echo "<h1>Menampilkan data yang dipilih $id</h1>";
	}

	public function formInsert()
	{
		return view("kategori/forminsert");
	}

	public function formUpdate($id = null)
	{
		echo view("template/header");
		echo view("kategori/update");
		echo view("template/footer");
	}

	public function update($id = null)
	{
		echo "<h1>Proses update Data $id</h1>";
	}

	public function delete($id = null)
	{
		echo "<h1>Proses delete Data</h1>";
	}

	//--------------------------------------------------------------------

}

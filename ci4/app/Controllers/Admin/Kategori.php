<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class kategori extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		echo "<h1>Belajar ci4</h1>";
	}

	public function select()
	{
		echo "<h1>Menampilkan semua data</h1>";
	}

	public function selectWhere($id = null)
	{
		echo "<h1>Menampilkan data yang dipilih $id</h1>";
	}

	public function formInsert()
	{
		echo "<h1>Menampilkan form Insert</h1>";
	}

	public function formUpdate($id = null)
	{
		echo "<h1>Menampilkan form Update $id</h1>";
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

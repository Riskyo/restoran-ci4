<?php

namespace App\Models;

use App\Controllers\Admin\kategori;
use CodeIgniter\Model;

class Pelanggan_M extends Model
{
    protected $table = 'tblpelanggan';
    protected $primaryKey = 'idpelanggan';
    protected $allowedFields = ['aktif'];
}

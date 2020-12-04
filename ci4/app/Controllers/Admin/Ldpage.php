<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\kategori_M;
use App\Models\Menu_M;

class Ldpage extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $model = new Menu_M();

        $data = [
            'judul' => 'DATA MENU',
            'menu' => $model->paginate(4, 'page'),
            'pager' => $model->pager
        ];

        return view("menup/select", $data);
    }

    public function read()
    {
        $pager = \Config\Services::pager();
        if (isset($_GET['idkategori'])) {
            $id = $_GET['idkategori'];
            $model = new Menu_M();
            $jumlah = $model->where('idkategori', $id)->findAll();

            $count = count($jumlah);

            $tampil = 4;
            $mulai  = 0;

            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                $mulai = ($tampil * $page) - $tampil;
            }

            $menu = $model->where('idkategori', $id)->findAll($tampil, $mulai);

            $data = [
                'judul' => 'DATA PENCARIAN MENU',
                'menu' => $menu,
                'pager' => $pager,
                'tampil' => $tampil,
                'total' => $count
            ];

            return view("menup/cari", $data);
        }
    }

    public function option()
    {
        $model          = new kategori_M();
        $kategori       = $model->findAll();
        $data           = [
            'kategori' => $kategori
        ];

        return view('template/option', $data);
    }







    //--------------------------------------------------------------------

}

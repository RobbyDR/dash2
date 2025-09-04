<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pabrikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }
    // ===================================== pabrikasi
    public function profil()
    {
        $data['judul'] = "PROFIL LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pabrikasi'])->result_array();
        $data['menuid'] = '112';

        $data['subview'] = "pabrikasi/profil";
        $this->load->view('partial', $data);
    }

    public function lingkup()
    {
        $data['judul'] = "RUANG LINGKUP";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pabrikasi'])->result_array();
        $data['menuid'] = '113';

        $data['subview'] = "pabrikasi/lingkup";
        $this->load->view('partial', $data);
    }

    public function keunggulan()
    {
        $data['judul'] = "Keunggulan Layanan Fabrikasi dan Pengelasan di BBLM";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pabrikasi'])->result_array();
        $data['menuid'] = '114';

        $data['subview'] = "pabrikasi/keunggulan";
        $this->load->view('partial', $data);
    }
    public function fasilitas()
    {
        $data['judul'] = "Fasilitas Canggih";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pabrikasi'])->result_array();
        $data['menuid'] = '115';

        $data['subview'] = "pabrikasi/fasilitas";
        $this->load->view('partial', $data);
    }
    public function hasil()
    {
        $data['judul'] = "HASIL PRODUK LAYANAN FABRIKASI DAN PENGELASAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pabrikasi'])->result_array();
        $data['menuid'] = '116';

        $data['subview'] = "pabrikasi/hasil";
        $this->load->view('partial', $data);
    }
}

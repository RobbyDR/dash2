<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inspeksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }

    // ===================================== INSPEKSI
    public function profil()
    {
        $data['judul'] = "PROFIL LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'inspeksi'])->result_array();
        $data['menuid'] = '46';

        $data['subview'] = "inspeksi/profil";
        $this->load->view('partial', $data);
    }
}

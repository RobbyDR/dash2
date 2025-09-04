<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }

    // ===================================== PUP
    public function profil()
    {
        $data['judul'] = "PROFIL LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pup'])->result_array();
        $data['menuid'] = '51';

        $data['subview'] = "pup/profil";
        $this->load->view('partial', $data);
    }

    public function lingkup()
    {
        $data['judul'] = "RUANG LINGKUP PUP";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pup'])->result_array();
        $data['menuid'] = '52';

        $data['subview'] = "pup/lingkup";
        $this->load->view('partial', $data);
    }
}

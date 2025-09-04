<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lvvtkdn extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }

    // ===================================== LVVTKDN
    public function profil()
    {
        $data['judul'] = "PROFIL LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lvvtkdn'])->result_array();
        $data['menuid'] = '36';

        $data['subview'] = "lvvtkdn/profil";
        $this->load->view('partial', $data);
    }

    public function lingkup()
    {
        $data['judul'] = "RUANG LINGKUP LVV - TKDN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lvvtkdn'])->result_array();
        $data['menuid'] = '37';

        $data['subview'] = "lvvtkdn/lingkup";
        $this->load->view('partial', $data);
    }
    public function urgensi()
    {
        $data['judul'] = "Pentingnya Tingkat Komponen Dalam Negeri";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lvvtkdn'])->result_array();
        $data['menuid'] = '87';

        $data['subview'] = "lvvtkdn/urgensi";
        $this->load->view('partial', $data);
    }
    public function persyaratan()
    {
        $data['judul'] = "Persyaratan TKDN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lvvtkdn'])->result_array();
        $data['menuid'] = '88';

        $data['subview'] = "lvvtkdn/persyaratan";
        $this->load->view('partial', $data);
    }
}

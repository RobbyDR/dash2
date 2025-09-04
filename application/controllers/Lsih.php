<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lsih extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }
    // ===================================== lsih
    public function profil()
    {
        $data['judul'] = "PROFIL LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lsih'])->result_array();
        $data['menuid'] = '97';

        $data['subview'] = "lsih/profil";
        $this->load->view('partial', $data);
    }

    public function lingkup()
    {
        $data['judul'] = "RUANG LINGKUP";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lsih'])->result_array();
        $data['menuid'] = '98';

        $data['subview'] = "lsih/lingkup";
        $this->load->view('partial', $data);
    }

    public function alur()
    {
        $data['judul'] = "ALUR LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lsih'])->result_array();
        $data['menuid'] = '99';

        $data['subview'] = "lsih/alur";
        $this->load->view('partial', $data);
    }
    public function persyaratan()
    {
        $data['judul'] = "PERSYARATAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lsih'])->result_array();
        $data['menuid'] = '100';

        $data['subview'] = "lsih/persyaratan";
        $this->load->view('partial', $data);
    }
    public function tarif()
    {
        $data['judul'] = "TARIF";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lsih'])->result_array();
        $data['menuid'] = '101';

        $data['subview'] = "lsih/tarif";
        $this->load->view('partial', $data);
    }
}

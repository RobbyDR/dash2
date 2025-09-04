<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Indi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }
    // ===================================== indi
    public function profil()
    {
        $data['judul'] = "PROFIL LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'indi'])->result_array();
        $data['menuid'] = '92';

        $data['subview'] = "indi/profil";
        $this->load->view('partial', $data);
    }

    public function lingkup()
    {
        $data['judul'] = "RUANG LINGKUP";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'indi'])->result_array();
        $data['menuid'] = '93';

        $data['subview'] = "indi/lingkup";
        $this->load->view('partial', $data);
    }

    public function alur()
    {
        $data['judul'] = "ALUR LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'indi'])->result_array();
        $data['menuid'] = '94';

        $data['subview'] = "indi/alur";
        $this->load->view('partial', $data);
    }
    public function spm()
    {
        $data['judul'] = "STANDAR PELAYANAN MINIMAL";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'indi'])->result_array();
        $data['menuid'] = '95';

        $data['subview'] = "indi/spm";
        $this->load->view('partial', $data);
    }
    public function tarif()
    {
        $data['judul'] = "TARIF";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'indi'])->result_array();
        $data['menuid'] = '96';

        $data['subview'] = "indi/tarif";
        $this->load->view('partial', $data);
    }
}

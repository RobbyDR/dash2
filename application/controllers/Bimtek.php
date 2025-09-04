<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bimtek extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }
    // ===================================== BIMTEK
    public function profil()
    {
        $data['judul'] = "PROFIL LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'bimtek'])->result_array();
        $data['menuid'] = '26';

        $data['subview'] = "bimtek/profil";
        $this->load->view('partial', $data);
    }

    public function lingkup()
    {
        $data['judul'] = "RUANG LINGKUP BIMBINGAN TEKNIS";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'bimtek'])->result_array();
        $data['menuid'] = '27';

        $data['subview'] = "bimtek/lingkup";
        $this->load->view('partial', $data);
    }

    public function alur()
    {
        $data['judul'] = "ALUR LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'bimtek'])->result_array();
        $data['menuid'] = '28';

        $data['subview'] = "bimtek/alur";
        $this->load->view('partial', $data);
    }
    public function spm()
    {
        $data['judul'] = "STANDAR PELAYANAN MINIMAL";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'bimtek'])->result_array();
        $data['menuid'] = '29';

        $data['subview'] = "bimtek/spm";
        $this->load->view('partial', $data);
    }
    public function tarif()
    {
        $data['judul'] = "TARIF BIMBINGAN TEKNIS";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'bimtek'])->result_array();
        $data['menuid'] = '30';

        $data['subview'] = "bimtek/tarif";
        $this->load->view('partial', $data);
    }
}

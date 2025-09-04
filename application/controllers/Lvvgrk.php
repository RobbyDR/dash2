<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lvvgrk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }

    // ===================================== LVVGRK
    public function profil()
    {
        $data['judul'] = "PROFIL LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lvvgrk'])->result_array();
        $data['menuid'] = '31';

        $data['subview'] = "lvvgrk/profil";
        $this->load->view('partial', $data);
    }

    public function lingkup()
    {
        $data['judul'] = "RUANG LINGKUP LVV - GRK";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lvvgrk'])->result_array();
        $data['menuid'] = '32';

        $data['subview'] = "lvvgrk/lingkup";
        $this->load->view('partial', $data);
    }

    public function alur()
    {
        $data['judul'] = "ALUR LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lvvgrk'])->result_array();
        $data['menuid'] = '33';

        $data['subview'] = "lvvgrk/alur";
        $this->load->view('partial', $data);
    }
    public function urgensi()
    {
        $data['judul'] = "Mengapa Pentingnya Validasi dan Verifikasi Gas Rumah Kaca";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lvvgrk'])->result_array();
        $data['menuid'] = '84';

        $data['subview'] = "lvvgrk/urgensi";
        $this->load->view('partial', $data);
    }
    public function manfaat()
    {
        $data['judul'] = "Manfaat dan Kegunaan dari Verifikasi dan Validasi Gas Rumah Kaca (GRK)";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lvvgrk'])->result_array();
        $data['menuid'] = '85';

        $data['subview'] = "lvvgrk/manfaat";
        $this->load->view('partial', $data);
    }
    public function dokumen()
    {
        $data['judul'] = "Dokumen-dokumen terkait";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lvvgrk'])->result_array();
        $data['menuid'] = '86';

        $data['subview'] = "lvvgrk/dokumen";
        $this->load->view('partial', $data);
    }
}

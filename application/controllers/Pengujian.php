<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengujian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }

    // ===================================== PENGUJIAN
    public function profil()
    {
        $data['judul'] = "PROFIL LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pengujian'])->result_array();
        $data['menuid'] = '6';

        $data['subview'] = "pengujian/profil";
        $this->load->view('partial', $data);
    }

    public function lingkup()
    {
        $data['judul'] = "RUANG LINGKUP PENGUJIAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pengujian'])->result_array();
        $data['menuid'] = '7';

        $data['getlingkuppengujian'] = $this->Dashboard_mod->getAllData('tbl_pengujianlingkup', ['tbl_pengujianlingkup.status' => '1'])->result_array();

        $data['subview'] = "pengujian/lingkup";
        $this->load->view('partial', $data);
    }

    public function alur()
    {
        $data['judul'] = "ALUR LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pengujian'])->result_array();
        $data['menuid'] = '13';

        $data['subview'] = "pengujian/alur";
        $this->load->view('partial', $data);
    }
    public function spm()
    {
        $data['judul'] = "STANDAR PELAYANAN MINIMAL";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pengujian'])->result_array();
        $data['menuid'] = '14';

        $data['getspmpengujian'] = $this->Dashboard_mod->getAllData('tbl_pengujianspm', ['tbl_pengujianspm.status' => '1'])->result_array();

        $data['subview'] = "pengujian/spm";
        $this->load->view('partial', $data);
    }
    public function tarif()
    {
        $data['judul'] = "TARIF PENGUJIAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pengujian'])->result_array();
        $data['menuid'] = '15';

        $data['gettarifpengujian'] = $this->Dashboard_mod->getAllData('tbl_pengujiantarif', ['tbl_pengujiantarif.status' => '1'])->result_array();

        $data['subview'] = "pengujian/tarif";
        $this->load->view('partial', $data);
    }
}

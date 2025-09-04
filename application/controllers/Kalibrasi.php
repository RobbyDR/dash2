<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kalibrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }
    // ===================================== KALIBRASI
    public function profil()
    {
        $data['judul'] = "PROFIL LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'kalibrasi'])->result_array();
        $data['menuid'] = '1';

        $data['subview'] = "kalibrasi/profil";
        $this->load->view('partial', $data);
    }

    public function lingkup()
    {
        $data['judul'] = "RUANG LINGKUP KALIBRASI";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'kalibrasi'])->result_array();
        $data['menuid'] = '2';

        $data['getlingkupkalibrasi'] = $this->Dashboard_mod->getAllData('tbl_kallingkup', ['tbl_kallingkup.status' => '1'])->result_array();

        $data['subview'] = "kalibrasi/lingkup";
        $this->load->view('partial', $data);
    }

    public function alur()
    {
        $data['judul'] = "ALUR LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'kalibrasi'])->result_array();
        $data['menuid'] = '3';

        $data['subview'] = "kalibrasi/alur";
        $this->load->view('partial', $data);
    }
    public function spm()
    {
        $data['judul'] = "STANDAR PELAYANAN MINIMAL";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'kalibrasi'])->result_array();
        $data['menuid'] = '4';

        $data['getspmkalibrasi'] = $this->Dashboard_mod->getAllData('tbl_kalspm', ['tbl_kalspm.status' => '1'])->result_array();

        $data['subview'] = "kalibrasi/spm";
        $this->load->view('partial', $data);
    }
    public function tarif()
    {
        $data['judul'] = "TARIF KALIBRASI";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'kalibrasi'])->result_array();
        $data['menuid'] = '5';

        $data['gettarifkalibrasi'] = $this->Dashboard_mod->getAllData('tbl_kaltarif', ['tbl_kaltarif.status' => '1'])->result_array();

        $data['subview'] = "kalibrasi/tarif";
        $this->load->view('partial', $data);
    }
}

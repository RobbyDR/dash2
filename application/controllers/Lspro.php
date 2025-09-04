<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lspro extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }

    // ===================================== LSPRO
    public function profil()
    {
        $data['judul'] = "PROFIL LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lspro'])->result_array();
        $data['menuid'] = '16';

        $data['subview'] = "lspro/profil";
        $this->load->view('partial', $data);
    }

    public function lingkup()
    {
        $data['judul'] = "RUANG LINGKUP LSPRO";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lspro'])->result_array();
        $data['menuid'] = '17';

        $data['getlingkuplspro'] = $this->Dashboard_mod->getAllData('tbl_lsprolingkup', ['tbl_lsprolingkup.status' => '1'])->result_array();

        $data['subview'] = "lspro/lingkup";
        $this->load->view('partial', $data);
    }
    public function administrasi()
    {
        $data['judul'] = "Persyaratan Dokumen: Kelengkapan Administrasi SPPT SNI LSPRO BBSPJILM";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lspro'])->result_array();
        $data['menuid'] = '66';

        $data['subview'] = "lspro/administrasi";
        $this->load->view('partial', $data);
    }
    public function requirements()
    {
        $data['judul'] = "Persyaratan Dokumen: Product Certification Requirements LSPRO BBSPJILM (For Foreign)";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lspro'])->result_array();
        $data['menuid'] = '67';

        $data['subview'] = "lspro/requirements";
        $this->load->view('partial', $data);
    }
    public function skema()
    {
        $data['judul'] = "SKEMA SERTIFIKASI";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lspro'])->result_array();
        $data['menuid'] = '68';

        $data['subview'] = "lspro/skema";
        $this->load->view('partial', $data);
    }
    public function appealpannel()
    {
        $data['judul'] = "APPEAL PANNEL";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lspro'])->result_array();
        $data['menuid'] = '69';

        $data['subview'] = "lspro/appealpannel";
        $this->load->view('partial', $data);
    }
    public function sertifikat()
    {
        $data['judul'] = "SERTIFIKAT";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lspro'])->result_array();
        $data['menuid'] = '70';

        $data['subview'] = "lspro/sertifikat";
        $this->load->view('partial', $data);
    }
    public function klien()
    {
        $data['judul'] = "DAFTAR KLIEN LSPRO BBSPJILM";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lspro'])->result_array();
        $data['menuid'] = '71';

        $data['getklienlspro'] = $this->Dashboard_mod->getAllData('tbl_lsproklien', ['tbl_lsproklien.status' => '1'])->result_array();

        $data['subview'] = "lspro/klien";
        $this->load->view('partial', $data);
    }
}

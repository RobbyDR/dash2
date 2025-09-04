<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengecoran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }

    // ===================================== pengecoran
    public function profil()
    {
        $data['judul'] = "PROFIL LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pengecoran'])->result_array();
        $data['menuid'] = '41';

        $data['subview'] = "pengecoran/profil";
        $this->load->view('partial', $data);
    }

    public function lingkup()
    {
        $data['judul'] = "RUANG LINGKUP PENGECORAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pengecoran'])->result_array();
        $data['menuid'] = '42';

        $data['subview'] = "pengecoran/lingkup";
        $this->load->view('partial', $data);
    }

    public function urgensi()
    {
        $data['judul'] = "Pentingnya Pengecoran Logam dalam Industri";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pengecoran'])->result_array();
        $data['menuid'] = '89';

        $data['subview'] = "pengecoran/urgensi";
        $this->load->view('partial', $data);
    }
    public function kapasitas()
    {
        $data['judul'] = "Kapasitas Pengecoran Logam ";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pengecoran'])->result_array();
        $data['menuid'] = '90';

        $data['subview'] = "pengecoran/kapasitas";
        $this->load->view('partial', $data);
    }
    public function fasilitas()
    {
        $data['judul'] = "Fasilitas Pengecoran Logam ";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'pengecoran'])->result_array();
        $data['menuid'] = '91';

        $data['subview'] = "pengecoran/fasilitas";
        $this->load->view('partial', $data);
    }
}

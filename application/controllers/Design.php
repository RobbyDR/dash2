<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Design extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }
    // ===================================== design
    public function profil()
    {
        $data['judul'] = "PROFIL LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'design'])->result_array();
        $data['menuid'] = '107';

        $data['subview'] = "design/profil";
        $this->load->view('partial', $data);
    }

    public function lingkup()
    {
        $data['judul'] = "RUANG LINGKUP";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'design'])->result_array();
        $data['menuid'] = '108';

        $data['subview'] = "design/lingkup";
        $this->load->view('partial', $data);
    }

    public function keunggulan()
    {
        $data['judul'] = "Keunggulan Layanan Design & Engineering";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'design'])->result_array();
        $data['menuid'] = '109';

        $data['subview'] = "design/keunggulan";
        $this->load->view('partial', $data);
    }
    public function fasilitas()
    {
        $data['judul'] = "FASILITAS LAYANAN DESIGN & ENGINEERING";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'design'])->result_array();
        $data['menuid'] = '110';

        $data['subview'] = "design/fasilitas";
        $this->load->view('partial', $data);
    }
    public function hasil()
    {
        $data['judul'] = "HASIL PRODUK LAYANAN DESIGN & ENGINEERING";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'design'])->result_array();
        $data['menuid'] = '111';

        $data['subview'] = "design/hasil";
        $this->load->view('partial', $data);
    }
}

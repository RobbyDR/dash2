<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permesinan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }
    // ===================================== PERMESINAN
    public function profil()
    {
        $data['judul'] = "PROFIL LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'permesinan'])->result_array();
        $data['menuid'] = '56';

        $data['subview'] = "permesinan/profil";
        $this->load->view('partial', $data);
    }

    public function lingkup()
    {
        $data['judul'] = "RUANG LINGKUP PERMESINAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'permesinan'])->result_array();
        $data['menuid'] = '57';

        $data['subview'] = "permesinan/lingkup";
        $this->load->view('partial', $data);
    }

    public function alur()
    {
        $data['judul'] = "ALUR LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'permesinan'])->result_array();
        $data['menuid'] = '58';

        $data['subview'] = "permesinan/alur";
        $this->load->view('partial', $data);
    }
    public function produk()
    {
        $data['judul'] = "PRODUK UNGGULAN YANG PERNAH DIHASILKAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'permesinan'])->result_array();
        $data['menuid'] = '59';


        $data['subview'] = "permesinan/produk";
        $this->load->view('partial', $data);
    }
    public function tarif()
    {
        $data['judul'] = "TARIF PERMESINAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'permesinan'])->result_array();
        $data['menuid'] = '60';

        $data['subview'] = "permesinan/tarif";
        $this->load->view('partial', $data);
    }
}

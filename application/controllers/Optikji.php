<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Optikji extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }
    // ===================================== optikji
    public function profil()
    {
        $data['judul'] = "PROFIL LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'optikji'])->result_array();
        $data['menuid'] = '102';

        $data['subview'] = "optikji/profil";
        $this->load->view('partial', $data);
    }

    public function lingkup()
    {
        $data['judul'] = "RUANG LINGKUP";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'optikji'])->result_array();
        $data['menuid'] = '103';

        $data['subview'] = "optikji/lingkup";
        $this->load->view('partial', $data);
    }

    public function alur()
    {
        $data['judul'] = "ALUR LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'optikji'])->result_array();
        $data['menuid'] = '104';

        $data['subview'] = "optikji/alur";
        $this->load->view('partial', $data);
    }
    public function spm()
    {
        $data['judul'] = "STANDAR PELAYANAN MINIMAL";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'optikji'])->result_array();
        $data['menuid'] = '105';

        $data['subview'] = "optikji/spm";
        $this->load->view('partial', $data);
    }
    public function tarif()
    {
        $data['judul'] = "TARIF";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'optikji'])->result_array();
        $data['menuid'] = '106';

        $data['subview'] = "optikji/tarif";
        $this->load->view('partial', $data);
    }
}

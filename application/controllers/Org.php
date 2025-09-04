<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Org extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }

    // ============================ PROFIL ORGANISASI
    public function sejarah()
    {
        $data['judul'] = "SEJARAH SINGKAT BBSPJI LOGAM DAN MESIN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'org'])->result_array();
        $data['menuid'] = '8';

        $data['subview'] = "org/sejarah";
        $this->load->view('partial', $data);
    }

    public function visimisi()
    {
        $data['judul'] = "VISI, MISI & MOTTO BBSPJI LOGAM DAN MESIN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'org'])->result_array();
        $data['menuid'] = '9';

        $data['subview'] = "org/visimisi";
        $this->load->view('partial', $data);
    }

    public function tugas()
    {
        $data['judul'] = "TUGAS BBSPJI LOGAM DAN MESIN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'org'])->result_array();
        $data['menuid'] = '10';

        $data['subview'] = "org/tugas";
        $this->load->view('partial', $data);
    }

    public function tujuan()
    {
        $data['judul'] = "TUJUAN BBSPJI LOGAM DAN MESIN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'org'])->result_array();
        $data['menuid'] = '11';

        $data['subview'] = "org/tujuan";
        $this->load->view('partial', $data);
    }

    public function video()
    {
        $data['judul'] = "VIDEO PROFIL BBSPJI LOGAM DAN MESIN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'org'])->result_array();
        $data['menuid'] = '12';

        $data['subview'] = "org/video";
        $this->load->view('partial', $data);
    }
}

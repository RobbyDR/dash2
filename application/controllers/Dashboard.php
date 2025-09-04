<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }
    // ============================== MENU UTAMA
    public function index()
    {
        $data['judul'] = "DASHBOARD";
        $data['backgroundpic'] = 'bg1';
        $data['covercontainer'] = 'cover-container90';

        $data['subview'] = "dashboard/menuutama";
        $this->load->view('partial2', $data);
    }

    // =============================== MENU LAYANAN
    public function menulayanan()
    {
        $data['judul'] = "LAYANAN JASA";
        $data['judul1'] = "BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI LOGAM DAN MESIN";
        $data['backgroundpic'] = 'bg2';
        $data['covercontainer'] = 'cover-container';

        $data['subview'] = "dashboard/menulayanan";
        $this->load->view('partial2', $data);
    }

    public function menulayanan2()
    {
        $data['judul'] = "LAYANAN JASA (2)";
        $data['judul1'] = "BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI LOGAM DAN MESIN";
        $data['backgroundpic'] = 'bg2';
        $data['covercontainer'] = 'cover-container';

        $data['subview'] = "dashboard/menulayanan2";
        $this->load->view('partial2', $data);
    }
}

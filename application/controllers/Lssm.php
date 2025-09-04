<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lssm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Dashboard_mod']);
    }

    // ===================================== lssm
    public function profil()
    {
        $data['judul'] = "PROFIL LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lssm'])->result_array();
        $data['menuid'] = '21';

        $data['subview'] = "lssm/profil";
        $this->load->view('partial', $data);
    }

    public function lingkup()
    {
        $data['judul'] = "RUANG LINGKUP LSSM";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lssm'])->result_array();
        $data['menuid'] = '22';

        $data['subview'] = "lssm/lingkup";
        $this->load->view('partial', $data);
    }

    public function alur()
    {
        $data['judul'] = "ALUR LAYANAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lssm'])->result_array();
        $data['menuid'] = '23';

        $data['subview'] = "lssm/alur";
        $this->load->view('partial', $data);
    }

    public function permohonan()
    {
        $data['judul'] = "PERMOHONAN SERTIFIKASI";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lssm'])->result_array();
        $data['menuid'] = '72';

        $data['subview'] = "lssm/permohonan";
        $this->load->view('partial', $data);
    }

    public function pemberian()
    {
        $data['judul'] = "PEMBERIAN SERTIFIKASI";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lssm'])->result_array();
        $data['menuid'] = '73';

        $data['subview'] = "lssm/pemberian";
        $this->load->view('partial', $data);
    }

    public function penolakan()
    {
        $data['judul'] = "PENOLAKAN SERTIFIKASI";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lssm'])->result_array();
        $data['menuid'] = '74';

        $data['subview'] = "lssm/penolakan";
        $this->load->view('partial', $data);
    }

    public function pemeliharaan()
    {
        $data['judul'] = "PEMELIHARAAN SERTIFIKASI";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lssm'])->result_array();
        $data['menuid'] = '75';

        $data['subview'] = "lssm/pemeliharaan";
        $this->load->view('partial', $data);
    }

    public function perluasan()
    {
        $data['judul'] = "PERLUASAN DAN PENGURANGAN LINGKUP SERTIFIKASI";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lssm'])->result_array();
        $data['menuid'] = '76';

        $data['subview'] = "lssm/perluasan";
        $this->load->view('partial', $data);
    }

    public function pembekuan()
    {
        $data['judul'] = "PEMBEKUAN DAN PENGAKTIFAN KEMBALI SERTIFIKASI";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lssm'])->result_array();
        $data['menuid'] = '77';

        $data['subview'] = "lssm/pembekuan";
        $this->load->view('partial', $data);
    }

    public function pencabutan()
    {
        $data['judul'] = "PENCABUTAN SERTIFIKASI";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lssm'])->result_array();
        $data['menuid'] = '78';

        $data['subview'] = "lssm/pencabutan";
        $this->load->view('partial', $data);
    }

    public function resertifikasi()
    {
        $data['judul'] = "RESERTIFIKASI";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lssm'])->result_array();
        $data['menuid'] = '79';

        $data['subview'] = "lssm/resertifikasi";
        $this->load->view('partial', $data);
    }

    public function logo()
    {
        $data['judul'] = "LOGO";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lssm'])->result_array();
        $data['menuid'] = '80';

        $data['subview'] = "lssm/logo";
        $this->load->view('partial', $data);
    }

    public function keluhan()
    {
        $data['judul'] = "KELUHAN DAN BANDING";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lssm'])->result_array();
        $data['menuid'] = '81';

        $data['subview'] = "lssm/keluhan";
        $this->load->view('partial', $data);
    }

    public function kebijakan()
    {
        $data['judul'] = "KEBIJAKAN KETIDAKBERPIHAKAN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lssm'])->result_array();
        $data['menuid'] = '82';

        $data['subview'] = "lssm/kebijakan";
        $this->load->view('partial', $data);
    }

    public function klien()
    {
        $data['judul'] = "DAFTAR KLIEN";
        $data['getmenu'] = $this->Dashboard_mod->getAllData('tbl_devmenu', ['tbl_devmenu.status' => '1', 'tbl_devmenu.afiliasi' => 'lssm'])->result_array();
        $data['menuid'] = '83';

        $data['getlssmmklien'] = $this->Dashboard_mod->getAllData('tbl_lssmmklien', ['tbl_lssmmklien.status' => '1'])->result_array();

        $data['subview'] = "lssm/klien";
        $this->load->view('partial', $data);
    }
}

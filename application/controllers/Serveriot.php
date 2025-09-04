<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Serveriot extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model(['Dashboard_mod']);
        $this->load->model(['Dashboard_mod']);
    }
    // ============================== MENU UTAMA
    public function index()
    {
        $data['judul'] = "DASHBOARD IOT";
        $data['backgroundpic'] = 'bg1';
        $data['covercontainer'] = 'cover-container90';

        $data['subview'] = "serveriot/serveriot";
        $this->load->view('partial2', $data);
    }

    public function suhu()
    {
        $data['judul'] = "TABEL SUHU";
        $data['backgroundpic'] = 'bg1';
        $data['covercontainer'] = 'cover-container90';

        $data['getdatasuhu'] = $this->Dashboard_mod->getAllData(['tbl_suhu.status' => '1'], 'tbl_suhu')->result_array();

        $data['subview'] = "serveriot/suhu";
        $this->load->view('partial2', $data);
    }

    public function receive_data()
    {
        // Mendapatkan data POST dari ESP32
        $api_key = $this->input->post('api_key');
        $sensor = $this->input->post('sensor');
        $location = $this->input->post('location');
        $value1 = $this->input->post('value1');
        $value2 = $this->input->post('value2');
        $value3 = $this->input->post('value3');

        // Validasi API Key
        // if ($api_key !== 'YOUR_API_KEY') {
        //     echo json_encode(array('status' => 'error', 'message' => 'Invalid API Key'));
        //     return;
        // }

        // Proses data yang diterima, misalnya menyimpan ke database
        $data = array(
            'sensor' => $sensor,
            'location' => $location,
            'value1' => $value1,
            'value2' => $value2,
            'value3' => $value3,
        );

        if ($this->Sensor_model->save_data($data)) {
            echo json_encode(array('status' => 'success', 'message' => 'Data received successfully'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Failed to save data'));
        }
    }
}

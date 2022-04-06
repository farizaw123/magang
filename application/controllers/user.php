<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['siswa'] = $this->User_model->getAllUser();
        $this->load->view('users/index', $data);
    }

    
    // public function hapus($nis)
    // {
    //     $this->user_model->hapusData($niss);
    //     redirect('index');
    // }


    public function formTambah()
    {
        $this->load->view('user/tambah');
    }
    



    public function tampilkanData()
    {
        $data = $this->User_model->getAllUser();
        echo json_encode($data);
    }

    public function simpanData()
    {
        $data = $this->User_model->inputData();
        echo json_encode($data);
    }

    public function update()
    {
        $data = $this->User_model->updateData();
        echo json_encode($data);
    }

    public function hapus()
    {
        $data = $this->User_model->hapusData();
        echo json_encode($data);
    }
}
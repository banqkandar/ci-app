<?php

class Mahasiswa extends CI_Controller {
    //method constrct adalah metod ketika kelasnya dijalankan di instansiasi(diulang-ulang)
    // public function __contruct() {
    //     parent::__contruct(); //untuk menjalankan fungsi contract yang ada dalam controller ini
    // }

    public function index() {

        $data['judul'] = 'Daftar mahasiswa';
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index');
        $this->load->view('templates/footer');
    }
}
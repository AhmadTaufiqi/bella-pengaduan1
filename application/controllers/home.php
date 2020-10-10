<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('home');
    }

    public function pengaduan()
    {
        // form validasi utk cek apakah required (kosong)
        $this->form_validation->set_rules('nomor', 'Nomor', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('telpon', 'Nomor Telpon', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('pengaduan', 'Pengaduan', 'required');
        if ($this->form_validation->run() == false) {
            // men load view
            $this->load->view('pengaduan');
        } else {

            // proses merubah input dari view mjd array
            $data = [
                'nomer_inet' => $this->input->post('nomor'),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'telpon' => $this->input->post('telpon'),
                'alamat' => $this->input->post('alamat'),
                'tanggal_pengaduan' => $this->input->post('tanggal'),
                'isi_pengaduan_kendala' => $this->input->post('pengaduan')
            ];

            // insert data ke database, tabel 'tb_pgn' dengan membawa array $data
            $this->db->insert('tb_pgn', $data);

            // membawa pesan dengan perintah session. pesan dibawa ke view
            $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
        terimakasih,  data sudah masuk! </div>');
            redirect('home/pengaduan');
        }
    }

    public function lihat()
    {
        // code belum jadi
        // code dibawah untuk men load data dari table 'tb_pgn'
        // $data = $this->db->get_where('tb_pgn')->row_array();
        $this->load->view('lihat');
    }
}

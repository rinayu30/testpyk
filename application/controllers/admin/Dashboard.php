<?php
//untuk admin dan karyawan
class Dashboard_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // check_not_login();
        // cek_pengunjung();
        // $this->load->model(['penjualan_model', 'produk_model', 'bahan_masuk_model', 'auth_model']);
    }

    public function index()
    {
        $this->load->view('templates_adm/header');
        $this->load->view('templates_adm/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templates_adm/footer');
    }
}

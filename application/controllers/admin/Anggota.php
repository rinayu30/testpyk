<?php
defined('BASEPATH') or exit('No direct script access allowed');

class anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // check_not_login();
        // cek_pengunjung();
        // cek_admin();
        $this->load->model('anggota_m');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['row'] = $this->anggota_m->get();
        $this->load->view('templates_adm/header');
        $this->load->view('templates_adm/sidebar');
        $this->load->view('admin/anggota/anggota_data', $data);
        $this->load->view('templates_adm/footer');
    }

    public function add()
    {
        $anggota = new stdClass();
        $anggota->id_anggota = null; //field sesuai dengan database
        $anggota->nama = null;

        $data = array(
            'page' => 'tambah',
            'row' => $anggota
        );
        $this->load->view('admin/anggota/anggota_form', $data);
    }

    public function edit($id)
    {
        $query = $this->anggota_m->get($id);
        if ($query->num_rows() > 0) {
            $anggota = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $anggota
            );
            $this->load->view("admin/anggota/anggota_form", $data);
        } else {
            echo "<script>alert('Data tidak dapat ditemukan');";
            redirect('admin/anggota');
        }
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['tambah'])) {
            $this->anggota_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->anggota_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', ' Data berhasil disimpan');
        }
        redirect('admin/anggota');
    }

    public function delete($id)
    {
        $this->anggota_model->hapus_data($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', ' Data berhasil dihapus');
        }
        redirect('admin/anggota');
    }
}

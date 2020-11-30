<?php

use phpDocumentor\Reflection\Types\Object_;

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('auth_model');
    }
    public function login()
    {
        // check_already_login();
        $this->load->view('login');
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model('auth_m');
            $query = $this->auth_model->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'userid' => $row->id_user,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);
                if ($this->session->userdata("level") == "1") {
                    redirect('admin/dashboard/');
                } elseif ($this->session->userdata("level") == "2") {
                    redirect('admin/dashboard/');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau password Anda Salah!
                <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                <span aria-hidden="true">&times;</span></button></div>');
                redirect('auth/login');
            }
        }
    }
}

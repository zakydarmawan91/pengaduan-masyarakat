<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    // public function index()
    // {
    //     $this->load->view('auth/login');
    // }


    public function landingpage()
    {
        $this->load->view('landingpage');
    }
    public function dashboard()
    {
        $this->load->view('Dashboard/dahsboard');
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    // login masyarakat
    public function index()
    {

        $this->form_validation->set_rules('nik', 'nik', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {

            // Gagal validasi

            $this->load->view('auth/login');
        } else {

            // Lolos validasi
            $this->_login();
        }
    }
    private function _login()
    {
        $nik = $this->input->post('nik');
        $password = $this->input->post('password');

        $user = $this->db->get_where('masyarakat', ['nik' => $nik])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif

            // cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'id' => $user['id']
                ];
                
                $this->session->set_userdata($data);
                redirect('Dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong password! </div>');
                redirect('newlogin/bb');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> username is not register </div>');
            redirect('newlogin/aa');
        }
    }
    public function register()
    {
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('nik', 'Nik', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'registration user';
            $this->load->view('auth/register', $data);
        } else {
            $data = [
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'telp' => $this->input->post('telp'),
                'username' => $this->input->post('username'),
                'password' => password_hash(
                    $this->input->post('password'),
                    PASSWORD_DEFAULT
                ),
                // 'telp' => $this->input->post('telefon')
            ];

            $this->db->insert('masyarakat', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
            redirect('auth');
        }
    }
    public function register_admin()
    {
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('telp', 'telp', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'registration user';
            $this->load->view('auth_admin/register', $data);
        } else {
            $data = [

                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'telp' => $this->input->post('telp'),
                'username' => $this->input->post('username'),
                'password' => password_hash(
                    $this->input->post('password'),
                    PASSWORD_DEFAULT
                ),
                'level' => 'admin'
                // 'telp' => $this->input->post('telefon')
            ];

            $this->db->insert('petugas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
            redirect('auth/admin_login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        // $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Logout</div>');
        redirect('auth');
    }

    // Login admin   
    public function admin_login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login User';
            $this->load->view('templates/header', $data);
            $this->load->view('auth_admin/login');
            $this->load->view('templates/footer');
        } else {
            // validasinya success
            $this->_admin_login();
        }
    }

    public function _admin_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('petugas', ['username' => $username])->row_array();

        // var_dump($user);
        // jika usernya ada
        if ($user) {
            // jika usernya aktif

            // cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'level' => $user['level']
                ];

                // kondisi
                $this->session->set_userdata($data);

                redirect('Admin'); //admin


            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong password! </div>');
                redirect('Auth/admin_login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not register </div>');
            redirect('Auth/admin_login  ');
        }
    }

    public function logout_admin()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        // $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Logout</div>');
        redirect('auth');
    }
}

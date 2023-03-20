<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

public function index()
{       
        $data['user']  =$this->db->get_where('petugas',['username'=>$this->session->userdata('username')])->row_array();     
        $data['pengaduan']=$this->db->get('pengaduan')->result_array();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/topbar');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Dashboard_admin/dashboard',$data);
        $this->load->view('templates_admin/footer');
}
public function data_petugas(){
        $data['petugas']=$this->db->get('petugas')->result_array();
        $data['user']  =$this->db->get_where('petugas',['username'=>$this->session->userdata('username')])->row_array();     
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/topbar');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Dashboard_admin/data_petugas',$data);
        $this->load->view('templates_admin/footer');
}
public function data_pengaduan(){
        $data['pengaduan']=$this->db->get('pengaduan')->result_array();
        $data['user']  =$this->db->get_where('petugas',['username'=>$this->session->userdata('username')])->row_array();     
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/topbar');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Dashboard_admin/data_pengaduan',$data);
        $this->load->view('templates_admin/footer');
}

public function tambah_sub_kategori(){
        $insert_data=[
                'id_kategori'=>$this->input->post('kategori'),
                'subkategori'=>$this->input->post('subkategori'),
        ];
        $this->db->insert('subkategori',$insert_data);
        redirect('admin/kategori');
}

public function tambah_kategori(){
        $insert_data=[
                'kategori'=>$this->input->post('kategori')
        ];
        $this->db->insert('kategori',$insert_data);
        redirect('admin/kategori');
}
public function kategori(){
        $data['kategori']=$this->db->get('kategori')->result_array();
        $data['subkategori']=$this->db->get('subkategori')->result_array();

        $data['user']  =$this->db->get_where('petugas',['username'=>$this->session->userdata('username')])->row_array();     
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/topbar');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Dashboard_admin/kategori',$data);
        $this->load->view('templates_admin/footer');
}
}
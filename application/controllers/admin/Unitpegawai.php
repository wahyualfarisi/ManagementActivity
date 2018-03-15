<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unitpegawai extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->model('m_unitpegawai');
    if($this->session->userdata('status') != 'login'){
      redirect(base_url('admin/auth') );
    }
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['title'] = 'Data Unit Pegawai';
    $this->load->view('include/back/header', $data);
    $data['unit'] = $this->m_unitpegawai->getallunitpegawai()->result();
    $this->load->view('admin/view_unitpegawai', $data);
    $this->load->view('include/back/footer');
  }

}

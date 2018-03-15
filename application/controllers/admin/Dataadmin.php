<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataadmin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_merk');
    $this->load->library('session');
    if($this->session->userdata('status') != 'login' ){
      redirect(base_url('admin/auth') );
    }
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('include/back/header');
    $this->load->view('admin/view_dataadmin');
    $this->load->view('include/back/footer');
  }
  

}

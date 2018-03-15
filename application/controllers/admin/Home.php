<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');

    if($this->session->userdata('status') != 'login' ){
      redirect(base_url('admin/auth'));
    }
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['title'] = 'Home';
    $this->load->view('include/back/header.php', $data);
    $this->load->view('admin/view_homeAdmin.php');
    $this->load->view('include/back/footer.php');
  }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    if($this->session->userdata('status') != 'loginactive' ){
      redirect(base_url('login') );
    }
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('include/front/header_home');
    $this->load->view('view_home');
    $this->load->view('include/front/footer');
  }

}

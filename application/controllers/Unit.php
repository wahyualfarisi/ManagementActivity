<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    //Codeigniter : Write Less Do More
  }
  function index()
  {
    $this->data['title'] = 'Data Cpu';
    $this->load->view('include/front/header_unit', $this->data);
    $this->load->view('unit/view_unit_pc');
    $this->load->view('include/front/footer');
  }

}

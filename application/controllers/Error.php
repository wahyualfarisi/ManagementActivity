<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller{

function index()
{
  $this->load->view('include/front/header_home');
  $this->load->view('view_error');
}


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');
    $this->load->library('session');
    //Codeigniter : Write Less Do More
  }
  function index()
  {
    if($this->session->userdata('status') == 'loginactive' ){
      redirect(base_url('home') );
    }
    $this->load->view('view_login.php');
  }
  function loginaction()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $where = array(
      'email' => $email,
      'password' => md5($password)
    );
    $cek = $this->m_login->cek_loginuser($where)->num_rows();
    if($cek > 0 ){
      $data_session = array(
        'email'   => $email,
        'usernam' => $username,
        'status'  => 'loginactive'
      );
      $this->session->set_userdata($data_session);
      redirect(base_url('home') );
    }else{
      $this->session->set_flashdata('msg', 'Periksa Kembali Email dan Password');
      redirect(base_url('login') );
    }

  }
  function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url('login') );
  }


}

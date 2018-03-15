<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');
    $this->load->library('session');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('admin/view_loginAdmin');
  }

  function actionlogin()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
      'username' => $username,
      'password' => md5($password)
    );
    $cek = $this->m_login->cek_login($where)->num_rows();
    if($cek >0 ){
      $data_session = array(
        'username' => $username,
        'status'   => "login"
      );
      $this->session->set_userdata($data_session);
      redirect(base_url('admin/home') );
    }else{
      $this->session->set_flashdata('msg', 'Periksa Kembali Username dan Password');
      redirect(base_url('admin/auth') );
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url('admin/auth'));
  }

}

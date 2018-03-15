<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_pegawai');
    $this->load->library('session');

    if($this->session->userdata('status') != 'login' ){
      redirect(base_url('admin/auth') );
    }
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['title'] = 'Data Pegawai';
    $this->load->view('include/back/header', $data);
    $data['pegawai']= $this->m_pegawai->getAllpegawai()->result();
    $this->load->view('admin/view_pegawai', $data);
    $this->load->view('include/back/footer');
  }
  function addpegawai()
  {
    $nama_depan = $this->input->post('nama_depan');
    $nama_belakang = $this->input->post('nama_belakang');
    $username = $this->input->post('username');

    $data = array(
      'nama_depan' => $nama_depan,
      'nama_belakang' => $nama_belakang,
      'username' => $username
    );

    $this->m_pegawai->insert($data);
    if($data>0){
      echo $this->session->set_flashdata('pegawai', 'Berhasil Menambahkan data Pegawai');
      redirect(base_url('admin/pegawai') );
    }else{
      echo $this->session->set_flashdata('pegawai', 'Ada Kesalahan');
      redirect(base_url('admin/pegawai') );
    }
  }
  function deletepegawai($id)
  {
    $where = array('id_pegawai' => $id );
    $this->m_pegawai->delete($where);
    echo $this->session->set_flashdata('pegawai', 'Berhasil Menghapus Data');
    redirect(base_url('admin/pegawai') );
  }
  function editpegawai($id)
  {
    $where = array('id_pegawai' => $id );
    $data['pegawai'] = $this->m_pegawai->edit($where)->result();
    $this->load->view('admin/view_editpegawai', $data);
  }
  function updatepegawai()
  {
    $id            = $this->input->post('id_pegawai');
    $nama_depan    = $this->input->post('nama_depan');
    $nama_belakang = $this->input->post('nama_belakang');
    $username      = $this->input->post('username');

    $data = array(
      'nama_depan' => $nama_depan,
      'nama_belakang' => $nama_belakang,
      'username' => $username
    );
    $where = array(
      'id_pegawai' => $id
    );
    $this->m_pegawai->update($where, $data);
    if($data>0){
      echo $this->session->set_flashdata('pegawai', 'Berhasil Merubah Data Pegawai');
      redirect(base_url('admin/pegawai') );
    }else{
      echo $this->session->set_flashdata('pegawai', 'Ada Kesalahan');
      redirect(base_url('admin/pegawai') );
    }
  }

}

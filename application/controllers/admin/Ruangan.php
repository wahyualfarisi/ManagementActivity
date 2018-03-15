<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller{

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
    $data['title'] = 'Data Ruangan';
    $this->load->view('include/back/header', $data);

    $data['ruangan'] = $this->m_merk->getAll('penempatan')->result();
    //$data['gedung']  = $this->m_merk->getAll('Gedung')->result();
    $this->load->view('admin/view_ruangan', $data);
    $this->load->view('include/back/footer');
  }

  function addruangan()
  {
    $ruangan = $this->input->post('nama_penempatan');
    $data = array(
      'nama_penempatan' => $ruangan
    );
    $this->m_merk->insert($data, 'penempatan');
    if($data>0){
      echo $this->session->set_flashdata('ruangan', 'Data Ruangan Berhasil DiHapus');
      redirect(base_url('admin/ruangan') );
    }else{
      echo $this->session->set_flashdata('ruangan', 'Ada Kesalahan');
      redirect(base_url('admin/ruangan') );
    }
  }

  function deleteruangan($id)
  {
    $where = array('id_penempatan' => $id);
    $this->m_merk->delete($where, 'penempatan');
    echo $this->session->set_flashdata('ruangan', 'Data Ruangan Berhasil Dihapus');
    redirect(base_url('admin/ruangan') );
  }
  function editruangan($id)
  {
    $where = array('id_penempatan' => $id );
    $data['penempatan'] = $this->m_merk->edit($where, 'penempatan')->result();
    $this->load->view('admin/view_editruangan', $data);
  }
  function updateruangan()
  {
    $id      = $this->input->post('id_penempatan');
    $ruangan = $this->input->post('nama_penempatan');

    $data = array(
      'nama_penempatan' => $ruangan
    );

    $where = array(
      'id_penempatan' => $id
    );
    $this->m_merk->update($where, $data, 'penempatan');
    if($data>0){
      echo $this->session->set_flashdata('ruangan', 'Data Ruangan Berhasil Dirubah');
      redirect(base_url('admin/ruangan') );
    }else{
      echo $this->session->set_flashdata('ruangan', 'Ada Kesalahan');
      redirect(base_url('admin/ruangan') );
    }
  }

}

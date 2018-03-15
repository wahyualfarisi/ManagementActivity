<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapat extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->model('m_rapat');
    $this->load->model('m_merk');

    if($this->session->userdata('status') != 'loginactive'){
      redirect('login');
    }

  }

  function index()
  {
    $data['title'] = 'Data Rapat';
    $data['today'] = $this->m_rapat->getAllrapatToday()->result();
    $data['jumlahtoday'] = $this->m_rapat->getAllrapatToday()->num_rows();
    $this->load->view('include/front/header_rapat',$data);

    $data['datarapat'] = $this->m_rapat->GetAllrapat()->result();
    $data['lokasi']    = $this->m_rapat->getAll('lokasi_rapat')->result();
    $data['bagian']    = $this->m_rapat->getAll('pengguna')->result();
    $this->load->view('Rapat/view_rapat',$data);
    $this->load->view('include/front/footer');
  }

  function addaction()
  {
    $lokasi     = $this->input->post('lokasi');
    $pengguna   = $this->input->post('pengguna');
    $hari       = $this->input->post('hari');
    $tanggal    = $this->input->post('tanggal');
    $waktu      = $this->input->post('waktu');
    $uraikeg    = $this->input->post('uraian_kegiatan');
    $keterangan = $this->input->post('keterangan');
    $addby      = $this->input->post('add_by');

    $data = array(
      'id_lokasi' => $lokasi,
      'id_pengguna' => $pengguna,
      'hari' => $hari,
      'tanggal' => $tanggal,
      'waktu' => $waktu,
      'uraian_kegiatan' => $uraikeg,
      'keterangan' => $keterangan,
      'add_by' => $addby
    );
    $this->m_merk->insert($data, 'data_rapat');
    if($data>0){
      echo $this->session->set_flashdata('rapat', $addby.' Berhasil Menambahkan Data');
          redirect('rapat');
    }else{
      echo $this->session->set_flashdata('rapat', 'Ada Kesalahan');
          redirect('rapat');
    }
  }

  function mersel()
  {
    $data['today'] = $this->m_rapat->getAllrapatToday()->result();
    $data['jumlahtoday'] = $this->m_rapat->getAllrapatToday()->num_rows();
    $data['title'] = 'Data Rapat Mersel';
    $this->load->view('include/front/header_rapat', $data);

    $data['mersel'] = $this->m_rapat->getAllrapatMersel()->result();
    $data['lokasi']    = $this->m_rapat->getAll('lokasi_rapat')->result();
    $data['bagian']    = $this->m_rapat->getAll('pengguna')->result();
    $this->load->view('rapat/view_rapatmersel',$data);
    $this->load->view('include/front/footer');
  }
  function rapattoday()
  {
    $data['today'] = $this->m_rapat->getAllrapatToday()->result();
    $data['jumlahtoday'] = $this->m_rapat->getAllrapatToday()->num_rows();
    $data['title'] = 'Rapat Hari ini';
    $this->load->view('include/front/header_rapat', $data);

    $this->load->view('rapat/view_hariini');

    $this->load->view('include/front/footer');
  }
  function merut()
  {
    $data['today'] = $this->m_rapat->getAllrapatToday()->result();
    $data['jumlahtoday'] = $this->m_rapat->getAllrapatToday()->num_rows();
    $data['title'] = 'Data Rapat Merut';
    $this->load->view('include/front/header_rapat', $data);
    $data['merut'] = $this->m_rapat->getAllrapatMerut()->result();
    $data['lokasi']    = $this->m_rapat->getAll('lokasi_rapat')->result();
    $data['bagian']    = $this->m_rapat->getAll('pengguna')->result();
    $this->load->view('rapat/view_rapatmerut', $data);

    $this->load->view('include/front/footer');
  }


}

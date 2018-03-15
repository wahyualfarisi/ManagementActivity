<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_merk');
    $this->load->library('session');
    //Codeigniter : Write Less Do More
  }

  //------------------- merk cpu ------------------------------->
  function merkcpu()
  {
    if($this->session->userdata('status') != 'login' ){
      redirect(base_url('admin/auth') );
    }
    $data['title'] = 'Merk Cpu';
    $this->load->view('include/back/header', $data);
    $data['cpu'] = $this->m_merk->getAllCpu()->result();
    $this->load->view('admin/view_merkcpu', $data);
    $this->load->view('include/back/footer');
  }
  function addcpu()
  {
    $namaBrand = $this->input->post('nama_brand');
    $type      = $this->input->post('type');
    $keterangan = $this->input->post('ket');

    $data = array(
      'nama_brand' => $namaBrand,
      'type_pc'    => $type,
      'keterangan' => $keterangan
    );
    $this->m_merk->insert($data, 'merk_pc');
    if($data >=1 ){
      echo $this->session->set_flashdata('msg', 'Berhasil Menambahkab Data');
      redirect(base_url('admin/merk/merkcpu'));
    }else{
      echo $this->session->set_flashdata('msg', 'Ada Kesalahan');
      redirect('merkcpu');
    }

  }
  function deletecpu($id)
  {
    $where = array('id_pc' => $id);
    $this->m_merk->delete($where, 'merk_pc');
      echo $this->session->set_flashdata('msg', 'Berhasil Menghapus Data');
      redirect(base_url('admin/merk/merkcpu') );
  }
  function editcpu($id)
  {
    if($this->session->userdata('status') != 'login' ){
      redirect(base_url('admin/auth') );
    }
    $where = array('id_pc' => $id );
    $data['cpu'] = $this->m_merk->edit($where, 'merk_pc')->result();
    $this->load->view('admin/view_editcpu', $data);
  }
  function updatecpu()
  {
    $id         = $this->input->post('id_pc');
    $namaBrand  = $this->input->post('nama_brand');
    $type_pc    = $this->input->post('type');
    $keterangan = $this->input->post('ket');

    $data = array(
      'nama_brand' => $namaBrand,
      'type_pc'    => $type_pc,
      'keterangan' => $keterangan
    );

    $where = array(
            'id_pc'=> $id
    );

    $this->m_merk->update($where, $data, 'merk_pc');
    if($data > 0){
      echo $this->session->set_flashdata('msg', 'Berhasil Merubah Data');
      redirect(base_url('admin/merk/merkcpu') );
    }else{
      echo $this->session->set_flashdata('msg', 'Ada Kesalahan');
    }
  }
    //------------------- merk cpu ----------------------------------->

    //------------------- merk monitor ------------------------------->
  function merkmonitor()
  {
    $data['title'] = 'Merk Monitor';
    $this->load->view('include/back/header', $data);

    $data['monitor'] = $this->m_merk->getAllMonitor()->result();
    $this->load->view('admin/view_merkmonitor', $data);
    $this->load->view('include/back/footer');
  }
  function addmonitor()
  {
    $namaBrand = $this->input->post('nama_brand');
    $type_monitor = $this->input->post('type');
    $keterangan = $this->input->post('ket');

    $data = array(
      'nama_brand_monitor' => $namaBrand,
      'type_monitor' => $type_monitor,
      'keterangan'   => $keterangan
    );

    $this->m_merk->insert($data, 'merk_monitor');
    if($data > 1 ){
      echo $this->session->set_flashdata('monitor', 'Data Monitor Berhasil Ditambah');
      redirect(base_url('admin/merk/merkmonitor') );
    }else{
      echo $this->session->set_flashdata('monitor', 'Ada Kesalahan');
      redirect(base_url('admin/merk/merkmonitor') );
    }
  }

  function deletemonitor($id)
  {
    $where = array('id_monitor' => $id);
    $this->m_merk->delete($where, 'merk_monitor');
    echo $this->session->set_flashdata('monitor', 'Data Monitor Berhasil Dihapus');
    redirect(base_url('admin/merk/merkmonitor') );
  }

  function editmonitor($id)
  {
    if($this->session->userdata('status') != 'login' ){
      redirect(base_url('admin/auth'));
    }
    $where = array('id_monitor' => $id );
    $data['monitor'] = $this->m_merk->edit($where, 'merk_monitor')->result();
    $this->load->view('admin/view_editmonitor', $data);
  }

  function updatemonitor()
  {
    $id = $this->input->post('id_monitor');
    $namaBrand = $this->input->post('nama_brand');
    $type_monitor = $this->input->post('type');
    $keterangan = $this->input->post('ket');

    $data = array(
      'nama_brand_monitor' => $namaBrand,
      'type_monitor'       => $type_monitor,
      'keterangan'         => $keterangan
    );

    $where = array(
      'id_monitor' => $id
    );
    $this->m_merk->update($where, $data, 'merk_monitor');

    if($data > 0 ){
      echo $this->session->set_flashdata('monitor', 'Data Monitor Berhasil Dirubah');
      redirect(base_url('admin/merk/merkmonitor') );
    }else{
      echo $this->session->set_flashdata('monitor', 'Ada Kesalahan');
      redirect(base_url('admin/merk/merkmonitor') );
    }
  }
    //------------------- merk monitor ------------------------------->
    //------------------- merk Printer ------------------------------->
  function merkprinter()
  {
    if($this->session->userdata('status') != 'login'){
      redirect(base_url('admin/auth') );
    }
    $data['title'] = 'Merk Printer';
    $this->load->view('include/back/header', $data);

    $data['printer'] = $this->m_merk->getAllPrinter()->result();
    $this->load->view('admin/view_merkprinter', $data);
    $this->load->view('include/back/footer');
  }
  function addprinter()
  {
    $namaBrand    = $this->input->post('nama_brand');
    $type_printer = $this->input->post('type');
    $keterangan   = $this->input->post('ket');

    $data = array(
      'nama_brand_printer' => $namaBrand,
      'type_printer'       => $type_printer,
      'keterangan'         => $keterangan
    );
    $this->m_merk->insert($data, 'merk_printer');
    if($data > 1 ){
      echo $this->session->set_flashdata('printer', 'Data Printer Berhasil Ditambah');
      redirect(base_url('admin/merk/merkprinter') );
    }else{
      echo $this->session->set_flashdata('printer', 'Ada Kesalahan');
      redirect(base_url('admin/merk/merkprinter') );
    }
  }
  function deleteprinter($id)
  {
    $where = array('id_printer' => $id);
    $this->m_merk->delete($where, 'merk_printer');
    echo $this->session->set_flashdata('printer', 'Data Printer Berhasil Dihapus');
    redirect(base_url('admin/merk/merkprinter') );
  }
  function editprinter($id)
  {
    if($this->session->userdata('status') != 'login'){
      redirect(base_url('admin/auth') );
    }
    $where = array('id_printer' => $id );
    $data['printer'] = $this->m_merk->edit($where, 'merk_printer')->result();
    $this->load->view('admin/view_editprinter', $data);
  }
  function updateprinter()
  {
    $id           = $this->input->post('id_printer');
    $namaBrand    = $this->input->post('nama_brand');
    $type_printer = $this->input->post('type');
    $keterangan   = $this->input->post('ket');

    $data = array(
      'nama_brand_printer' => $namaBrand,
      'type_printer' => $type_printer,
      'keterangan' => $keterangan
    );

    $where = array('id_printer' => $id );

    $this->m_merk->update($where, $data, 'merk_printer');
    if($data > 0 ){
      echo $this->session->set_flashdata('printer', 'Berhasil Merubah Data');
      redirect(base_url('admin/merk/merkprinter') );
    }else{
      echo $this->session->set_flashdata('printer', 'Ada Kesalahan');
      redirect(base_url('admin/merk/merkprinter') );
    }
  }
  //------------------- merk Scanner ------------------------------->
  function merkscanner()
  {
    $data['title'] = 'Merk Printer';
    $this->load->view('include/back/header', $data);

    $data['scanner'] = $this->m_merk->getAllScanner()->result();
    $this->load->view('admin/view_merkscanner',$data);
    $this->load->view('include/back/footer');
  }
  function addscanner()
  {
    $namaBrand = $this->input->post('nama_brand');
    $type_scanner = $this->input->post('type');
    $keterangan = $this->input->post('ket');

    $data = array(
      'nama_brand_scanner' => $namaBrand,
      'type_scanner'       => $type_scanner,
      'keterangan'         => $keterangan
    );

    $this->m_merk->insert($data, 'merk_scanner');
    if($data > 0){
      echo $this->session->set_flashdata('scanner', 'Data Berhasil Ditambahkan');
      redirect(base_url('admin/merk/merkscanner') );
    }else{
      echo $this->session->set_flashdata('scanner', 'Ada Kesalahan');
      redirect(base_url('admin/merk/merkscanner') );
    }

  }
  function deletescanner($id)
  {
    $where = array('id_scanner' => $id);
    $this->m_merk->delete($where,'merk_scanner');
    echo $this->session->set_flashdata('scanner' ,'Data Berhasil Dihapus');
    redirect(base_url('admin/merk/merkscanner') );
  }
  function editscanner($id)
  {
    $where = array('id_scanner' => $id );
    $data['scanner'] = $this->m_merk->edit($where, 'merk_scanner')->result();
    $this->load->view('admin/view_editscanner', $data);
  }
  function updatescanner()
  {
    $id           = $this->input->post('id_scanner');
    $namaBrand    = $this->input->post('nama_brand');
    $type_scanner = $this->input->post('type');
    $keterangan   = $this->input->post('ket');

    $data = array(
      'nama_brand_scanner' => $namaBrand,
      'type_scanner'       => $type_scanner,
      'keterangan'         => $keterangan
    );

    $where = array(
      'id_scanner' => $id
    );
    $this->m_merk->update($where, $data, 'merk_scanner');
    if($data>1){
      echo $this->session->set_flashdata('scanner', 'Data Berhasil Dirubah');
      redirect(base_url('admin/merk/merkscanner') );
    }else{
      echo $this->session->set_flashdata('scanner', 'Ada Kesalahan');
      redirect(base_url('admin/merk/merkscanner') );
    }

  }



}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komputer extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->model(array('m_unitpegawai','m_merk','m_pegawai') );
    if($this->session->userdata('status') != 'loginactive' ){
      redirect('login');
    }
  }
  function index()
  {
    $data['title'] = 'Data Komputer';
    $this->load->view('include/front/header_komputer', $data);

    //-------------------------------------------------------------------------->
    $data['total_mersel']        = $this->m_unitpegawai->hitungKomMersel();
    $data['total_merut']         = $this->m_unitpegawai->hitungKomMerut();
    $data['total_all']           = $this->m_unitpegawai->hitungAllKom();
    $data['total_nonaktif']      = $this->m_unitpegawai->hitungKomTidakterpakai();
    //-------------------------------------------------------------------------->
    $data['ruangan']      = $this->m_merk->getAllRuangan()->result();
    $data['unitpegawai']  = $this->m_unitpegawai->getAllunitpegawai()->result();
    $data['pegawai']      = $this->m_pegawai->getallpegawai()->result();
    $data['cpu']          = $this->m_merk->getAllCpu()->result();
    $data['printer']      = $this->m_merk->getAllPrinter()->result();
    $data['monitor']      = $this->m_merk->getAllMonitor()->result();
    $data['scanner']      = $this->m_merk->getAllScanner()->result();
    $data['gedung']       = $this->m_merk->getAll('Gedung')->result();
    //-------------------------------------------------------------------------->
    $this->load->view('view_komputer', $data);
    $this->load->view('include/front/footer');
  }
  function addunit()
  {
    $ruangan          = $this->input->post('penempatan');
    $pegawai          = $this->input->post('pegawai');
    $gedung           = $this->input->post('gedung');
    $pc               = $this->input->post('pc');
    $inven_pc         = $this->input->post('inven_pc');
    $thn_pc           = $this->input->post("thn_pc");
    $ram              = $this->input->post("ram");
    $hardisk          = $this->input->post("hardisk");
    $monitor          = $this->input->post('monitor');
    $inven_monitor    = $this->input->post("inven_monitor");
    $thn_monitor      = $this->input->post('thn_monitor');
    $printer          = $this->input->post('printer');
    $inven_printer    = $this->input->post('inven_printer');
    $thn_printer      = $this->input->post('thn_printer');
    $scanner          = $this->input->post('scanner');
    $inven_scanner    = $this->input->post('inven_scanner');
    $thn_scanner      = $this->input->post("thn_scanner");
    $status           = $this->input->post('status');

    $data = array(
      'id_penempatan'          => $ruangan,
      'id_pegawai'             => $pegawai,
      'id_gedung'              => $gedung,
      'id_pc'                  => $pc,
      'no_inventaris_pc'       => $inven_pc,
      'thn_pc'                 => $thn_pc,
      'ram'                    => $ram,
      'hardisk'                => $hardisk,
      'id_monitor'             => $monitor,
      'no_inventaris_monitor'  => $inven_monitor,
      'thn_monitor'            => $thn_monitor,
      'id_printer'             => $printer,
      'no_inventaris_printer'  => $inven_printer,
      'thn_printer'            => $thn_printer,
      'id_scanner'             => $scanner,
      'no_inventaris_scanner'  => $inven_scanner,
      'thn_scanner'            => $thn_scanner,
      'status'                 => $status
    );
          $this->m_merk->insert($data, 'unit_pegawai');
          if($data>0){
            echo $this->session->set_flashdata('notifinsert', 'Berhasil Menambahkan Data Komputer');
            redirect(base_url('komputer') );
          }else{
            echo $this->session->set_flashdata('notifinsert', 'Ada Kesalahan');
            redirect(base_url('komputer'));
          }
  }
  function detailunit($id)
  {
    $data['title'] = 'Detail Unit ';
    $this->load->view('include/front/header_komputer', $data);

    $where = array('id_unit' => $id );
    $data['unitdetail'] = $this->m_unitpegawai->getOneunit($where)->result();
    $this->load->view('view_detailunit', $data);
    $this->load->view('include/front/footer');
  }
  function editunit($id)
  {
    $data['title'] = 'Edit Data Komputer';
    $this->load->view('include/front/header_komputer', $data);

    //------------------------------------------------------------------------//
    $where = array('id_unit' => $id);
    $data['editunit'] = $this->m_unitpegawai->getOneunit($where)->result();
    //------------------------------------------------------------------------//
    $data['ruangan']  = $this->m_merk->getAllRuangan()->result();
    $data['gedung']   = $this->m_merk->getAll('Gedung')->result();
    $data['pegawai']  = $this->m_pegawai->getallpegawai()->result();
    $data['cpu']      = $this->m_merk->getAllCpu()->result();
    $data['monitor']  = $this->m_merk->getAllMonitor()->result();
    $data['printer']  = $this->m_merk->getAllPrinter()->result();
    $data['scanner']  = $this->m_merk->getAllScanner()->result();
    //------------------------------------------------------------------------//
    $this->load->view('view_editunit', $data);
    $this->load->view('include/front/footer');
  }
  function updateunit()
  {
    $id               = $this->input->post('id_unit');
    $ruangan          = $this->input->post('penempatan');
    $pegawai          = $this->input->post('pegawai');
    $gedung           = $this->input->post('gedung');
    $pc               = $this->input->post('pc');
    $inven_pc         = $this->input->post('inven_pc');
    $thn_pc           = $this->input->post("thn_pc");
    $ram              = $this->input->post("ram");
    $hardisk          = $this->input->post("hardisk");
    $monitor          = $this->input->post('monitor');
    $inven_monitor    = $this->input->post("inven_monitor");
    $thn_monitor      = $this->input->post('thn_monitor');
    $printer          = $this->input->post('printer');
    $inven_printer    = $this->input->post('inven_printer');
    $thn_printer      = $this->input->post('thn_printer');
    $scanner          = $this->input->post('scanner');
    $inven_scanner    = $this->input->post('inven_scanner');
    $thn_scanner      = $this->input->post("thn_scanner");
    $status           = $this->input->post('status');

    $data = array(
      'id_penempatan'          => $ruangan,
      'id_pegawai'             => $pegawai,
      'id_gedung'              => $gedung,
      'id_pc'                  => $pc,
      'no_inventaris_pc'       => $inven_pc,
      'thn_pc'                 => $thn_pc,
      'ram'                    => $ram,
      'hardisk'                => $hardisk,
      'id_monitor'             => $monitor,
      'no_inventaris_monitor'  => $inven_monitor,
      'thn_monitor'            => $thn_monitor,
      'id_printer'             => $printer,
      'no_inventaris_printer'  => $inven_printer,
      'thn_printer'            => $thn_printer,
      'id_scanner'             => $scanner,
      'no_inventaris_scanner'  => $inven_scanner,
      'thn_scanner'            => $thn_scanner,
      'status'                 => $status
    );

    $where = array(
      'id_unit' => $id
    );
    $this->m_merk->update($where, $data, 'unit_pegawai');
    if($data > 0 ){
      echo $this->session->set_flashdata('notifdelete', 'Data Unit Berhasil Dirubah');
      redirect(base_url('komputer/detailunit/'.$id) );
    }else{
      echo $this->session->set_flashdata('notifdelete', 'Ada Kesalahan');
      redirect(base_url('komputer') );
    }
  }

  function mersel()
  {
    $data['title'] = 'Data Komputer Merdeka Selatan';
    $this->load->view('include/front/header_komputer', $data);

    $data['total_mersel']        = $this->m_unitpegawai->hitungKomMersel();
    $data['total_merut']         = $this->m_unitpegawai->hitungKomMerut();
    $data['total_all']           = $this->m_unitpegawai->hitungAllKom();
    $data['total_nonaktif']      = $this->m_unitpegawai->hitungKomTidakterpakai();

        $data['datamersel'] = $this->m_unitpegawai->getKomMersel()->result();
        $this->load->view('view_mersel', $data);
        $this->load->view('include/front/footer');
  }
  function merut()
  {
    $data['title'] = 'Data Komputer Merdeka Utara';
    $this->load->view('include/front/header_komputer', $data);

    $data['total_mersel']        = $this->m_unitpegawai->hitungKomMersel();
    $data['total_merut']         = $this->m_unitpegawai->hitungKomMerut();
    $data['total_all']           = $this->m_unitpegawai->hitungAllKom();
    $data['total_nonaktif']      = $this->m_unitpegawai->hitungKomTidakterpakai();

        $data['datamerut'] = $this->m_unitpegawai->getKomMerut()->result();
        $this->load->view('view_merut', $data);
        $this->load->view('include/front/footer');
  }
  function tidakterpakai()
  {
    $data['title'] = 'Data Tidak Terpakai';
    $this->load->view('include/front/header_komputer', $data);

    $data['total_mersel']        = $this->m_unitpegawai->hitungKomMersel();
    $data['total_merut']         = $this->m_unitpegawai->hitungKomMerut();
    $data['total_all']           = $this->m_unitpegawai->hitungAllKom();
    $data['total_nonaktif']      = $this->m_unitpegawai->hitungKomTidakterpakai();

    $data['tidakterpakai'] = $this->m_unitpegawai->getKomTdkterpakai()->result();
    $this->load->view('view_tidakterpakai', $data);
    $this->load->view('include/front/footer');
  }

}

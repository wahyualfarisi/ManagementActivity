<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_unitpegawai extends CI_Model{
  function getallunitpegawai()
  {
    $this->db->select('*');
    $this->db->from('unit_pegawai');
    $this->db->join('pegawai','pegawai.id_pegawai = unit_pegawai.id_pegawai');
    $this->db->join('penempatan','penempatan.id_penempatan = unit_pegawai.id_penempatan');
    $this->db->join('Gedung', 'Gedung.id_gedung = unit_pegawai.id_gedung');
    $this->db->join('merk_pc', 'merk_pc.id_pc = unit_pegawai.id_pc');
    $this->db->join('merk_printer','merk_printer.id_printer = unit_pegawai.id_printer');
    $this->db->join('merk_scanner','merk_scanner.id_scanner = unit_pegawai.id_scanner');
    $this->db->join('merk_monitor','merk_monitor.id_monitor = unit_pegawai.id_monitor');

    return $this->db->get();
  }
  function getOneunit($where)
  {
    $this->db->select('*');
    $this->db->from('unit_pegawai');
    $this->db->join('pegawai','pegawai.id_pegawai = unit_pegawai.id_pegawai');
    $this->db->join('penempatan','penempatan.id_penempatan = unit_pegawai.id_penempatan');
    $this->db->join('merk_pc', 'merk_pc.id_pc = unit_pegawai.id_pc');
    $this->db->join('merk_printer','merk_printer.id_printer = unit_pegawai.id_printer');
    $this->db->join('merk_scanner','merk_scanner.id_scanner = unit_pegawai.id_scanner');
    $this->db->join('merk_monitor','merk_monitor.id_monitor = unit_pegawai.id_monitor');
    $this->db->where($where);

    return $this->db->get();
  }
  function getKomMersel()
  {
    $this->db->select('*');
    $this->db->from('unit_pegawai');
    $this->db->join('pegawai','pegawai.id_pegawai = unit_pegawai.id_pegawai');
    $this->db->join('penempatan','penempatan.id_penempatan = unit_pegawai.id_penempatan');
    $this->db->join('Gedung', 'Gedung.id_gedung= unit_pegawai.id_gedung');
    $this->db->join('merk_pc', 'merk_pc.id_pc = unit_pegawai.id_pc');
    $this->db->join('merk_printer','merk_printer.id_printer = unit_pegawai.id_printer');
    $this->db->join('merk_scanner','merk_scanner.id_scanner = unit_pegawai.id_scanner');
    $this->db->join('merk_monitor','merk_monitor.id_monitor = unit_pegawai.id_monitor');
    $this->db->where('lokasi','mersel');
    $this->db->where('status','aktif');

    return $this->db->get();
  }
  function getKomTdkterpakai()
  {
    $this->db->select('*');
    $this->db->from('unit_pegawai');
    $this->db->join('pegawai','pegawai.id_pegawai = unit_pegawai.id_pegawai');
    $this->db->join('penempatan','penempatan.id_penempatan = unit_pegawai.id_penempatan');
    $this->db->join('Gedung', 'Gedung.id_gedung=unit_pegawai.id_gedung');
    $this->db->join('merk_pc', 'merk_pc.id_pc = unit_pegawai.id_pc');
    $this->db->join('merk_printer','merk_printer.id_printer = unit_pegawai.id_printer');
    $this->db->join('merk_scanner','merk_scanner.id_scanner = unit_pegawai.id_scanner');
    $this->db->join('merk_monitor','merk_monitor.id_monitor = unit_pegawai.id_monitor');
    $this->db->where('status','nonaktif');

    return $this->db->get();
  }
  function getKomMerut()
  {
    $this->db->select('*');
    $this->db->from('unit_pegawai');
    $this->db->join('pegawai','pegawai.id_pegawai = unit_pegawai.id_pegawai');
    $this->db->join('penempatan','penempatan.id_penempatan = unit_pegawai.id_penempatan');
    $this->db->join('Gedung', 'Gedung.id_gedung=unit_pegawai.id_gedung');
    $this->db->join('merk_pc', 'merk_pc.id_pc = unit_pegawai.id_pc');
    $this->db->join('merk_printer','merk_printer.id_printer = unit_pegawai.id_printer');
    $this->db->join('merk_scanner','merk_scanner.id_scanner = unit_pegawai.id_scanner');
    $this->db->join('merk_monitor','merk_monitor.id_monitor = unit_pegawai.id_monitor');
    $this->db->where('lokasi','merut');
    $this->db->where('status','aktif');

    return $this->db->get();
  }

  function hitungKomMersel()
  {
    $query = $this->db->query("SELECT * FROM unit_pegawai,penempatan,gedung WHERE penempatan.id_penempatan=unit_pegawai.id_penempatan AND Gedung.id_gedung=unit_pegawai.id_gedung AND lokasi='mersel' AND status='aktif' ");
    $total = $query->num_rows();
    return $total;
  }
  function hitungKomMerut()
  {
    $query = $this->db->query("SELECT * FROM unit_pegawai,penempatan,gedung WHERE penempatan.id_penempatan=unit_pegawai.id_penempatan AND Gedung.id_gedung=unit_pegawai.id_gedung AND lokasi='merut' AND status='aktif' ");
    $total = $query->num_rows();
    return $total;
  }
  function hitungAllKom()
  {
    $query = $this->db->query("SELECT * FROM unit_pegawai");
    $total = $query->num_rows();
    return $total;
  }
  function hitungKomTidakterpakai()
  {
    $query = $this->db->query("SELECT * FROM unit_pegawai WHERE status='nonaktif' ");
    $total = $query->num_rows();
    return $total;
  }
}

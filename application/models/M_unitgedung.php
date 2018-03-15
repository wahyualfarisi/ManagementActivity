<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_unitgedung extends CI_Model{
  function getUnitGedung($gedung)
  {
      $this->db->select('*');
      $this->db->from('unit_pegawai');
      $this->db->join('pegawai','pegawai.id_pegawai = unit_pegawai.id_pegawai');
      $this->db->join('penempatan','penempatan.id_penempatan = unit_pegawai.id_penempatan');
      $this->db->join('Gedung', 'gedung.id_gedung=unit_pegawai.id_gedung');
      $this->db->join('merk_pc', 'merk_pc.id_pc = unit_pegawai.id_pc');
      $this->db->join('merk_printer','merk_printer.id_printer = unit_pegawai.id_printer');
      $this->db->join('merk_scanner','merk_scanner.id_scanner = unit_pegawai.id_scanner');
      $this->db->join('merk_monitor','merk_monitor.id_monitor = unit_pegawai.id_monitor');
      $this->db->where('Gedung', $gedung);

      return $this->db->get();
  }
  function printAllgedungmersel()
  {
      $this->db->select('*');
      $this->db->from('unit_pegawai');
      $this->db->join('pegawai','pegawai.id_pegawai = unit_pegawai.id_pegawai');
      $this->db->join('penempatan','penempatan.id_penempatan = unit_pegawai.id_penempatan');
      $this->db->join('Gedung', 'gedung.id_gedung=unit_pegawai.id_gedung');
      $this->db->join('merk_pc', 'merk_pc.id_pc = unit_pegawai.id_pc');
      $this->db->join('merk_printer','merk_printer.id_printer = unit_pegawai.id_printer');
      $this->db->join('merk_scanner','merk_scanner.id_scanner = unit_pegawai.id_scanner');
      $this->db->join('merk_monitor','merk_monitor.id_monitor = unit_pegawai.id_monitor');
      $this->db->where('lokasi','mersel');
      $this->db->order_by('nama_penempatan', 'asc');
      $this->db->order_by('gedung', 'asc');

      return $this->db->get();
  }

  function hitungGedung1Lantai2()
  {
    $query = $this->db->query("SELECT * FROM unit_pegawai,penempatan,gedung WHERE penempatan.id_penempatan=unit_pegawai.id_penempatan AND gedung.id_gedung=unit_pegawai.id_gedung AND gedung='Gedung 1 Lantai 2' ");
    $total = $query->num_rows();
    return $total;
  }

  function hitungGedung1Lantai3()
  {
    $query = $this->db->query("SELECT * FROM unit_pegawai,penempatan WHERE penempatan.id_penempatan=unit_pegawai.id_penempatan AND gedung='Gedung 1 Lantai 3' ");
    $total = $query->num_rows();
    return $total;
  }

  function hitungGedung1Lantai4()
  {
    $query = $this->db->query("SELECT * FROM unit_pegawai,penempatan WHERE penempatan.id_penempatan=unit_pegawai.id_penempatan AND gedung='Gedung 1 Lantai 4' ");
    $total = $query->num_rows();
    return $total;
  }

  function hitungGedung1Lantai5()
  {
    $query = $this->db->query("SELECT * FROM unit_pegawai,penempatan WHERE penempatan.id_penempatan=unit_pegawai.id_penempatan AND gedung='Gedung 1 Lantai 5' ");
    $total = $query->num_rows();
    return $total;
  }

}

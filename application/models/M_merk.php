<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_merk extends CI_Model{

  function getAllCpu()
  {
    return $this->db->get('merk_pc');
  }
  function getAllMonitor()
  {
    return $this->db->get('merk_monitor');
  }
  function getAllPrinter()
  {
    return $this->db->get('merk_printer');
  }
  function getAllScanner()
  {
    return $this->db->get('merk_scanner');
  }
  function getAllRuangan()
  {
    return $this->db->get('penempatan');
  }
  function getAll($table)
  {
    return $this->db->get($table);
  }
  function getAllGedungMersel()
  {
    return $this->db->get_where('gedung', array('lokasi' => 'mersel') );
  }
  function getAllGedungMerut()
  {
    return $this->db->get_where('gedung', array('lokasi' => 'merut') );
  }

  

  function insert($data, $table)
  {
    $this->db->insert($table,$data);
  }

  function delete($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
  function edit($where, $table)
  {
    return $this->db->get_where($table, $where);
  }
  function update($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }
}

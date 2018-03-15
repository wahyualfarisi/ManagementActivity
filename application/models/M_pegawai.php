<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model{

  private $table = 'pegawai';

  function getAllpegawai()
  {
    return $this->db->get($this->table);
  }
  function insert($data)
  {
    $this->db->insert($this->table, $data);
  }
  function delete($where)
  {
    $this->db->where($where);
    $this->db->delete($this->table);
  }
  function edit($where)
  {
    return $this->db->get_where($this->table, $where);
  }
  function update($where, $data)
  {
    $this->db->where($where);
    $this->db->update($this->table, $data);
  }
}

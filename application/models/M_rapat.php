<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rapat extends CI_Model{

  function GetAllrapat()
  {
    $query = $this->db->query("SELECT * FROM data_rapat,lokasi_rapat,pengguna WHERE lokasi_rapat.id_lokasi=data_rapat.id_lokasi AND pengguna.id_pengguna=data_rapat.id_pengguna ORDER BY tanggal desc ");
    return $query;
  }
  function getAll($table)
  {
    return $this->db->get($table);
  }
  function getAllrapatMersel()
  {
    $query = $this->db->query("SELECT * FROM data_rapat, lokasi_rapat, pengguna WHERE lokasi_rapat.id_lokasi=data_rapat.id_lokasi AND pengguna.id_pengguna=data_rapat.id_pengguna AND lokasi = 'mersel' ORDER BY tanggal desc ");
    return $query;
  }
  function getAllrapatToday()
  {
    $query = $this->db->query("SELECT * FROM data_rapat, lokasi_rapat, pengguna WHERE lokasi_rapat.id_lokasi=data_rapat.id_lokasi AND pengguna.id_pengguna=data_rapat.id_pengguna AND tanggal=curdate() ORDER BY id_rapat desc ");
    return $query;
  }
  function getAllrapatMerut()
  {
    return $this->db->query("SELECT * FROM data_rapat, lokasi_rapat, pengguna WHERE lokasi_rapat.id_lokasi=data_rapat.id_lokasi AND pengguna.id_pengguna=data_rapat.id_pengguna AND lokasi='merut' ORDER BY tanggal desc ");
  }
}

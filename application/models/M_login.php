<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

  private $table = 'administrator';

  function cek_login($where)
  {
    return $this->db->get_where($this->table, $where);
  }
  function cek_loginuser($where)
  {
    return $this->db->get_where('userdata', $where);
  }

}

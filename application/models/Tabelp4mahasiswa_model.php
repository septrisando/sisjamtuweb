<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelp4mahasiswa_model extends CI_Model
{
    private $_table = "tabel_8f1_2"; //nama tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}
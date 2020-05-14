<?php

class Pengguna_model extends CI_Model
{
    private $nama_tabel = "users";

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        return $this->db->get('display_users')->result_array();
    }

    public function get($id)
    {
        return $this->db->get_where($this->nama_tabel, ['id' => $id])->row_array();
    }

    public function get_unit_list()
    {
        return $this->db->get_where($this->nama_tabel, ['role'=>4])->result_array();
    }
}
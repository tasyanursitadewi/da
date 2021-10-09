<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imunisasi extends CI_Model{
    public function getDataImunisasi(){
        $this->db->select('*');
        $this->db->from('data_imunisasi');
        $query = $this->db->get();
        return $query->result();
    }
}
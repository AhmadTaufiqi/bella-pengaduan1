<?php

class M_pgn extends CI_Model {
 public function get_data()
 {
 return $this->db->get('tb_pgn')->result_array();
 }
}
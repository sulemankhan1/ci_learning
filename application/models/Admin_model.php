<?php

class Admin_model extends CI_Model {


  public function getAllPatients() {
    return $this->db->get('patients')->result();
  }

  public function addPatient($arr) {
    return $this->db->insert('patients', $arr);
  }
}

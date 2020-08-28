<?php

class Admin_model extends CI_Model {


  public function getAllPatients() {
    return $this->db->get('patients')->result();
  }

  public function addPatient($arr) {
    return $this->db->insert('patients', $arr);
  }

  public function updatePatient($arr, $id) {
    $this->db->set($arr);
    $this->db->where('id', $id);
    return $this->db->update('patients');
  }

  public function getPatientById($id) {
    return $this->db->get_where('patients', array('id' => $id))->row_array();
  }

  public function getPatientByEmail($email) {
    return $this->db->get_where('patients', array('email' => $email))->row_array();
  }

  public function deletePatientById($id) {
    return $this->db->delete('patients', array('id' => $id));
  }
}

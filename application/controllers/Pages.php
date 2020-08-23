<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

  public function index() {



  }

  public function update($where_column, $where_value, $update_column, $update_value, $tbl_name) {
    $this->db->set($update_column, $update_value);
    $this->db->where_in($where_column, $where_value);
    $this->db->update($tbl_name);
  }

  public function joins() {
    $this->db->select("users.name, SUM(salaries.salary) as salary");
    $this->db->from("salaries");
    $this->db->join('users', 'users.id = salaries.user_id AND users.is_deleted = 0');
    $this->db->group_by("salaries.user_id");
    $record = $this->db->get()->result();

     echo "<pre>";
     print_r($record);
     die();
  }

  public function delete() {
    // delete
    // delete from 'pages' where id = 1;
    $this->db->where('id', 3);
    $this->db->delete('salaries');
  }

}

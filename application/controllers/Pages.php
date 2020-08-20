<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

  public function index($name="") {

    // $result = $this->db->get_where('salaries', array('salary' => 4000, 'id' => 5))->result();

    $this->db->select_max("salaries.salary");
    $this->db->select("salaries.user_id");
    $this->db->from("salaries");
    $record = $this->db->get()->result();

    echo $this->db->last_query();

  }

  public function insert() {
    $data = array(
      array(
        'user_id' => 1,
        'salary' => 5000
      ),
      array(
        'user_id' => 1,
        'salary' => 6000
      ),
      array(
        'user_id' => 1,
        'salary' => 3000
      ),
      array(
        'user_id' => 2,
        'salary' => 3500
      ),
      array(
        'user_id' => 2,
        'salary' => 4000
      ),
    );
    $this->db->insert_batch('salaries', $data);
  }

}

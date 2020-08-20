<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

  public function index($name="") {
    if($name == "") {
      redirect("/");
    }

    $this->db->select("*");
    $this->db->from('pages');
    $this->db->where('name', $name);
    $page = $this->db->get()->row_array();

    $this->load->view('pages/page', array('page' => $page));
  }

}

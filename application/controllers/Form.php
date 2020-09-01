<?php

class Form extends CI_Controller {

  public function index() {
    $this->load->helper('form');

    $this->load->view('form/form1');
  }

  public function save() {
    if($this->input->post()) {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == FALSE) {
          $this->load->view('form/form1');
        } else {
          // save to database

          redirect('form/success');
        }
    }
  }

  public function success() {
    echo "Success!";
  }
}

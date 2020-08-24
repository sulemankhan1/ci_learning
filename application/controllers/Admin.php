<?php

class Admin extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Admin_model', 'am');
  }

  public function index() {
    $this->load->view('dashboard');
  }

  public function add_patient() {
    if($this->input->post()) {

      $data = array(
        'name' => $this->input->post('name', TRUE),
        'email' => $this->input->post('email', TRUE),
        'phone' => $this->input->post('phone', TRUE),
        'address' => $this->input->post('address', TRUE),
        'notes' => $this->input->post('notes', TRUE),
      );

      $this->am->addPatient($data);
      redirect('admin/all_patients');

    } else {
      $this->load->view('patients/add_patient');
    }
  }

  public function all_patients() {

    $patients = $this->am->getAllPatients();
    $this->load->view('patients/all_patients', array(
      'patients' => $patients
    ));
  }

  public function edit_patient() {

  }

  public function delete_patient() {

  }

}

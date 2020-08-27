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
    $this->load->view('patients/add_patient');
  }

  public function save_patient() {
    if($this->input->post()) {
      $id = $this->input->post('id', TRUE);
      $data = array(
        'name' => $this->input->post('name', TRUE),
        'email' => $this->input->post('email', TRUE),
        'phone' => $this->input->post('phone', TRUE),
        'address' => $this->input->post('address', TRUE),
        'notes' => $this->input->post('notes', TRUE),
      );

      if($id == "") {
        $this->am->addPatient($data);
      } else {
        $this->am->updatePatient($data, $id);
      }
      redirect('admin/all_patients');
    }
  }

  public function all_patients() {

    $patients = $this->am->getAllPatients();
    $this->load->view('patients/all_patients', array(
      'patients' => $patients
    ));
  }

  public function edit_patient($id) {

    $this->load->view('patients/add_patient', array(
      'patient' => $this->am->getPatientById($id),
    ));

  }

  public function delete_patient($id) {
    $resp = $this->am->deletepatientById($id);
    if($resp) {
      redirect('admin/all_patients');
    }
  }

}

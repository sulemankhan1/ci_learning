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
      // collecting form data
      $id = $this->input->post('id', TRUE);
      $current_img = $this->input->post('current_img', TRUE);
      $data = array(
        'name' => $this->input->post('name', TRUE),
        'email' => $this->input->post('email', TRUE),
        'phone' => $this->input->post('phone', TRUE),
        'address' => $this->input->post('address', TRUE),
        'notes' => $this->input->post('notes', TRUE),
      );

      // Validating form data
      $err_msg = "";
      // check fi image is not provided
      if($_FILES['image']['name'] == "") {
        if($current_img == "") {
          $err_msg = "You have to provide an image first!";
        }
      }

      // check if name is less than 3
      if(strlen($data['name']) < 3) {
        $err_msg = "Name must be greater than or equal to 3 characters";
      }

      // check if any of the field is not provided
      if($data['name'] == "" || $data['email'] == "" || $data['phone'] == "" || $data['address'] == "" || $data['notes'] == "") {
        $err_msg = "Please provide all fields first!";
      }
      // check if email already exists (for add form submission only)
      if($id == "") {
        $record = $this->am->getPatientByEmail($data['email']);
        if(!empty($record)) {
          $err_msg = "This email already exists";
        }
      }

      // upload the image
      if($_FILES['image']['name'] != "") {
        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$_FILES['image']['name']);
        $data['image'] = 'uploads/'.$_FILES['image']['name'];
      }

      // if errors found redirect to form
      if($err_msg != "") {
        $this->session->set_flashdata('response', array(
          'error' => $err_msg,
          'data' => $data,
        ));
        if($id == "") { // add
          redirect('admin/add_patient');
        } else { // update
          redirect('admin/edit_patient/'.$id);
        }
      }

      // check if form is submitted for addition
      if($id == "") {
        $this->am->addPatient($data);
      } else { // form is submitted for updation
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

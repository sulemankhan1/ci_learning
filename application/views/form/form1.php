<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="<?=base_url('assets/bootstrap.min.css')?>" >
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br>
            <div class="card">
              <div class="card-header">
                <h1>User Submission form</h1>
              </div>
              <div class="card-body">
                <?php
                  echo validation_errors("<div class='alert alert-danger'>", '</div>');

                  echo form_open('form/save', array(
                    'class' => 'form',
                  ));
                  ?>

                  <div class="form-group">
                    <?php
                      echo form_label('Name');
                      echo form_input('name', '', array(
                        'class' => 'form-control mysecondclass',
                      ));
                    ?>
                  </div>

                  <div class="form-group">
                    <?php
                      echo form_label('Email');
                      echo form_input('email', '', array(
                        'type' => 'email',
                        'class' => 'form-control',
                      ));
                    ?>
                  </div>


                  <div class="form-group">
                    <?php
                      echo form_label('Password');
                      echo form_input('password', '', array(
                        'class' => 'form-control',
                        'type' => 'password'
                      ));
                     ?>
                  </div>

                  <div class="form-group">
                    <?php
                      echo form_label('Select Country');
                      $options = array(
                        'PK' => 'Pakistan',
                        'USA' => 'United states',
                        'AFG' => 'Afghanistan'
                      );
                      $attributes = array(
                        'class' => 'form-control'
                      );
                      echo form_dropdown('country', $options, 'AFG',  $attributes);
                     ?>
                  </div>

                  <div class="form-group">
                    <?php
                      echo form_label('I own');
                      $options = array(
                        'mobile' => 'Mobile',
                        'laptop' => 'Laptop',
                        'car' => 'Car'
                      );
                      $attributes = array(
                        'class' => 'form-control'
                      );
                      echo form_multiselect('country', $options, array('mobile', 'laptop'),  $attributes);
                     ?>
                  </div>

                  <div class="form-group">
                    <?php
                    echo form_checkbox('tos_agree', '', array(
                      'class' => 'form-control',
                      'checked' => 'false'
                    ));
                    echo form_label('I Agree');
                     ?>
                  </div>

                  <div class="form-group">
                    <?php
                    echo form_radio('gender', '', array(
                      'class' => 'form-control',
                    ));
                    echo form_label('Male');
                    echo form_radio('gender', '', array(
                      'class' => 'form-control',
                    ));
                    echo form_label('Female');
                     ?>
                  </div>

                  <div class="form-group">
                    <?php
                    echo form_label('Address');
                    echo form_textarea('address', 'asdasde', array(
                      'class' => 'form-control'
                    ))
                     ?>
                  </div>

                   <div class="form-group">
                     <?php
                      echo form_submit('submit', 'Save user', array(
                        'class' => 'btn btn-primary'
                      ));
                    ?>
                   </div>

                  <?php echo form_close(); ?>
              </div>
            </div>
        </div>
      </div>
    </div>


  </body>
</html>

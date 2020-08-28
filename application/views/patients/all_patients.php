<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All Patients</title>
  </head>
  <body>

    <h1>All Patients Records</h1>
    <a href="<?=site_url('admin')?>">Go Back</a>
    <a href="<?php echo site_url('admin/add_patient')?>">Add Patient</a>
    <br><br>
    <table border="1" cellpadding="5">
      <tr>
        <th>Id</th>
        <th>Image</th>
        <th>Patient Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Prescription</th>
        <th>Notes</th>
        <th>Action</th>
      </tr>
      <?php foreach($patients as $patient) { ?>
        <tr>
          <td><?=$patient->id?></td>
          <td>
            <?php if(file_exists($patient->image)){ ?>
              <img src="<?=base_url($patient->image)?>" width="100">
            <?php } ?>
          </td>
          <td><?=$patient->name?></td>
          <td><?=$patient->email?></td>
          <td><?=$patient->phone?></td>
          <td><?=$patient->address?></td>
          <td><?=$patient->prescription?></td>
          <td><?=$patient->notes?></td>
          <td>
            <a href="<?=site_url('admin/edit_patient/'.$patient->id)?>">Edit</a>
            <a href="<?=site_url('admin/delete_patient/'.$patient->id)?>" onclick="return confirm('Are you sure?')">Delete</a>
          </td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>

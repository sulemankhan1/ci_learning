<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Patient</title>
    <style>
      .err_msg {
        color: brown;
        font-weight: bold;
      }
    </style>
  </head>
  <body>

    <h1>Add Patient Record</h1>
    <a href="<?=site_url('admin')?>">Go Back</a>
    <br><br>

    <?php if($this->session->flashdata('response')) { ?>
      <div class="err_msg">
        <?=$this->session->flashdata('response')['error']?>
      </div>
      <?php $patient = $this->session->flashdata('response')['data']; ?>
    <?php } ?>
    <form action="<?=site_url('admin/save_patient')?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?=@$patient['id']?>">
      <?php if(@$patient['image'] != "") { ?>
        <label>Current Image</label><br />
        <img src="<?=base_url(@$patient['image'])?>" width="100"> <br />
        <input type="hidden" name="current_img" value="<?=@$patient['image']?>">
      <?php } ?>
      <label>Image</label><br />
      <input type="file" name="image" /> <br>
      <label>Name</label><br />
      <input type="text" name="name" value="<?=@$patient['name']?>" />
      <br>
      <label>Email</label><br />
      <input type="email" name="email" value="<?=@$patient['email']?>" />
      <br>
      <label>Phone</label><br />
      <input type="text" name="phone" value="<?=@$patient['phone']?>" />
      <br>
      <label>Address</label><br />
      <textarea name="address" rows="8" cols="80"><?=@$patient['address']?></textarea>
      <br>
      <label>Notes</label><br />
      <textarea name="notes" rows="8" cols="80"><?=@$patient['notes']?></textarea>
      <br>
      <input type="submit" name="submit" value="Save Patient">

      <br>
      <br>
    </form>
  </body>
</html>

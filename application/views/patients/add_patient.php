<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Patient</title>
  </head>
  <body>

    <h1>Add Patient Record</h1>
    <a href="<?=site_url('admin')?>">Go Back</a>
    <br><br>
    <form action="<?=site_url('admin/save_patient')?>" method="post">
      <input type="hidden" name="id" value="<?=@$patient['id']?>">
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

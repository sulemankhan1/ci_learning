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
    <form action="<?=site_url('admin/add_patient')?>" method="post">
      <label>Name</label><br />
      <input type="text" name="name" />
      <br>
      <label>Email</label><br />
      <input type="email" name="email" />
      <br>
      <label>Phone</label><br />
      <input type="text" name="phone" />
      <br>
      <label>Address</label><br />
      <textarea name="address" rows="8" cols="80"></textarea>
      <br>
      <label>Notes</label><br />
      <textarea name="notes" rows="8" cols="80"></textarea>
      <br>
      <input type="submit" name="submit" value="Add Patient">

      <br>
      <br>
    </form>
  </body>
</html>

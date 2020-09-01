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
                <form class="form" action="<?=site_url('form/save')?>" method="post" style="background: red;">

                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control">
                  </div>

                  <div class="form-group">
                    <input type="submit" name="submit" value="Save User" class="btn btn-primary">
                  </div>

                </form>
              </div>
            </div>
        </div>
      </div>
    </div>


  </body>
</html>

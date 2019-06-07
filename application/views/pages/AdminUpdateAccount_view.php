<?php

	if(! $this->session->userdata('username'))
	{
		redirect(base_url('admin/index'));
	}

?>

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Pesterminatr Admin</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <div class="input-group-append">
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
      </ul>
    </nav><br/>

    <div class="row">
    <div class="col s12 m4 l8">
      <div class="card"><br/>
        <div class="card-image">
        <center>
          <img src="http://localhost/project/logo/tude.JPG" style="width: 150px; height: 150px;" class="rounded-circle">
        </center>  
        </div>
        <div class="card-content">
        <form method="post" action="<?php echo base_url('Admin/updateAccount'); ?>">
         <input type="hidden" name="admin_id" class="form-control" value="<?php echo $updateAdmin[0]['admin_id']; ?>">
          <p>
             <div class="input-field col s6">
              <input id="first_name" type="text" name="txtname" class="validate" value="<?php echo $updateAdmin[0]['admin_name']; ?>">
              <label for="first_name">Admin Name</label>
            </div>

            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate" name="txtusername" value="<?php echo $updateAdmin[0]['username']; ?>">
              <label for="first_name">Admin Username</label>
            </div>

            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate" name="txtpassword" value="<?php echo $updateAdmin[0]['password']; ?>">
              <label for="first_name">Admin Password</label>
            </div>

            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate" name="txtretypepass">
              <label for="first_name">Admin Retype Password</label>
            </div>

             <div class="input-field col s6">
              <input type="submit" class="btn btn-primary" name="btnSubmit">
            </div>
          </p>
        </form>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
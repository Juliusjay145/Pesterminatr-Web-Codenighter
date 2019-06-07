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

    <div class="card" style="width: 18rem;">
	  <img class="card-img-top" src="http://localhost/project/logo/tude.jpg" height="250px;" width="250px;">
	  <div class="card-body">
	    <h3 class="card-title">
	    	<?php foreach($admins->result() as $admin): ?>
			     
			     <?php
			     	if($this->session->userdata('username') == $admin->username)
			     	{
			     		echo $admin->admin_name;
			     		$admin->admin_id;
			     	}
			     ?>

     			<?php endforeach; ?>	



	    </h3>
	    <p class="card-text"></p>
	  </div>
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item"><a href="">Dashboard</a></li>
	    <li class="list-group-item"><a href="<?php echo base_url('admin/listusers'); ?>">List of Clients</a> <span class="new badge blue"><?php echo $clients; ?></span></li>
	    <li class="list-group-item"><a href="<?php echo base_url('admin/listproviders'); ?>">List of Pest Control Provider</a> <span class="new badge blue"><?php echo $providers; ?></span></li>
	    <li class="list-group-item"><a href="">Reports</a> <span class="badge">0</span></li>
	    <li class="list-group-item"><a href="<?php echo base_url('admin/listfeedback')?>/<?php echo $admin->admin_id?>">Feedback</a> </li>
	    <li class="list-group-item"><a href="<?php echo base_url('admin/updateAdmin')?>/<?php echo $admin->admin_id?>">Manage Account</a> </li>
	  </ul>
	  <div class="card-body">
	    <a href="<?php echo base_url('admin/logout'); ?>" class="card-link">Logout</a>
	  </div>
	</div>
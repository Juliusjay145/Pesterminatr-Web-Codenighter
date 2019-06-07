<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">
      	<?php foreach($pestcontrols as $pestcontrol): ?>
			     
			     <?php
			     	if($this->session->userdata('username') == $pestcontrol['username'])
			     	{
			     		echo $pestcontrol['pestcontrol_name'];
			     	}
			     ?>

     			<?php endforeach; ?>
      </a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       
      </form>

      <!-- Navbar -->
    </nav><br/>

  <div class="row">
    <div class="col s12 m4 l8">
      <div class="card"><br/>
        <div class="card-image">
        <center>
          <img src="http://localhost/project/upload/user.png" style="width: 150px; height: 150px;" class="rounded-circle">
        </center>  
        </div>
        <div class="card-content">
        <form method="post" action="<?php echo base_url('Pestcontrol/updateAccount'); ?>">
         <input type="hidden" name="pestcontrol_id" class="form-control" value="<?php echo $update[0]['pestcontrol_id']; ?>">
          <p>
             <div class="input-field col s6">
              <input id="first_name" type="text" name="name" class="validate" value="<?php echo $update[0]['pestcontrol_name']; ?>">
              <label for="first_name">Pestcontrol Name</label>
            </div>

            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate" name="txtaddress" value="<?php echo $update[0]['pestcontrol_address']; ?>">
              <label for="first_name">Pestcontrol Address</label>
            </div>

            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate" name="txtcontact" value="<?php echo $update[0]['pestcontrol_contact']; ?>">
              <label for="first_name">Pestcontrol Contact</label>
            </div>

            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate" name="txtdetails" value="<?php echo $update[0]['pestcontrol_detail']; ?>">
              <label for="first_name">Pestcontrol Detail</label>
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
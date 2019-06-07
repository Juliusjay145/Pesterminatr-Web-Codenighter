<?php

	if(! $this->session->userdata('username'))
	{
		redirect(base_url('Clients/index'));
	}

?>



 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
  <?php foreach($clients->result() as $client): ?>
				     
				     <?php
				     	if($this->session->userdata('username') == $client->username)
				     	{
				     		//echo $client->client_contact;
				     	    $client_id = $client->client_id;
				     	}
				     ?>


	     			<?php endforeach; ?>
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Pesterminatr</a>
    <a class="navbar-brand" href="<?php echo base_url('clients/show_booking'); ?>/<?php echo $client_id ?>">

      	Transactions</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    </ul>
    <form class="form-inline my-2 my-lg-0">
    	<a class="navbar-brand" href="<?php echo base_url('clients/history_booking'); ?>/<?php echo $client_id ?>">
      	History</a>
    </form>
  </div>
</nav>
<br/>

<div class="row">
  <div class="col-3" style="background: white; "><br/>
  <center>
  <img src="http://localhost/project/logo/tude.JPG" style="width: 100px;" class="rounded-circle">
   <h3><?php foreach($clients->result() as $client): ?>
			     
			     <?php
			     	if($this->session->userdata('username') == $client->username)
			     	{
			     		echo $client->client_name;
			     	}
			     ?>

     			<?php endforeach; ?></h3>
     </center>			
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="fa fa-home"> </span> Home</a>
      <a class="nav-link" id="v-pills-providers-tab" data-toggle="pill" href="#v-pills-providers" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="fa fa-list"> </span> Pest Control Providers</a>
   
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><span class="fa fa-cog"> </span> Settings</a>
    </div>


  </div>

  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
      		<h1><center><img src="http://localhost/project/logo/logo1.png" width="250px"><br/>
      		 	An Online Service Platform for Pest Extermination and Control Services<br/>
      		 	
      		 </center></h1>
      	</div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      		<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="http://localhost/project/logo/logo.png" class="rounded-circle" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">
				    <?php foreach($clients->result() as $client): ?>
				     
				     <?php
				     	if($this->session->userdata('username') == $client->username)
				     	{
				     		echo $client->client_name;
				     	}
				     ?>

	     			<?php endforeach; ?>
				</h5>
			    <p class="card-text"><span class="fa fa-city">
			    	<?php foreach($clients->result() as $client): ?>
				     
				     <?php
				     	if($this->session->userdata('username') == $client->username)
				     	{
				     		echo $client->client_address;
				     	}
				     ?>

	     			<?php endforeach; ?>
			    </span>

			     <p class="card-text"><span class="fa fa-phone">
			    	<?php foreach($clients->result() as $client): ?>
				     
				     <?php
				     	if($this->session->userdata('username') == $client->username)
				     	{
				     		echo $client->client_contact;
				     	    $client_id = $client->client_id;
				     	}
				     ?>


	     			<?php endforeach; ?>
			    </span><br/>
			    <br/>
			  </div>
			</div>


      </div>
      <div class="tab-pane fade" id="v-pills-providers" role="tabpanel" aria-labelledby="v-pills-providers-tab">
      	<div class="container">
		<a href="<?php echo base_url('clients/show_booking'); ?>/<?php echo $client_id ?>">

      	Transactions</a>
      	<?php foreach($pestcontrols as $pestcontrol): ?>
      		<?php if($pestcontrol['status'] == 'Active'): ?>
	      	<div class="card mb-3">
				  <div class="card-body">
				  
				    <h5 class="card-title"><img src="http://localhost/project/logo/logo.png" width="100x" height="100px" class="rounded-circle"> <?php echo $pestcontrol['pestcontrol_name']; ?></h5>
				    <p class="card-text"><?php echo $pestcontrol['pestcontrol_detail']; ?></p>
				    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    <a href="<?php echo base_url(); ?>clients/show_pestcontrol/<?php echo $pestcontrol['pestcontrol_id']; ?>">Book</a><br/>
				    <a href="<?php echo base_url(); ?>clients/show_details/<?php echo $pestcontrol['pestcontrol_id']; ?>">View Details</a>
				  </div>

				  
			</div>
		<?php endif; ?>
		<?php endforeach; ?>	
		</div>
      </div>



      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
      	
      	
      	<div class="card" style="width: 18rem;">
			  <div class="card-header">
			    Account Settings
			  </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item"><span class="fa fa-user"></span> 
				  <?php foreach($clients->result() as $client): ?>
					     <?php
					     	if($this->session->userdata('username') == $client->username)
					     	{
					     		echo $client->client_name;
					     		$client_id = $client->client_id;
					     	}
					     ?>
		     	  <?php endforeach; ?>
		     	  <br/>
		     	 	<span class="fa fa-phone"></span>
			     	  <?php foreach($clients->result() as $client): ?>
					     
					     <?php
					     	if($this->session->userdata('username') == $client->username)
					     	{
					     		echo $client->client_contact;
					     	    $client_id = $client->client_id;
					     	}
					     ?>

		     			<?php endforeach; ?>
		     		<br/>
	     			<span class="fa fa-at"></span>
			     	  <?php foreach($clients->result() as $client): ?>
					     
					     <?php
					     	if($this->session->userdata('username') == $client->username)
					     	{
					     		echo $client->username;
					     	    $client_id = $client->client_id;
					     	}
					     ?>

		     			<?php endforeach; ?>

		     			<br/>
	     			<span class="fa fa-at"></span>
			     	  <?php foreach($clients->result() as $client): ?>
					     
					     <?php
					     	if($this->session->userdata('username') == $client->username)
					     	{
					     		echo $client->client_address;
					     	    $client_id = $client->client_id;
					     	}
					     ?>

		     			<?php endforeach; ?>


		     	  
			    <li class="list-group-item"><span class="fa fa-power-off"></span> <a href="<?php echo base_url('clients/index')?>">Logout</a><br/>
			      <span class="fa fa-pen-square"></span> 
			      <a href="<?php echo base_url('clients/change_password')?>/<?php echo $client_id; ?>">Change Password</a><br/>
			      <span class="fa fa-pen-square"></span> <a href="<?php echo base_url('clients/change_name')?>/<?php echo $client_id; ?>">Change Name</a><br/>
			      <span class="fa fa-pen-square"></span>
			       <a href="<?php echo base_url('clients/change_contact')?>/<?php echo $client_id; ?>">Change Contact Number</a>
			    

			    </li>

			  </ul>
		</div>
      </div>
    </div>
  </div>
</div>


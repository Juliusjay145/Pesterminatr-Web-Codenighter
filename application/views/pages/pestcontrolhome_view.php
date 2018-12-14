<?php

	if(! $this->session->userdata('username'))
	{
		redirect(base_url('PestControl/index'));
	}

?>



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
<br/>
<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="fa fa-home"> </span> Home</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="fa fa-user"> </span> Profile</a>
      <a class="nav-link" id="v-pills-providers-tab" data-toggle="pill" href="#v-pills-providers" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="fa fa-briefcase"> </span> Requested Service <span class="badge">0</span></a>
      <a class="nav-link" id="v-pills-services-tab" data-toggle="pill" href="#v-services-providers" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="fa fa-shopping-cart"> </span> Services <span class="badge">0</span></a>
      <a class="nav-link" id="v-pills-reports-tab" data-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="fa fa-list"> </span> Reports <span class="badge">0</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><span class="fa fa-cog"> </span> Settings</a>
    </div>
  </div>

  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
      		<h1><center><img src="http://localhost/project/logo/logo.png" width="500px" height="200px"><br/>
      		 	An Online Service Platform fo Pest Extermination and Control Services<br/> 
      		 	
      		 </center></h1>
      	</div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      		<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="http://localhost/project/logo/logo.png" class="rounded-circle" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">
				    	<?php foreach($pestcontrols as $pestcontrol): ?>
			     
						     <?php
						     	if($this->session->userdata('username') == $pestcontrol['username'])
			     				{
			     					echo $pestcontrol['pestcontrol_name'];
			     				}
						     ?>

		     			<?php endforeach; ?>
		     		</h5>	
		     			<span class="fa fa-home">
		     				<?php foreach($pestcontrols as $pestcontrol): ?>
			     
						     <?php
						     		if($this->session->userdata('username') == $pestcontrol['username'])
			     					{
			     						echo $pestcontrol['pestcontrol_address'];
			     					}
						     ?>

		     			<?php endforeach; ?>
		     			</span><br/>

		     			<span class="fa fa-phone">
		     				<?php foreach($pestcontrols as $pestcontrol): ?>
			     
						     <?php
						     		if($this->session->userdata('username') == $pestcontrol['username'])
			     					{
			     						echo $pestcontrol['pestcontrol_contact'];
			     					}
						     ?>

		     			<?php endforeach; ?>
		     			</span>
				    
				  </div>
			</div>	       

      </div>
      <div class="tab-pane fade" id="v-pills-providers" role="tabpanel" aria-labelledby="v-pills-providers-tab">
      	<div class="container">
      		<table class="table table-striped">
      			<tr>
      				<td>Client Name</td>
      				<td>Client Address</td>
      				<td>Service Type</td>
      				<td>Service Price</td>
      			</tr>
      		</table>
		</div>
      </div>

       <div class="tab-pane fade" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
      	<div class="container">
      		<table class="table table-striped">
      			<tr>
      				<td>Payment ID</td>
      				<td>Client Name</td>
      				<td>Service Type</td>
      				<td>Service Price</td>
      			</tr>
      		</table>
		</div>
      </div>


      <div class="tab-pane fade" id="v-services-providers" role="tabpanel" aria-labelledby="v-services-providers-tab">
      			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  			Add Service
		</button></a>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Add Services</h5><br/>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form method="POST" action="<?php echo base_url('service/addservice')?>">
		        <div class="container">
		        	<div class="form-group">
		        		<label>Service Name</label>
		        		<input type="text" name="txtservice" class="form-control">
		        		<label>Service Details</label>
		        		<textarea name="txtdetails" class="form-control" required="required"></textarea><br/>
		        		<select name="servicetype" class="form-control" required="required">
		        			<option value="General Pest Control Service">General Pest Control Service</option>
		        			<option value="Termite Pest Control Sevice">Termite Pest Control Service</option>
		        		</select>
		        		<label>Service Price</label>
		        		<input type="number" name="txtprice" class="form-control" required="required">
		        	</div>
		        </div>		
		        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save changes</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>

      		<table class="table table-striped">
      			<tr>
      				<td>Service Name</td>
      				<td>Service Detail</td>
      				<td>Service Type</td>
      				<td>Service Price</td>
      				<td>Action</td>
      			</tr>
      			<?php foreach($services->result() as $service): ?>
      				<?php foreach($pestcontrols as $pestcontrol): ?>
      					<?php 
      						if($service->pestcontrol_id == $pestcontrol['pestcontrol_id']):
      							if($pestcontrol['username'] == $this->session->userdata('username')):
      						?>
	      				<tr>
	      					<td><?php echo $service->service_name; ?></td>
	      					<td><?php echo $service->service_detail; ?></td>
	      					<td><?php echo $service->service_type; ?></td>
	      					<td><?php echo $service->service_price; ?></td>
	      					<td><a href="<?php echo base_url('service/update')?>/<?php echo $service->service_id?>">Edit |</a>
	      					<a href="#">Delete</a></td>
	      				</tr>
	      			<?php endif; ?>
	      			<?php endif; ?>
	      			<?php endforeach; ?>	
      			<?php endforeach; ?>
      		</table>
      </div>

      <?php foreach($pestcontrols as $pestcontrol): ?>
			     
			     <?php
			     	if($this->session->userdata('username') == $pestcontrol['username'])
			     	{
			     		$pestcontrol['pestcontrol_id'];
			     	}
			     ?>

     			<?php endforeach; ?>

      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
      	<a href="<?php echo base_url('pestcontrol/index')?>">Logout</a><br/> 
      	<a href="<?php echo base_url('pestcontrol/update')?>/<?php echo $pestcontrol['pestcontrol_id']; ?>">Manage Account</a>
      </div>
    </div>
  </div>
</div>
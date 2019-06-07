<?php

	if(! $this->session->userdata('username'))
	{
		redirect(base_url('PestControl/index'));
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('../materialize/css/materialize.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../materialize/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../materialize/css/custom/custom.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../vendors/flag-icon/css/flag-icon.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../vendors/perfect-scrollbar/perfect-scrollbar.css')?>">
</head>
<body>

</body>
</html>

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">
      	<?php foreach($pestcontrols as $pestcontrol): ?>
			     
			     <?php
			     	if($this->session->userdata('username') == $pestcontrol['username'])
			     	{
			     		echo $pestcontrol['pestcontrol_name'];
			     	    $id = $pestcontrol['pestcontrol_id'];
			     	}
			     ?>

     			<?php endforeach; ?>
      </a>

     

      <!-- Navbar Search -->
      

      <!-- Navbar -->
    </nav><br/>
<br/>
<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="fa fa-home"> </span> Home</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="fa fa-user"> </span> Profile</a>
      <a class="nav-link" id="v-pills-providers-tab" data-toggle="pill" href="#v-pills-providers" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="fa fa-briefcase"> </span> Commercial Service <span class="badge"><?php echo $clients_commercial; ?></span></a>
      <a class="nav-link" id="v-pills-commercial-tab" data-toggle="pill" href="#v-pills-commercial" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="fa fa-briefcase"> </span> Residential Service <span class="badge"><?php echo $clients; ?></span></a>
      <a class="nav-link" id="v-pills-services-tab" data-toggle="pill" href="#v-services-providers" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="fa fa-shopping-cart"> </span> Services</a>

      <a class="nav-link" id="v-pills-reports-tab" data-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="fa fa-list"> </span> Residential Reports <span class="badge"></a>

      <a class="nav-link" id="v-pills-comreports-tab" data-toggle="pill" href="#v-pills-comreports" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="fa fa-list"> </span> Commercial Reports <span class="badge"></a>

      <a class="nav-link" id="v-pills-feedback-tab" data-toggle="pill" href="#v-pills-feedback" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="fa fa-list"> </span> Feedback <span class="badge"></a>

      <a class="nav-link" id="v-pills-history-tab" data-toggle="pill" href="#v-pills-history" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="fa fa-list"> </span> Residential History <span class="badge"></a>

      <a class="nav-link" id="v-pills-comhistory-tab" data-toggle="pill" href="#v-pills-comhistory" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="fa fa-list"> </span> Commercial History <span class="badge"></a>

      <a class="nav-link" id="v-pills-recycle-tab" data-toggle="pill" href="#v-pills-recycle" role="tab" aria-controls="v-pills-settings" aria-selected="false"><span class="fa fa-cog"> </span> Recycle Bin</a>

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
      <div class="tab-pane fade" id="v-pills-commercial" role="tabpanel" aria-labelledby="v-pills-commercial-tab">
      	<div class="container">
      		<table class="table table-striped">
      			<tr>
      				<td>Booking ID</td>
      				<td>Client Name</td>
      				<td>Problem</td>
      				<td>Address</td>
                              <td>Date</td>
      				<td>Service Name</td>
      				<td>Time</td>
      				<td>Service Price</td>
                              <td>Service Type</td>
      				<td>Status</td>
      				<td>Action</td>
      			</tr>

      			
      			<?php foreach($residentials->result() as $r): ?>
      				<?php foreach($pestcontrols as $pestcontrol): ?>
      					<?php foreach($serv->result() as $s):?>
      					<?php
      						if($r->pestcontrol_id == $pestcontrol['pestcontrol_id']):
      						
      							if($pestcontrol['username'] == $this->session->userdata('username')):
      						?>
                                    <?php if($r->service_id == $s->service_price):?>

      			<tr>
      				<td><?php echo $r->residential_id; ?></td>
      				<td><?php echo $r->client_id; ?></td>
      				<td><?php echo $r->problem; ?></td>
      				<td><?php echo $r->residential_address; ?></td>
                              <td><?php echo $r->date; ?></td>
      				<td><?php echo $s->service_name; ?></td>
      				<td><?php echo $r->time; ?></td>
      				<td><?php echo $r->price; ?></td>
                              <td><?php echo $r->type; ?></td>
      				<td><?php echo $r->status; ?></td>
      				<td><a href="<?php echo base_url('PestControl/confirm')?>/<?php echo $r->residential_id; ?>" class="btn btn-primary">Confirm</a>
                                  <a href="<?php echo base_url('PestControl/resched')?>/<?php echo $r->residential_id; ?>" class="btn btn-primary">RE-SCHED</a>
                                  <a href="<?php echo base_url('PestControl/paid')?>/<?php echo $r->residential_id; ?>" class="btn btn-primary">Paid</a>
                                  <a href="<?php echo base_url('PestControl/complete')?>/<?php echo $r->residential_id; ?>" class="btn btn-primary">Completed</a>
                                  <a href="<?php echo base_url('PestControl/cancel')?>/<?php echo $r->residential_id; ?>" class="btn btn-primary">Cancel</a>

                                  </td>
      			</tr>		
      			
      			<?php endif; ?>	
                        <?php endif; ?>
		      	<?php endif; ?>
                        <?php endforeach; ?>
		      	<?php endforeach; ?>
		      	<?php endforeach; ?>
      		</table>
		</div>
      </div>


      <div class="tab-pane fade" id="v-pills-providers" role="tabpanel" aria-labelledby="v-pills-providers-tab">
            <div class="container">
                  <table class="table table-striped">
                        <tr>
                              <td>Booking ID</td>
                              <td>Client Name</td>
                              <td>Problem</td>
                              <td>Address</td>
                              <td>Date</td>
                              <td>Service Name</td>
                              <td>Time</td>
                              <td>Service Price</td>
                              <td>Service Type</td>
                              <td>Status</td>
                              <td>Action</td>
                        </tr>

                        
                        <?php foreach($commercials->result() as $c): ?>
                              <?php foreach($pestcontrols as $pestcontrol): ?>
                                    <?php foreach($serv->result() as $s):?>
                                    <?php
                                          if($c->pestcontrol_id == $pestcontrol['pestcontrol_id']):
                                          
                                                if($pestcontrol['username'] == $this->session->userdata('username')):
                                          ?>
                                    <?php if($c->service_id == $s->service_price):?>
                        <tr>
                              <td><?php echo $c->commercial_id; ?></td>
                              <td><?php echo $c->company_name; ?></td>
                              <td><?php echo $c->problem; ?></td>
                              <td><?php echo $c->company_address; ?></td>
                              <td><?php echo $c->date; ?></td>
                              <td><?php echo $s->service_name; ?></td>
                              <td><?php echo $c->time; ?></td>
                              <td><?php echo $c->price; ?></td>
                              <td><?php echo $c->type; ?></td>
                              <td><?php echo $c->status; ?></td>
                              <td><a href="<?php echo base_url('PestControl/commercial_confirm')?>/<?php echo $c->commercial_id; ?>" class="btn btn-primary">Confirm</a>
                                  <a href="<?php echo base_url('PestControl/commercial_resched')?>/<?php echo $c->commercial_id; ?>" class="btn btn-primary">RE-SCHED</a>
                                  <a href="<?php echo base_url('PestControl/commercial_paid')?>/<?php echo $c->commercial_id; ?>" class="btn btn-primary">Paid</a>
                                  <a href="<?php echo base_url('PestControl/commercial_complete')?>/<?php echo $c->commercial_id; ?>" class="btn btn-primary">Completed</a>
                                  <a href="<?php echo base_url('PestControl/commercial_cancel')?>/<?php echo $c->commercial_id; ?>" class="btn btn-primary">Cancel</a>


                              </td>
                        </tr>       
                        
                        <?php endif; ?>   
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        <?php endforeach; ?>
                        <?php endforeach; ?>
                  </table>
            </div>
      </div>

       <div class="tab-pane fade" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
      	<div class="container">
      	
      			<table class="table table-striped">
      			<tr>
      				<td>Booking ID</td>
      				<td>Client Name</td>
      				<td>Problem</td>
      				<td>Address</td>
      				<td>Date</td>
      				<td>Time</td>
      				<td>Service Price</td>
      				<td>Service Type</td>
      			</tr>

      			
      			<?php foreach($residential->result() as $r): ?>
      				<?php foreach($pestcontrols as $pestcontrol): ?>
      					
      					<?php
      						if($r->pestcontrol_id == $pestcontrol['pestcontrol_id']):
      						
      							if($pestcontrol['username'] == $this->session->userdata('username')):
      						?>

      			<tr>
      				<td><?php echo $r->residential_id; ?></td>
      				<td><?php echo $r->client_id; ?></td> 
      				<td><?php echo $r->problem; ?></td>
      				<td><?php echo $r->residential_address; ?></td>
      				<td><?php echo $r->date; ?></td>
      				<td><?php echo $r->time; ?></td>
      				<td><?php echo $r->price; ?></td>
      				<td><?php echo $r->type; ?></td>
      			</tr>		
      			
      			<?php endif; ?>	
		      	<?php endif; ?>
		      	<?php endforeach; ?>
		      	<?php endforeach; ?>
      		</table>



                  




      	
		</div>
      </div>

      <div class="tab-pane fade" id="v-pills-comreports" role="tabpanel" aria-labelledby="v-pills-comreports-tab">
            <div class="container">
            
                        <table class="table table-striped">
                        <tr>
                              <td>Booking ID</td>
                              <td>Client Name</td>
                              <td>Problem</td>
                              <td>Address</td>
                              <td>Date</td>
                              <td>Time</td>
                              <td>Service Price</td>
                              <td>Service Type</td>
                        </tr>

                        
                        <?php foreach($commercial->result() as $r): ?>
                              <?php foreach($pestcontrols as $pestcontrol): ?>
                                    
                                    <?php
                                          if($r->pestcontrol_id == $pestcontrol['pestcontrol_id']):
                                          
                                                if($pestcontrol['username'] == $this->session->userdata('username')):
                                          ?>

                        <tr>
                              <td><?php echo $r->commercial_id; ?></td>
                              <td><?php echo $r->company_name; ?></td>
                              <td><?php echo $r->problem; ?></td>
                              <td><?php echo $r->company_address; ?></td>
                              <td><?php echo $r->date; ?></td>
                              <td><?php echo $r->time; ?></td>
                              <td><?php echo $r->price; ?></td>
                              <td><?php echo $r->type; ?></td>
                        </tr>       
                        
                        <?php endif; ?>   
                        <?php endif; ?>
                        <?php endforeach; ?>
                        <?php endforeach; ?>
                  </table>

                  



            
            </div>
      </div>


      <div class="tab-pane fade" id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-history-tab">
      	<div class="container">
      	
      			<table class="table table-striped">
      			<tr>
      				<td>Booking ID</td>
      				<td>Client Name</td>
      				<td>Problem</td>
      				<td>Address</td>
      				<td>Date</td>
      				<td>Time</td>
      				<td>Service Price</td>
      				<td>Service Type</td>
      				<td>Status</td>
      			</tr>

      			
      			<?php foreach($residential->result() as $r): ?>
      				<?php foreach($pestcontrols as $pestcontrol): ?>
      					
      					<?php
      						if($r->pestcontrol_id == $pestcontrol['pestcontrol_id']):
      						
      							if($pestcontrol['username'] == $this->session->userdata('username')):
      						?>

      			<tr>
      				<td><?php echo $r->residential_id; ?></td>
      				<td><?php echo $r->client_id; ?></td>
      				<td><?php echo $r->problem; ?></td>
      				<td><?php echo $r->residential_address; ?></td>
      				<td><?php echo $r->date; ?></td>
      				<td><?php echo $r->time; ?></td>
      				<td><?php echo $r->price; ?></td>
      				<td><?php echo $r->type; ?></td>
      				<td><?php echo $r->status; ?></td>
      			</tr>		
      			
      			<?php endif; ?>	
		      	<?php endif; ?>
		      	<?php endforeach; ?>
		      	<?php endforeach; ?>
      		</table>



      	
		</div>
      </div>


      <div class="tab-pane fade" id="v-pills-comhistory" role="tabpanel" aria-labelledby="v-pills-comhistory-tab">
            <div class="container">
            
                        <table class="table table-striped">
                        <tr>
                              <td>Booking ID</td>
                              <td>Client Name</td>
                              <td>Problem</td>
                              <td>Address</td>
                              <td>Date</td>
                              <td>Time</td>
                              <td>Service Price</td>
                              <td>Service Type</td>
                              <td>Status</td>
                        </tr>

                        
                        <?php foreach($commercial->result() as $r): ?>
                              <?php foreach($pestcontrols as $pestcontrol): ?>
                                    
                                    <?php
                                          if($r->pestcontrol_id == $pestcontrol['pestcontrol_id']):
                                          
                                                if($pestcontrol['username'] == $this->session->userdata('username')):
                                          ?>

                        <tr>
                              <td><?php echo $r->commercial_id; ?></td>
                              <td><?php echo $r->company_name; ?></td>
                              <td><?php echo $r->problem; ?></td>
                              <td><?php echo $r->company_address; ?></td>
                              <td><?php echo $r->date; ?></td>
                              <td><?php echo $r->time; ?></td>
                              <td><?php echo $r->price; ?></td>
                              <td><?php echo $r->type; ?></td>
                              <td><?php echo $r->status; ?></td>
                        </tr>       
                        
                        <?php endif; ?>   
                        <?php endif; ?>
                        <?php endforeach; ?>
                        <?php endforeach; ?>
                  </table>



            
            </div>
      </div>

      <div class="tab-pane fade" id="v-pills-feedback" role="tabpanel" aria-labelledby="v-pills-feedback-tab">
      	<div class="container">
      		<div class="container">
      	<?php foreach($comments->result() as $comment): ?>
      	<?php foreach($pestcontrols as $pestcontrol): ?>

      		<?php 
      						if($comment->pestcontrol_id == $pestcontrol['pestcontrol_id']):
      							if($pestcontrol['username'] == $this->session->userdata('username')):
      						?>

	      	<div class="card mb-3">
				  <div class="card-body">
				  
				    <h5 class="card-title"><img src="http://localhost/project/logo/logo.png" width="100x" height="100px" class="rounded-circle"><?php echo $comment->client_id ?></h5>
				    <p class="card-text"><?php echo $comment->comment ?></p>
				    <p class="card-text"><small class="text-muted"><?php echo $comment->created_at?></small></p>
				    <a href="<?php echo base_url('replycomment/reply') ?>/<?php echo $comment->comment_id?>">Reply</a><br/>
				    <a href="<?php echo base_url('PestControl/delete_comment')?>/<?php echo $comment->comment_id?>">Delete</a>
				  </div>

				  
			</div>
		<?php endif; ?>
		<?php endif; ?>
		<?php endforeach; ?>	
		<?php endforeach; ?>	
		</div>
      		

      	
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
		        		<label>Service Picture</label>
		        		<input type="file" name="service_logo" class="form-control">
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
	      					<a href="<?php echo base_url('service/soft_delete')?>/<?php echo $service->service_id ?>">Delete</a></td>
	      				</tr>
	      			<?php endif; ?>
	      			<?php endif; ?>
	      			<?php endforeach; ?>	
      			<?php endforeach; ?>
      		</table>
      </div>


      <div class="tab-pane fade" id="v-schedule-providers" role="tabpanel" aria-labelledby="v-schedule-providers-tab">
                      



                  <table class="table table-striped">
                        <tr>
                              <td>Date</td>
                              <td>Time</td>
                              <td>Action</td>
                        </tr>
                        <?php foreach($schedules as $schedule): ?>
                              <?php foreach($pestcontrols as $pestcontrol): ?>
                                    <?php 
                                          if($schedule['pestcontrol_id'] == $schedule['pestcontrol_id']):
                                                if($pestcontrol['username'] == $this->session->userdata('username')):
                                          ?>
                                    <tr>
                                          <td><?php echo $schedule['date']; ?></td>
                                          <td><?php echo $schedule['time']; ?></td>
                                          <td><a href="<?php echo base_url('service/update')?>/<?php echo $schedule['schedule_id']?>">Edit |</a>
                                          <a href="<?php echo base_url('service/soft_delete')?>/<?php echo $schedule['schedule_id'] ?>">Delete</a></td>
                                    </tr>
                              <?php endif; ?>
                              <?php endif; ?>
                              <?php endforeach; ?>    
                        <?php endforeach; ?>
                  </table>


                  <div class="row">
                        <div class="col s6">
                              <div class="card">
                                <div class="card-content">
                                <form method="POST" action="<?php echo base_url('Schedule/add_schedule')?>">
                                    <div class="input-field col s12">
                                          <input type="date" name="txtdate">
                                    </div>

                                    <div class="input-field col s12">
                                          <input type="time" name="txttime">
                                    </div>

                                    <input type="submit" name="btnSubmit" class="btn btn-primary">
                                </form>    
                                </div>
                              </div>
                        </div>
                  </div>                    










      </div>

     

      <?php foreach($pestcontrols as $pestcontrol): ?>
			     
			     <?php
			     	if($this->session->userdata('username') == $pestcontrol['username'])
			     	{
			     		$pestcontrol_id = $pestcontrol['pestcontrol_id'];
			     	}
			     ?>

     			<?php endforeach; ?>

      <div class="tab-pane fade" id="v-pills-recycle" role="tabpanel" aria-labelledby="v-pills-recyle-tab">
            
            <table class="table table-striped">
                        <tr>
                              <td>Service Name</td>
                              <td>Service Detail</td>
                              <td>Service Type</td>
                              <td>Service Price</td>
                              <td>Action</td>
                        </tr>
                        <?php foreach($serve->result() as $service): ?>
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
                                          <td><a href="<?php echo base_url('service/soft_delete')?>/<?php echo $service->service_id ?>">Delete</a></td>
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
                              $pestcontrol_id = $pestcontrol['pestcontrol_id'];
                        }
                       ?>

                  <?php endforeach; ?>            


      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
      	<a href="<?php echo base_url('pestcontrol/index')?>">Logout</a><br/> 
      	<a href="<?php echo base_url('pestcontrol/update')?>/<?php echo $pestcontrol_id; ?>">Manage Account</a>
      </div>
    </div>
  </div>
</div>
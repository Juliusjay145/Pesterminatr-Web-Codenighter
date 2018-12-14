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



<form method="POST" action="<?php echo base_url('service/editService')?>">
	<input type="hidden" name="service_id" class="form-control" value="<?php echo $updateService[0]['service_id']; ?>">
		        <div class="container">
		        	<div class="form-group">
		        		<label>Service Name</label>
		        		<input type="text" name="txtservice" class="form-control" value="<?php echo $updateService[0]['service_name']; ?> ">
		        		<label>Service Details</label>
		        		<textarea name="txtdetails" class="form-control" required="required"><?php echo $updateService[0]['service_detail']; ?></textarea><br/>
		        		<select name="servicetype" class="form-control" required="required">
		        			<option value="General Pest Control Service">General Pest Control Service</option>
		        			<option value="Termite Pest Control Sevice">Termite Pest Control Service</option>
		        		</select>
		        		<label>Service Price</label>
		        		<input type="number" name="txtprice" class="form-control" required="required"  value="<?php echo $updateService[0]['service_price']; ?>" >
		        	</div>
		        </div>
		        <center>		
		         	<button type="button" class="btn btn-secondary">Close</button>
		        	<button type="submit" class="btn btn-primary">Save changes</button>
		      	</form>
		      </center>
		      </div>
		       
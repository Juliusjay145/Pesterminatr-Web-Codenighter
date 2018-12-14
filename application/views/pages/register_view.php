<div class="container"><br/><br/>
	<div class="card">
	  <div class="card-header">
	    Register
	  </div>
	  <div class="card-body">
	    <p class="card">
	    <form method="POST" action="<?php echo base_url('clients/addClient')?>">
	    <div class="form-group">
	    
	    	<input type="text" name="name" placeholder="Client Name" class="form-control"><br/>
	    	<input type="text" name="txtaddress" placeholder="Address" class="form-control"><br/>
	    	<input type="text" name="txtcontact" placeholder="Contact" class="form-control"><br/>
	    	<input type="text" name="txtusername" placeholder="Username" class="form-control"><br/>
	    	<input type="password" name="txtpassword" placeholder="Password" class="form-control"><br/>
	    
	    </div>
	    <button class="btn btn-primary" type="submit">Register</button>
	    </form>
	    	
	    </p>
    	

	  </div>
	</div>	
</div>

<?php

	if(! $this->session->userdata('username'))
	{
		redirect(base_url('Clients/index'));
	}

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
  
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="<?php echo base_url('clients/home'); ?>">Pesterminatr</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    </ul>
    <form class="form-inline my-2 my-lg-0">
    </form>
  </div>
</nav>

	<div class="container">
		
			<form method="POST" action="<?php echo base_url('Clients/updateDetails'); ?>">
			<input type="hidden" name="residential_id" value="<?php echo $residentials[0]['residential_id']; ?>">
				<label>Problem</label>
				<input type="text" name="txtproblem" value="<?php echo $residentials[0]['problem']; ?>">

				<label>Address</label>
				<input type="text" name="txtaddress" value="<?php echo $residentials[0]['residential_address']; ?>">

				<label>Date</label>
				<input type="date" name="txtdate" value="<?php echo $residentials[0]['date']; ?>">
				<label>Time</label>
				<input type="time" name="txttime" value="<?php echo $residentials[0]['time']; ?>">

				<input type="submit" name="btnSubmit" class="btn btn-primary">
			</form>			
	</div>
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

    
    

  


  <h3>Residential Booking Details</h3>
  <table class="table">
      <tr>
        <td>Name</td>
        <td>Problem</td>
        <td>Address</td>
        <td>Date</td>
        <td>Time</td>
        <td>Service Name</td>
        <td>Price</td>
        <td>Status</td>
        <td>Action</td>
      </tr>
    
    
      <?php foreach($residentials->result() as $r): ?>
        <?php foreach($clients as $client):?>
        <?php foreach($services->result() as $s):?>
          <?php if($r->client_id == $client['client_name']):?>
          <?php if($r->service_id == $s->service_price):?>

                <tr>
                    <td><?php echo $client['client_name'] ?></td>
                    <td><?php echo $r->problem ?></td>
                    <td><?php echo $r->residential_address ?></td>
                    <td><?php echo $r->date ?></td>
                    <td><?php echo $r->time ?></td>
                    <td><?php echo $s->service_name ?></td>
                    <td><?php echo $r->price ?></td>
                    <td><?php echo $r->status ?></td>
                    <td><a href="<?php echo base_url('Clients/update_detials'); ?>/<?php echo $r->residential_id; ?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url('Residential/cancel');?>/<?php echo $r->residential_id; ?>" class="btn btn-danger">Cancel</a></td>
                </tr>



            <?php endif; ?>
            <?php endif; ?>
            <?php endforeach; ?>
            <?php endforeach; ?>
            <?php endforeach; ?>
    
  </table>

  <hr>
  <h3>Commercial Service Booking Details</h3>

  <table class="table">
      <tr>
        <td>Name</td>
        <td>Problem</td>
        <td>Address</td>
        <td>Date</td>
        <td>Service Name</td>
        <td>Time</td>
        <td>Price</td>
        <td>Status</td>
        <td>Action</td>
      </tr>
    
    
      <?php foreach($commercials->result() as $c): ?>
        <?php foreach($clients as $client):?>
          <?php foreach($services->result() as $s):?>
          <?php if($c->client_id == $client['client_name']):?>
            <?php if($c->service_id == $s->service_price):?>

                <tr>
                    <td><?php echo $client['client_name'] ?></td>
                    <td><?php echo $c->problem ?></td>
                    <td><?php echo $c->company_address ?></td>
                    <td><?php echo $c->date ?></td>
                    <td><?php echo $s->service_name ?></td>
                    <td><?php echo $c->time ?></td>
                    <td><?php echo $c->price ?></td>
                    <td><?php echo $c->status ?></td>
                    <td><a href="<?php echo base_url('Clients/update_comdetials'); ?>/<?php echo $c->commercial_id; ?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url('Commercial/cancel')?>/<?php echo $c->commercial_id; ?>" class="btn btn-danger">Cancel</a></td>
                </tr>



            <?php endif; ?>
            <?php endif; ?>
            <?php endforeach; ?>
            <?php endforeach; ?>
            <?php endforeach; ?>


        
  </table>

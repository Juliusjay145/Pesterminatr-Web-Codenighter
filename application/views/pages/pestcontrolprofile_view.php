<?php

  if(! $this->session->userdata('username'))
  {
    redirect(base_url('PestControl/index'));
  }

?>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
  
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="<?php echo base_url('clients/home')?>">Pesterminatr</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    </ul>
    <form class="form-inline my-2 my-lg-0">
    
    </form>
  </div>
</nav>

<input type="hidden" name="pestcontrol_id" class="form-control" value="<?php echo $getpest[0]['pestcontrol_id']; ?>">
         <?php foreach($getpest as $pest): ?>
              <?php $pest['pestcontrol_name']; ?>
             <?php endforeach; ?>

  <div class="container">
      <div class="section">
        <div class="row">
            <div class="col s12">
            <?php foreach($services->result() as $service): ?>
              <?php foreach($getpest as $pest): ?>  
              <?php if($service->pestcontrol_id == $pest['pestcontrol_id']): ?>
    
              <div class="col s12 m6 l4">
                <div class="card">
                <img class="card-img-top" src="http://localhost/project/logo/logo.png" class="rounded-circle" alt="Card image cap">
                <center>
                  <?php echo $service->service_name; ?></h5><br/>
                  <?php echo $service->service_price; ?></h5>
                 </center> 
                </div>
              </div>
              <?php endif;?>
              <?php endforeach;?>
              <?php endforeach;?>
            </div>        
        </div>
    </div>
</div>                  
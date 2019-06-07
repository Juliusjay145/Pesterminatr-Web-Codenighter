<?php

	if(! $this->session->userdata('username'))
	{
		redirect(base_url('PestControl/index'));
	}

?>



<br/>
    
<div class="container">
    <div class="row">
      <div class="col s6">
        <div class="card">
          <div class="card-image"><br/>


          <center>
            <img src="http://localhost/project/logo/house.png" style="width: 150px;">
            </center>
          </div>
          <div class="card-content">
          <center>
            <p><b>Residential Services</b></p>
            <i>Protecting your family's health</i><br/>
            Insects and other pests are vital to our ecosystems. However, when they make themselves at home in your home, problems can arise. Rodents and roaches are notorious for spreading infectious diseases. Flies spread harmful bacteria. Spider bites and bee stings can be painful and require medical attention. Under Rose's watch, you can get back to enjoying time with your family, knowing you're protected from nature.
          </center>  
          </div>
          <div class="card-action">
           <!-- <a href="<?php echo base_url(); ?>Residential/residentialbook/<?php echo $update[0]['pestcontrol_id']; ?>">Book Now!</a> -->
          </div>
        </div>
      </div>

      <div class="col s6">
        <div class="card">
          <div class="card-image"><br/>
          <center>
            <img src="http://localhost/project/logo/building.png" style="width: 150px;">
          </center>  
          </div>
          <div class="card-content">
          <center>
            <p><b>Commercial Services</b></p><br/>
            <i>Our Business keeps you in business</i><br/>
              A single pest can bring a business to its knees. Whether it's is a restaurant or warehouse, supermarket or school, health facility or retail shop, you can’t risk a Chicago pest control problem. With a Commercial Care Plan™ from Rose, you’ll gain the peace of mind that comes from knowing your company and those you serve are protected from pests.
          </center>  
          </div>
          <div class="card-action">
            <!-- <a href="<?php echo base_url(); ?>Commercial/commericalbook/<?php echo $update[0]['pestcontrol_id']; ?>"">Book Now!</a> --> 
          </div>
        </div>
      </div>
    </div>


    <div class="col s6">
        <div class="card">

          <div class="card-image"><br/>
          <center>
            Comment Section   
          </center>  
          </div>
          <div class="card-content">
          <form method="POST" action="<?php echo base_url('comment/update'); ?>">
          <input type="hidden" name="comment_id" class="form-control" value="<?php echo $update[0]['comment_id']; ?>">
           <div class="row margin"> 
            <div class="input-field col s12">
                <input class="form-control" name="updatecomment" type="text" autofocus value="<?php echo $update[0]['comment']; ?>">
              <label for="username" class="center-align">Comment</label>
            </div>
          </div>  
          </div>
          <div class="card-action">
            <input type="submit" name="btnSubmit">
          </div>
         </form>
        </div>

          
              
      </div>
    </div>
  </div>


   
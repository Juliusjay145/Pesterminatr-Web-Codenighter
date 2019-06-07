<?php

	if(! $this->session->userdata('username'))
	{
		redirect(base_url('PestControl/index'));
	}

?>



  <input type="hidden" name="pestcontrol_id" class="form-control" value="<?php echo $getpest[0]['pestcontrol_id']; ?>">
    <?php foreach($getpest as $pest): ?>
              <?php $pest['pestcontrol_name']; ?>
             <?php endforeach; ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
  
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><?php echo $pest['pestcontrol_name']; ?></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    </ul>
    <form class="form-inline my-2 my-lg-0">
    </form>
  </div>
</nav>
        <center>
         
        </center>     
   

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
           <a href="<?php echo base_url(); ?>Residential/residentialbook/<?php echo $getpest[0]['pestcontrol_id']; ?>">Book Now!</a>
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
            <a href="<?php echo base_url(); ?>Commercial/commericalbook/<?php echo $getpest[0]['pestcontrol_id']; ?>"">Book Now!</a> 
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
          <form method="POST" action="<?php echo base_url('Comment/add_comment'); ?>">
          <input type="hidden" name="pestcontrol_id" class="form-control" value="<?php echo $getpest[0]['pestcontrol_id']; ?>">
            <!-- <i class="material-icons prefix pt-4">person</i>
            <input type="text" name="txtcomment">
            <label for="txtcomment" class="center-align">Comment</label> -->
           <div class="row margin"> 
            <div class="input-field col s12">
                <input class="form-control" name="txtcomment" type="text">
              <label for="username" class="center-align">Comment</label>  
              <input type="submit" name="btnSubmit" value="comment" class="btn btn-primary">
            </div>
          </div>  
          </div>
          <div class="card-action">
          </div>
         </form>

          
         <?php foreach($comments->result() as $comment):?>
            <?php foreach($getpest as $pestcontrol):?>
              <?php if($comment->pestcontrol_id == $pestcontrol['pestcontrol_id']):?>
                <img src="http://localhost/project/logo/tude.jpg" width="50x" height="50px" class="rounded-circle">
                <b>
                <?php echo $comment->client_id;?> at
                <?php echo $comment->created_at;?><br/></b>
                <i><?php echo $comment->comment;?><br/></i>

                <?php foreach($replys->result() as $reply):?>
                          <?php if($reply->comment_id == $comment->comment_id):?>
                <b>Reply: <?php echo $reply->pestcontrol_id;?></b>
                        <?php echo $reply->reply;?>
                        <?php endif;?>
                        <?php endforeach;?>
                <b><a href="<?php echo base_url('comment/edit')?>/<?php echo $comment->comment_id; ?>">Edit</a></b>
                <b><a href="<?php echo base_url('comment/soft_delete')?>/<?php echo $comment->comment_id; ?>">Delete</a></b>

                  <hr>
                    
                      


                  </hr>
                <hr/>
                
                
           <?php endif;?>   
           <?php endforeach;?>   
           <?php endforeach;?> 
        </div>

          
              
      </div>
    </div>
  </div>


   
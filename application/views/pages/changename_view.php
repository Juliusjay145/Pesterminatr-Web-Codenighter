<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
  
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="<?php echo base_url('clients/home'); ?>">Pesterminatr</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Address</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <img src="http://localhost/project/logo/tude.JPG" width="30x" height="30px" class="rounded-circle">
      <?php foreach($clients->result() as $client): ?>
			     
			     <?php
			     	if($this->session->userdata('username') == $client->username)
			     	{
			     		echo $client->client_name;
			     	}
			     ?>

     			<?php endforeach; ?>
    </form>
  </div>
</nav>

<div class="container">
        <div class="row">
            <div style="margin: 1em auto 0;" class="col-md-4 col-md-offset-6">
                <div class="login-card panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Change Username</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="<?php echo base_url('clients/updatename')?>">
                <input type="hidden" name="client_id" class="form-control" value="<?php echo $changename[0]['client_id']; ?>">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="txtname" type="text" value="<?php echo $changename[0]['client_name']; ?> ">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                
                                <input type="submit" name="btnSubmit" class="btn btn-primary" value="Save Changes">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

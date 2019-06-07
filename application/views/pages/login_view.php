<br/><br/><br/><br/>

<?php

  if($this->session->set_userdata('username'))
  {
    redirect(base_url('Clients/Home'));
  }

?>

<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('../materialize/css/materialize.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../materialize/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../materialize/css/custom/custom.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../vendors/flag-icon/css/flag-icon.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../vendors/perfect-scrollbar/perfect-scrollbar.css')?>">

    <style>
    html,
    body {
        height: 100%;
    }
    html {
        display: table;
        margin: auto;
    }
    body {
        display: table-cell;
        vertical-align: middle;
    }
    .login-form {
        width: 380px;
    }
    .input-field .prefix.active, label.active{
        color: #2196F3 !important;
    }
    .input-field input {
        color: #555;
        font-size: 14px !important;
    }
    input[type=submit] {
      color: #fff !important;
    }
</style>

</head>
<body class=" blue lighten-2">
    <div id="login-page" class="row">
      <div class="col s12 z-depth-4 card-panel" style="padding: 10px 10px 0; border-radius: 8px;">
     <form method="POST" action="<?php echo base_url('clients/valid')?>">
          <div class="row">
            <div class="input-field col s12 center">
              <img src="http://localhost/project/logo/logo1.png" alt="" style="width: 40%;" class="responsive-img valign profile-image-login">
              <h1 style="font-size: 1.7rem; color: #444;">Pesterminatr</h1>
              <p class="center login-form-text">Sign in to start your session</p>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-4">person</i>
                <input class="form-control" name="txtusername" type="text" autofocus>
              <label for="username" class="center-align">Username</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-4">lock</i>
                 <input class="form-control" name="txtpassword" type="password" value="">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <!-- <a href="#" id="doLogin" class="btn waves-effect waves-light col s12 blue">Login</a> -->
             <input type="submit" name="btnSubmit" class="btn btn-success  btn-block" value="Login">
             <center>
                <a href="<?php echo base_url('clients/register')?>">Don't have Account?</a>
             </center>   
            </div>
          </div>
        </form>
      </div>
    </div>
    </body>
</html>



<!-- <div class="container">
        <div class="row">
            <div style="margin: 1em auto 0; background: white; border-radius: 25px; border: 2px solid #73AD21; padding: 20px;" class="col-md-4 col-md-offset-6">
                <div class="login-card panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center" color="green";>Pesterminatr</h3><br>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="<?php echo base_url('clients/valid')?>">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="txtusername" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="txtpassword" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                               <!--  <input type="submit" name="btnSubmit" class="btn btn-success  btn-block" value="Login">
                                <center>
                                  <a href="<?php echo base_url('clients/register')?>">Don't have Account?</a>
                                </center>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
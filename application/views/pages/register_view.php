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



		<div class="row">
              <div class="col s12 m12 l12">
                <div class="card-panel">
                  <div class="row">
                    <form method="POST" action="<?php echo base_url('clients/addClient')?>">
                      <h4 class="header2">Register Account</h4>
                      <div class="row">
                        <div class="input-field col s4">
                          <i class="material-icons prefix">account_circle</i>
                          <input type="text" name="name" class="form-control"><br/>
                          <label for="icon_prefix">Client First Name</label>
                        </div>
                        <div class="input-field col s4">
                          <i class="material-icons prefix">account_circle</i>
                          <input type="text" name="lastname" class="form-control"><br/>
                          <label for="icon_prefix">Client Last Name</label>
                        </div>
                        <div class="input-field col s4">
                          <i class="material-icons prefix">home</i>
                          <input type="text" name="txtaddress" class="form-control"><br/>
                          <label for="icon_email">Address</label>
                        </div>
                        <div class="input-field col s4">
                          <i class="material-icons prefix">email</i>
                          <input type="tel" name="txtcontact" class="form-control"><br/>
                          <label for="icon_email">Contact Number</label>
                        </div>
                        <div class="input-field col s4">
                          <i class="material-icons prefix">account_circle</i>
                         	<input type="text" name="txtusername" class="form-control"><br/>
                          <label for="icon_email">Username</label>
                        </div>
                         <div class="input-field col s4">
                          <i class="material-icons prefix">lock</i>
                         	<input type="password" name="txtpassword" class="form-control"><br/>
                          <label for="icon_email">Password</label>
                        </div>
                      </div>
                      <div class="input-field col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="action">
                              <i class="material-icons">perm_identity</i> Register</button>
                          </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    <!-- <div id="login-page" class="row">
      <div class="col s12 z-depth-4 card-panel" style="padding: 10px 10px 0; border-radius: 8px;">
     <form method="POST" action="<?php echo base_url('clients/addClient')?>">
          <div class="row">
            <div class="input-field col s12 center">
              <img src="http://localhost/project/logo/logo1.png" alt="" style="width: 40%;" class="responsive-img valign profile-image-login">
              <h1 style="font-size: 1.7rem; color: #444;">Pesterminatr</h1>
              <p class="center login-form-text">Registration</p>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-4">person</i>
                <input type="text" name="name" class="form-control"><br/>
              <label for="username" class="center-align">Client Name</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-4">lock</i>
                 <input type="text" name="txtaddress" placeholder="Address" class="form-control"><br/>
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12"> -->
             <!--  <a href="#" id="doLogin" class="btn waves-effect waves-light col s12 blue">Login</a>
             <input type="submit" name="btnSubmit" class="btn btn-success  btn-block" value="Login">
             <center>
                <a href="<?php echo base_url('clients/register')?>">Don't have Account?</a>
             </center>   
            </div>
          </div>
        </form>
      </div>
    </div> -->
    </body>
</html>
<!-- <div class="container"><br/><br/>
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

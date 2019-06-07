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
              <div class="col s6">
                <div class="card-panel">
                  <div class="row">
                   <form method="POST" action="<?php echo base_url('pestcontrol/registerpest')?>">
                    <!-- <?php echo $error;?>

                    <?php echo form_open_multipart('../PestControl/registerpest');?> -->
                    
                      <h4 class="header2">Register Pest Control Services</h4>
                      <h3>Company Information</h3>
                      <div class="row">

                        <div class="input-field col s12">
                          <i class="material-icons prefix">account_circle</i>
                          <input type="text" name="name" class="form-control"><br/>
                          <label for="icon_prefix">Company Name</label>
                        </div>
                        <div class="input-field col s12">
                          <i class="material-icons prefix">home</i>
                          <input type="text" name="txtaddress" class="form-control"><br/>
                          <label for="icon_email">Address</label>
                        </div>
                      </div>
                      <div class="input-field col s6">
                          <i class="material-icons prefix">home</i>
                          <input type="text" name="txtcontact" class="form-control"><br/>
                          <label for="icon_email">Contact Number</label>
                      </div>

                      <div class="input-field col s6">
                          <i class="material-icons prefix">account_circle</i>
                          <input type="text" name="txtusername" class="form-control"><br/>
                          <label for="icon_email">Username</label>
                      </div>

                      <div class="input-field col s6">
                          <i class="material-icons prefix">lock</i>
                         <input type="password" name="txtpassword" class="form-control"><br/>
                          <label for="icon_email">Password</label>
                      </div>

                      <div class="input-field col s6">
                          <i class="material-icons prefix">lock</i>
                          <input type="password" name="txtconfimmpassword" class="form-control"><br/>
                          <label for="icon_email">Confirm-Password</label>
                      </div>

                      <div class="input-field col s12">
                          <i class="material-icons prefix">message</i>
                         <textarea id="message4" class="materialize-textarea validate" name="txtdetails" length="120"></textarea>
                          <label for="icon_email">Company Details</label>
                      </div>
                      <h6>Certificate of your company:</h6>
                      <div class="input-field col s6">
                         <input type="file" name="file1" class="form-control"><br/>
                      </div>

                      <div class="input-field col s6">
                          <input type="file" name="file2" class="form-control"><br/>
                      </div>
                      <h6>Company Logo</h6>
                      <div class="input-field col s6">
                          <input type="file" name="file3" class="form-control"><br/>
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
  </body>
</html>





<!-- <div class="container"><br/><br/>
  <div class="card">
    <div class="card-header">
      Register as Pest Control Provider
    </div>
    <div class="card-body">
      <p class="card">
      <?php echo $error;?>

      <?php echo form_open_multipart('../PestControl/registerpest');?>
      <div class="form-group">
        <h3>Company Information</h3>
        <input type="text" name="name" placeholder="Company Name" class="form-control"><br/>
        <input type="text" name="txtaddress" placeholder="Address" class="form-control"><br/>
        <input type="text" name="txtcontact" placeholder="Contact" class="form-control"><br/>
        <textarea name="txtdetails" class="form-control" placeholder="Company Details"></textarea><br/>
        <h3>Account</h3>
        <input type="text" name="txtusername" placeholder="Username" class="form-control"><br/>
        <input type="password" name="txtpassword" placeholder="Password" class="form-control"><br/>
        <input type="password" name="txtconfimmpassword" placeholder="Confirm-Password" class="form-control"><br/>
        <h3>Certificate of your company</h3>
        Certificate of Trusted Services:
        <input type="file" name="file1" class="form-control"><br/>
        Certificate of Trusted Services:
        <input type="file" name="file2" class="form-control"><br/>
       
      </div>
      <button class="btn btn-primary" type="submit">Register</button>
      </form>
        
      </p>
      

    </div>
  </div>  
</div> -->

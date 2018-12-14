<?php

  if($this->session->set_userdata('username'))
  {
    redirect(base_url('Clients/Home'));
  }

?>



<br/><br/><br/>

    <div class="container">
        <div class="row">
            <div style="margin: 1em auto 0; background: white; border-radius: 25px; border: 2px solid #73AD21; padding: 20px;" class="col-md-4 col-md-offset-6">
                <div class="login-card panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center" color="green";>Pesterminatr</h3><br>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php echo base_url('admin/valid'); ?>">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="txtusername" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="txtpassword" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="btnSubmit" class="btn btn-success  btn-block" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Pesterminatr Admin</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>
    </nav><br/>

    <div class="container">
        <div class="row">
            <div style="margin: 1em auto 0;" class="col-md-4 col-md-offset-6">
                <div class="login-card panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Update Status</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="<?php echo base_url('admin/updateClient')?>">
                <input type="hidden" name="client_id" class="form-control" value="<?php echo $update[0]['client_id']; ?>">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="txtname" type="text" 
                                    value="<?php echo $update[0]['client_name']; ?>" disabled><br/>

                                    <input class="form-control" name="txtname" type="text" 
                                    value="<?php echo $update[0]['client_address']; ?>" disabled><br/>

                                    <input class="form-control" name="txtcontact" type="text" value="<?php echo $update[0]['client_contact']; ?>" disabled><br/>  

                                    <select name="status" class="form-control">
                                        <option value="Active">Active</option>
                                        <option value="Deactivate">Deactivate</option>
                                    </select>
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
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Pesterminatr Admin</a>

      <!-- Navbar -->
    </nav><br/>

    <div class="container">
        <table class="table table-striped">
        <h3>List of Pest Control Provider</h3>
            <tr>
              <td>Pest Control ID</td>
              <td>Pest Control Provider</td>
              <td>Pest Control Address</td>
              <td>Pest Control Contact</td>
              <td>Pest Control Status</td>
              <td>Action</td>
            </tr>
            <?php foreach($providers as $provider):?>
              <tr>
                <td><?php echo $provider['pestcontrol_id']; ?></td>
                <td><?php echo $provider['pestcontrol_name']; ?></td>
                <td><?php echo $provider['pestcontrol_address']; ?></td>
                <td><?php echo $provider['pestcontrol_contact']; ?></td>
                <td><?php echo $provider['status']; ?></td>
                <td><a href="<?php echo base_url('admin/updateproviders')?>/<?php echo $provider['pestcontrol_id']; ?>">Edit | </a>
                <a href="<?php echo base_url('admin/list_history')?>/<?php echo $provider['pestcontrol_id']; ?>">View Service History</a></td>
              </tr>
            <?php endforeach; ?>
        </table>
    </div>
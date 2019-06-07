<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Pesterminatr Admin</a>
    </nav><br/>

    <div class="container">
        <table class="table table-striped">
        <h3>List of Clients</h3>
            <tr>
              <td>Client ID</td>
              <td>Client Name</td>
              <td>Client Address</td>
              <td>Client Contact</td>
              <td>Client Status</td>
              <td>Action</td>
            </tr>
            <?php foreach($clients->result() as $client):?>
              <tr>
                <td><?php echo $client->client_id; ?></td>
                <td><?php echo $client->client_name; ?></td>
                <td><?php echo $client->client_address; ?></td>
                <td><?php echo $client->client_contact; ?></td>
                <td><?php echo $client->status; ?></td>
                <td><a href="<?php echo base_url('admin/updateclients')?>/<?php echo $client->client_id; ?>">Edit</a></td>
              </tr>
            <?php endforeach; ?>
        </table>
    </div>
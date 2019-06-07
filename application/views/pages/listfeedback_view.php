<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Pesterminatr Admin</a>
    </nav><br/>

    <div class="container">
        <table class="table table-striped">
        <h3>Feedback</h3>
            <tr>
              

              <td>Client ID</td>
              <td>Client Status</td>
              <td>Action</td>
            </tr>
            <?php foreach($comments->result() as $c):?>
              <tr>
                <td><?php echo $c->comment_id; ?></td>
                <td><?php echo $c->comment; ?></td>
                <td><a href="<?php echo base_url('admin/updateclients')?>">Delete</a></td>
              </tr>
            <?php endforeach; ?>
        </table>
    </div>
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Pesterminatr History</a>

      <!-- Navbar -->
    </nav><br/>

    <div class="container">
        <table class="table table-striped">
        <h3>List of Pest Control Provider History</h3>
            <tr>
              <td>Booking ID</td>
              <td>Client Name</td>
              <td>Problem</td>
              <td>Address</td>
              <td>Date</td>
              <td>Time</td>
              <td>Service Price</td>
              <td>Service Type</td>
              <td>Action</td>
            </tr>

            
            <?php foreach($residential->result() as $r): ?>
              <?php foreach($pestcontrols as $pestcontrol): ?>
                
                <?php if($r->pestcontrol_id == $pestcontrol['pestcontrol_id']): ?>

            <tr>
              <td><?php echo $r->residential_id; ?></td>
              <td><?php echo $r->client_id; ?></td>
              <td><?php echo $r->problem; ?></td>
              <td><?php echo $r->residential_address; ?></td>
              <td><?php echo $r->date; ?></td>
              <td><?php echo $r->time; ?></td>
              <td><?php echo $r->price; ?></td>
              <td><?php echo $r->type; ?></td>
              <td><?php echo $r->status; ?></td>
            </tr>   
            
            <?php endif; ?> 
            <?php endforeach; ?>
            <?php endforeach; ?>
          </table>
    </div>
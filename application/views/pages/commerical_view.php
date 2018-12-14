 <div class="row">
    <div class="col s6">
      <div class="card">
        <div class="card-image"><br/>
          <center>
            <img src="http://localhost/project/logo/building.png" style="width: 150px;">
              <h3>Commerical Service</h3>
          </center>  
        </div>
        <div class="card-content">
         
        <input type="hidden" name="pestcontrol_id" class="form-control" value="<?php echo $providers[0]['pestcontrol_id']; ?>">

             <div class="row">
              <div class="input-field col s12">
                <input id="first_name2" type="text" class="validate">
                <label class="active" for="first_name2">Company Name</label>
              </div>
            </div>  
           


             <div class="row">
              <div class="input-field col s12">
                <input id="first_name2" type="text" class="validate">
                <label class="active" for="first_name2">What is the problem of your building ?</label>
              </div>
            </div>  

             <div class="col s6">
                <select class="browser-default">
                  <option value="" disabled selected>Choose Services</option>
                   <?php foreach($services->result() as $service): ?>
                  <?php foreach($providers as $p): ?>
                    <?php if($service->pestcontrol_id == $p['pestcontrol_id']): ?>
                 
                      <option value="<?php echo $service->service_id?>"><?php echo $service->service_name; ?>
                        
                      </option>
                  <?php endif; ?>  
                  <?php endforeach; ?>  
                  <?php endforeach; ?>  
                </select>
             </div>

              <div class="col s6">
                <select class="browser-default">
                  <option value="" disabled selected>Square Meter</option>
                  <?php foreach($squaremeter->result() as $s): ?>
                    <option value="<?php echo $s->id?>"><?php echo $s->square; ?></option>
                  <?php endforeach; ?>  
                </select>
             </div>

        </div>
        <div class="card-action">
          <a href="#">Book Now</a>
        </div>
      </div>
    </div>
  </div>
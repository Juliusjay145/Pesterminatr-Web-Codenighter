 <div class="row">
    <div class="col s6">
      <div class="card">
        <div class="card-image"><br/>
          <center>
            <img src="http://localhost/project/logo/building.png" style="width: 150px;">
              <h3>Commercial Service</h3>
          </center>  
        </div>
        <div class="card-content">

        <form method="POST" action="<?php echo base_url('Commercial/book'); ?>">
         
        <input type="hidden" name="pestcontrol_id" class="form-control" value="<?php echo $providers[0]['pestcontrol_id']; ?>">

             <div class="row">
              <div class="input-field col s12">
                <input id="first_name2" type="text" class="validate" name="company_name">
                <label class="active" for="first_name2">Company Name</label>
              </div>
            </div>  
           


             <div class="row">
              <div class="input-field col s12">
                <input id="first_name2" type="text" class="validate" name="problem">
                <label class="active" for="first_name2">What is the problem of your building ?</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input id="first_name2" type="text" class="validate" name="address">
                <label class="active" for="first_name2">Address (Landmark)</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input type="date" class="validate" name="date" id="txtdate">
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input id="first_name2" type="time" class="validate" name="txttime">
              </div>
            </div>

            <!-- <div class="col s6">
                <select class="browser-default" name="txtdate">
                  <option value="" disabled selected>Choose Date</option>
                   <?php foreach($schedules as $s):?>
                <?php foreach ($providers as $p):?>
                  <?php if($s['pestcontrol_id'] == $p['pestcontrol_id']): ?>
                      <option value="<?php echo $s['date']; ?>"><?php echo $s['date']; ?>
                        
                      </option>
                  <?php endif; ?>  
                  <?php endforeach; ?>  
                  <?php endforeach; ?>  
                </select>
             </div>



              <div class="col s6">
                <select class="browser-default" name="txttime">
                  <option value="" disabled selected>Choose Time</option>
                 <?php foreach($schedules as $s):?>
                <?php foreach ($providers as $p):?>
                  <?php if($s['pestcontrol_id'] == $p['pestcontrol_id']): ?>
                      <option value="<?php echo $s['time']; ?>"><?php echo $s['time']; ?>
                  <?php endif; ?>
                  <?php endforeach; ?>  
                  <?php endforeach; ?>    
                </select>
             </div>
 -->

             <div class="col s6">
                <select class="browser-default" name="services">
                  <option value="" disabled selected>Choose Services</option>
                   <?php foreach($services->result() as $service): ?>
                  <?php foreach($providers as $p): ?>
                    <?php if($service->pestcontrol_id == $p['pestcontrol_id']): ?>
                 
                      <option value="<?php echo $service->service_price?>"><?php echo $service->service_name; ?>
                        
                      </option>
                  <?php endif; ?>  
                  <?php endforeach; ?>  
                  <?php endforeach; ?>  
                </select>
             </div>

              <div class="col s6">
                <select class="browser-default" name="meters">
                  <option value="" disabled selected>Square Meter</option>
                  <?php foreach($squaremeter->result() as $s): ?>
                    <option value="<?php echo $s->price?>"><?php echo $s->square; ?></option>
                  <?php endforeach; ?>  
                </select>
             </div>

        </div>
        <div class="card-action">
          <input type="submit" name="btnSubmit" class="btn btn-primary" value="Book">
        </div>
        </form>
      </div>
    </div>
  </div>


  <script>
    $(function(){

      var maxDate = year + '-' + month + '-' + day;
      //alert(maxDate);
    
    $('#txtdate').attr('min', maxDate);
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate() + 2;
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    //alert(maxDate);
    $('#txtdate').attr('min', maxDate);
});
  </script>
 <?php foreach ($pestcontrols->result() as $pest): ?>
                  <?php echo $pest->pestcontrol_detail; ?>
              <?php endforeach; ?></h5>    
              <br/>
              <h3>Our Services:</h3>

             <?php foreach($services->result() as $service): ?>
                    <?php foreach($getpest as $pest): ?>
                      <h3><?php 
                        if($service->pestcontrol_id == $pest['pestcontrol_id']):
                            echo $service->service_name;
                        ?>
                      
                       <br/>


        
                    <?php endif; ?></h3>
                    <?php endforeach; ?>  
                  <?php endforeach; ?>

                   <?php foreach($getpest as $pest): ?>
              <?php echo $pest['pestcontrol_name']; ?>
             <?php endforeach; ?>   
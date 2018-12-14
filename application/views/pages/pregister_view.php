<div class="container"><br/><br/>
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
</div>

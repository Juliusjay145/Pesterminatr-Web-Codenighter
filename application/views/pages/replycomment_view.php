<div class="col s6">
        <div class="card">
          <div class="card-image"><br/>
          <center>
            <img src="http://localhost/project/logo/building.png" style="width: 150px;">
          </center>  
          </div>
          <div class="card-content">
        
          <form method="POST" action="<?php echo base_url('replycomment/reply_comment')?>">

          <input type="hidden" name="comment_id" class="form-control" value="<?php echo $comments[0]['comment_id']; ?>">
            
          <div class="row margin"> 
            <div class="input-field col s12">
                <input class="form-control" name="txtreply" type="text">
              <label for="username" class="center-align">Reply Comment</label>
              <input type="submit" name="btnSubmit" value="comment" class="btn btn-primary">
            </div>
          </div>
          </div>
          <div class="card-action"> 
          </div>
          </form>
        </div>
      </div>
    </div>
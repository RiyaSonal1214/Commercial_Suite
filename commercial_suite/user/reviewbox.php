<?php include 'session.php';
      include 'con_db.php';
   
 ?>
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">User Review</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
              <div class="row">
              <div class="col-md-12">
            <form action="" method="post">

                        <div class="form-group">
                            <label>Give your review</label>
                            <textarea  pattern="[A-Za-z0-9\s]+" title="Alphanumberic value" name="review" class="form-control" placeholder="Review" rows="4"></textarea>
                        </div>
                       
                        <div class="form-group">
                            <input type="submit" name="save" value="Post" class="btn btn-success">
                        </div>
                    </form>
               </div> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
  
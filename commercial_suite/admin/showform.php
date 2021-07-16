<?php 
include 'con_db.php';
	$qid=$_GET['qid'];
?>
<form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Reply</label>
                        <textarea class="form-control" name="reply" placeholder="ENTER THE REPLY" required=""></textarea>
                        <input type="hidden" name="q_id" value="<?php echo $qid;?>">
                    </div>

                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-warning" name="post" value="Post" style="width:150px;margin:0px 100px 0px 10px;">
                    </div>
                </form>
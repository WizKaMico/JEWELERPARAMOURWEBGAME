<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['cid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Character</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php" enctype="multipart/form-data">
				<input type="hidden" class="form-control" name="cid" value="<?php echo $row['cid']; ?>">
				<div class="row form-group">
					<center><img src="<?php echo $row['photo']?>" height="120" width="150" /></center>
							<input type="hidden" name="previous" value="<?php echo $row['photo']?>"/>
					<div class="col-sm-2">
						<label class="control-label modal-label">Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="character_name" value="<?php echo $row['character_name']; ?>">
					</div>
				</div>

					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Speech:</label>
					</div>
					<div class="col-sm-10">
						<textarea class="form-control" name="speech" required><?php echo $row['speech']; ?></textarea>
				
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Photo:</label>
					</div>
					<div class="col-sm-10">
						<input type="file" class="form-control" name="photo" value="<?php echo $row['photo']?>" required="required"/>
					</div>
				</div>
			
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['cid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Character</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['character_name']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?cid=<?php echo $row['cid']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>
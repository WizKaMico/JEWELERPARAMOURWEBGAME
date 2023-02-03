<!-- Add Chapter -->
<div class="modal fade" id="addchapter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Chapter</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Chapter:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="chapter_name" required>
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>


<!-- Add Flow -->
<div class="modal fade" id="addflow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Flow</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_flow.php" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Chapter:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="chap_id" value="<?php echo $chap_id; ?>" required="" readonly="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Title:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="title" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Description:</label>
					</div>
					<div class="col-sm-10">
						<textarea class="form-control" name="description" rows="5" cols="10"></textarea>
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Background:</label>
					</div>
					<div class="col-sm-10">
						<input type="file" class="form-control" name="photo" required>
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>



<!-- Add Flow Question -->
<div class="modal fade" id="addflowquestion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Flow Question</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_flow_question.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Chapter:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="chap_id" value="<?php echo $chap_id; ?>" required="" readonly="">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Flow:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="flow_id" value="<?php echo $flow_id; ?>" required="" readonly="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Question:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="question" required>
					</div>
				</div>

				
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>


<!-- Add Flow Option -->
<div class="modal fade" id="addflowoption" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Flow Answer</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_flow_option.php">
				<input type="hidden" class="form-control" name="chap_id" value="<?php echo $chap_id; ?>" required="" readonly="">
				<input type="hidden" class="form-control" name="flow_id" value="<?php echo $flow_id; ?>" required="" readonly="">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Question:</label>
					</div>
					<div class="col-sm-10">
						<select name="qid" class="form-control" required>
						   <?php
							include_once('../../connection/connection.php');
							$asql = "SELECT * FROM flow_question WHERE chap_id = '$chap_id' AND flow_id = '$flow_id'";

							//use for MySQLi-OOP
							$queries = $conn->query($asql);
							while($arow = $queries->fetch_assoc()){
							?>
							 <option value="<?php echo $arow['qid']; ?>"><?php echo $arow['question']; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Option:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" name="option" class="form-control" required>
					</div>
				</div>
				

				
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>
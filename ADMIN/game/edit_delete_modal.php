<!-- Edit chapter -->
<div class="modal fade" id="editchapter_<?php echo $row['chap_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Chapter</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="chap_id" value="<?php echo $row['chap_id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Chapter:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="chapter_name" value="<?php echo $row['chapter_name']; ?>">
					</div>
				</div>
			
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:black; border-color:black;"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>


<!-- Edit flow -->
<div class="modal fade" id="editflow_<?php echo $row['flow_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Flow</h4></center>
            </div>
            <div class="modal-body">
            <div class="container-fluid">
            <form method="POST" action="edit_flow.php">
                <input type="hidden" class="form-control" name="flow_id" value="<?php echo $row['flow_id']; ?>">
                <input type="hidden" class="form-control" name="chap_id" value="<?php echo $row['chap_id']; ?>">
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Title:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>">
                    </div>
                </div>

                 <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Description:</label>
                    </div>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="description" cols="5" rows="10" required><?php echo $row['description']; ?></textarea>
                    </div>
                </div>
            
            </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:black; border-color:black;"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
            </form>
            </div>

        </div>
    </div>
</div>


<!-- Edit flow background -->
<div class="modal fade" id="editflowbackground_<?php echo $row['flow_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Flow Background</h4></center>
            </div>
            <div class="modal-body">
            <div class="container-fluid">
            <form method="POST" action="edit_flow_background.php" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="flow_id" value="<?php echo $row['flow_id']; ?>">
                <input type="hidden" class="form-control" name="chap_id" value="<?php echo $row['chap_id']; ?>">

                <center><img src="<?php echo $row['photo']?>" height="120" width="150" /></center>
                <br><br>
                <input type="hidden" name="previous" value="<?php echo $row['photo']?>"/>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Background:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="file" class="form-control"  name="photo" value="<?php echo $fetch['photo']?>">
                    </div>
                </div>

              
            
            </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:black; border-color:black;"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
            </form>
            </div>

        </div>
    </div>
</div>


<!-- Delete flow -->
<div class="modal fade" id="deleteflow_<?php echo $row['flow_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Flow</h4></center>
            </div>
            <div class="modal-body">    
                <p class="text-center">Are you sure you want to Delete Flow</p>
                <h2 class="text-center"><?php echo $row['title']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_flow.php?flow_id=<?php echo $row['flow_id']; ?>&chap_id=<?php echo $row['chap_id']; ?>" class="btn btn-danger" style="background-color:black; border-color:black;"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- Delete chapter -->
<div class="modal fade" id="deletechapter_<?php echo $row['chap_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Chapter</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete Chapter</p>
				<h2 class="text-center"><?php echo $row['chapter_name']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?chap_id=<?php echo $row['chap_id']; ?>" class="btn btn-danger" style="background-color:black; border-color:black;"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>





<!-- Edit flow Question-->
<div class="modal fade" id="editflowquestion_<?php echo $row['qid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Flow</h4></center>
            </div>
            <div class="modal-body">
            <div class="container-fluid">
            <form method="POST" action="edit_flow_question.php">
                <input type="hidden" class="form-control" name="flow_id" value="<?php echo $row['flow_id']; ?>">
                <input type="hidden" class="form-control" name="chap_id" value="<?php echo $row['chap_id']; ?>">
                <input type="hidden" class="form-control" name="qid" value="<?php echo $row['qid']; ?>">
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Question:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="question" value="<?php echo $row['question']; ?>">
                    </div>
                </div>

                 <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Answer:</label>
                    </div>
                    <div class="col-sm-10">
                     <select name="answer" class="form-control" required>
                           <?php
                         
                            $sql1 = "SELECT * FROM flow_option WHERE qid = '".$row['qid']."'";

                            //use for MySQLi-OOP
                            $queries1 = $conn->query($sql1);
                            while($arow1 = $queries1->fetch_assoc()){
                            ?>
                             <option value="<?php echo $arow1['option_id']; ?>"><?php echo $arow1['option']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            
            </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:black; border-color:black;"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
            </form>
            </div>

        </div>
    </div>
</div>

<!-- Delete flow question -->
<div class="modal fade" id="deleteflowquestion_<?php echo $row['qid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Question</h4></center>
            </div>
            <div class="modal-body">    
                <p class="text-center">Are you sure you want to Delete Question</p>
                <h2 class="text-center"><?php echo $row['question']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_question.php?qid=<?php echo $row['qid']; ?>&flow_id=<?php echo $row['flow_id']; ?>&chap_id=<?php echo $row['chap_id']; ?>" class="btn btn-danger" style="background-color:black; border-color:black;"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>


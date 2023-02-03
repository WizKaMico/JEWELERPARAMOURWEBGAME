<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary" style="background-color:black; border-color:black;"><span class="glyphicon glyphicon-plus"></span> New Character</a>
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<!-- <th>Photo</th> -->
						<th>Character Name</th>
						<th>Speech</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT * FROM main_character";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
								
									<td>".$row['character_name']."</td>
									<td><textarea  class='form-control my-2 textarea_".$row['cid']."' id='mybox_".$row['cid']."'>".$row['speech']."></textarea></td>
									<td>
										<a href='#edit_".$row['cid']."' class='btn btn-success btn-sm' style='background-color:black; border-color:black;' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span></a>
										<a href='#delete_".$row['cid']."' class='btn btn-danger btn-sm' style='background-color:black; border-color:black;' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> </a>
										  <button class='btn btn-primary my-4 convert_".$row['cid']."' style='background-color:black; border-color:black;'> Listen </button>
									</td>
								</tr>";
								include('edit_delete_modal.php');

								?>

								<script>

								let convert = document.querySelector(".convert_<?php echo $row['cid']; ?>");
								let speech = new SpeechSynthesisUtterance();
								let textarea = document.querySelector(".textarea_<?php echo $row['cid']; ?>");
								let volume = document.querySelector(".volume");
								let pitch = document.querySelector(".pitch");
								let rate = document.querySelector(".rate");

								function convertText(){

								speech.text = textarea.value;
								speech.pitch = 1;
								speech.volume = 1;
								speech.lang = "en-US";
								speech.rate = 1;

								speechSynthesis.speak(speech);
								}

								convert.addEventListener("click", ()=>{
								  convertText();
								});

								</script>
							<?php } 
							/////////////////

							//use for MySQLi Procedural
							// $query = mysqli_query($conn, $sql);
							// while($row = mysqli_fetch_assoc($query)){
							// 	echo
							// 	"<tr>
							// 		<td>".$row['id']."</td>
							// 		<td>".$row['firstname']."</td>
							// 		<td>".$row['lastname']."</td>
							// 		<td>".$row['address']."</td>
							// 		<td>
							// 			<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
							// 			<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
							// 		</td>
							// 	</tr>";
							// 	include('edit_delete_modal.php');
							// }
							/////////////////

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_modal.php') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- partial -->


<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</html>
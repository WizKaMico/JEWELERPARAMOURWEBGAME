<?php
	session_start();
	$chap_id = $_GET['chap_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
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
				<a href="#addflow" data-toggle="modal" class="btn btn-primary" style="background-color:black; border-color:black;"><span class="glyphicon glyphicon-plus"></span> Create Flow</a>
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>CHAPTER</th>
						<th>TITLE</th>
						<th>DESCRIPTION</th>
						<th>BACKGROUND</th>
						<th>ACTION</th>
					</thead>
					<tbody>
						<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT * FROM flow WHERE chap_id = '$chap_id'";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['chap_id']."</td>
									<td>".$row['title']."</td>
									<td>".$row['description']."</td>
									<td><img src='".$row['photo']."' style='width:50%; height:50px;'></td>
									<td>
										<a href='#editflow_".$row['flow_id']."' class='btn btn-success btn-sm' data-toggle='modal'  style='background-color:black; border-color:black;'><span class='glyphicon glyphicon-edit'></span></a>
										<a href='#editflowbackground_".$row['flow_id']."' class='btn btn-success btn-sm' data-toggle='modal'  style='background-color:black; border-color:black;'><span class='glyphicon glyphicon-picture'></span></a><br><br>
										<a href='#deleteflow_".$row['flow_id']."' class='btn btn-danger btn-sm' data-toggle='modal' style='background-color:black; border-color:black;'><span class='glyphicon glyphicon-trash'></span></a>
										<a href='flow_question.php?chap_id=".$row['chap_id']."&flow_id=".$row['flow_id']."' class='btn btn-success btn-sm' style='background-color:black; border-color:black;'><span class='	glyphicon glyphicon-list-alt'></span></a>
									
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}
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
								// <a href='flow.php?flow_id=".$row['flow_id']."' class='btn btn-success btn-sm' style='background-color:black; border-color:black;'><span class='	glyphicon glyphicon-list-alt'></span></a>
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
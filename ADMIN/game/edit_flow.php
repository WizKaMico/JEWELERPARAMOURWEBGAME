<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['edit'])){
		$chap_id = $_POST['chap_id'];
		$flow_id = $_POST['flow_id'];
		$title = $_POST['title'];
		$description = $_POST['description'];
		$sql = "UPDATE flow SET title = '$title', description = '$description' WHERE flow_id = '$flow_id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating';
		}
	}
	else{
		$_SESSION['error'] = 'Select chapter to edit first';
	}

	header('location: flow.php?chap_id='.$chap_id);

?>
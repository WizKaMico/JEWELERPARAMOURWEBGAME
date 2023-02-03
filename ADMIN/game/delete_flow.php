<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_GET['flow_id'])){
		$chap_id = $_GET['chap_id'];
		$sql = "DELETE FROM flow WHERE flow_id = '".$_GET['flow_id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting';
		}
	}
	else{
		$_SESSION['error'] = 'Select chapter to delete first';
	}

	header('location: flow.php?chap_id='.$chap_id);
?>
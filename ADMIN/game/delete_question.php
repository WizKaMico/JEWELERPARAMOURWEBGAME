<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_GET['qid'])){
		$chap_id = $_GET['chap_id'];
		$flow_id = $_GET['flow_id'];
		$sql = "DELETE FROM flow_question WHERE qid = '".$_GET['qid']."'";

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

	header('location: flow_question.php?chap_id='.$chap_id.'&flow_id='.$flow_id);
?>
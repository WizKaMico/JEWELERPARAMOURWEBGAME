<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['add'])){
		$flow_id = $_POST['flow_id']; 
		$chap_id = $_POST['chap_id'];
		$question = $_POST['question'];
		$answer = '';
		$sql = "INSERT INTO flow_question (flow_id, chap_id, question, answer) VALUES ('$flow_id', '$chap_id', '$question', '$answer')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Flow Question added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: flow_question.php?chap_id='.$chap_id.'&flow_id='.$flow_id);
?>
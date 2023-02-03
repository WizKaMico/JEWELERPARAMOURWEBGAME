<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['edit'])){
		$chap_id = $_POST['chap_id'];
		$chapter_name = $_POST['chapter_name'];
		$sql = "UPDATE chapter SET chapter_name = '$chapter_name' WHERE chap_id = '$chap_id'";

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

	header('location: index.php');

?>
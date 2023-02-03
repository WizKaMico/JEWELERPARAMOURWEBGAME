<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['add'])){
		$chapter_name = $_POST['chapter_name'];
		$sql = "INSERT INTO chapter (chapter_name) VALUES ('$chapter_name')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Chapter added successfully';
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

	header('location: index.php');
?>
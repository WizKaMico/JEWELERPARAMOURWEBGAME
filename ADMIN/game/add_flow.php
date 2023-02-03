<?php
	include_once('../../connection/connection.php');
	if(ISSET($_POST['add'])){
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$chap_id  = $_POST['chap_id'];
		$title = $_POST['title'];
		$description = $_POST['description'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		if(!is_dir("./upload"))
			mkdir("upload");
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				mysqli_query($conn, "INSERT INTO `flow` VALUES('', '$chap_id', '$title', '$description', '$path')") or die(mysqli_error());
				echo "<script>alert('flow saved!')</script>";
				header("location: flow.php?chap_id=".$chap_id);
			}	
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>
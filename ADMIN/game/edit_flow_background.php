<?php
	include_once('../../connection/connection.php');

	if(ISSET($_POST['edit'])){
		$flow_id = $_POST['flow_id'];
		$chap_id = $_POST['chap_id'];
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$previous = $_POST['previous'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		if(!is_dir("./upload"))
			mkdir("upload");
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(unlink($previous)){
				if(move_uploaded_file($image_temp, $path)){
					mysqli_query($conn, "UPDATE `flow` set  `photo` = '$path' WHERE `flow_id` = '$flow_id'") or die(mysqli_error());
					echo "<script>alert('updated!')</script>";
					header("location: flow.php?chap_id=".$chap_id);
				}
			}		
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>
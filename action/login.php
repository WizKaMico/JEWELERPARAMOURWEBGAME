<?php
    session_start();
	if (isset($_POST['login']))
		{
			include('../connection/connection.php');
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = mysqli_real_escape_string($conn, md5($_POST['password']));
 
			$query 		= mysqli_query($conn, "SELECT * FROM player WHERE  password='$password' and email='$email'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
 
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location: ../preview.php');
 
				}
			else
				{
					header('location: ../index.php?view=LOGIN&message=ERROR');
				}
		}
  ?>
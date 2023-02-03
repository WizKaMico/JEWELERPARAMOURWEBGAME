<?php 
include('connection/connection.php');
include('connection/session.php'); 
 
$result=mysqli_query($conn, "select * from player where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
$email = $row['email'];
$chap_play=mysqli_query($conn, "select * from player_chapter LEFT JOIN chapter ON player_chapter.chap_id = chapter.chap_id  where player_chapter.status = 'NEXT' and player_chapter.email='$email'")or die('Error In Session');
$crow=mysqli_fetch_array($chap_play);
 
 ?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
</style>
</head>
<body>

<video autoplay muted loop id="myVideo">
  <source src="assets/Short_Teaser.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="content">
  <h1>WELCOME! <?PHP echo strtoupper($row['fullname']); ?></h1>
  <p>NOTE: This game is JEWELERS PARAMOUR. This game depicts the novel the El filibustermo in which they focus on terrorism</p>
   <button id="myBtn"><a href="home.php?language=EN" style="text-decoration:none; color:white;">Continue to Game (ENGLISH)</a></button>
   <button id="myBtn"><a href="home.php?language=FIL" style="text-decoration:none; color:white;">Magpatuloy Sa Laro (TAGALOG)</a></button>
</div>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>

</body>
</html>

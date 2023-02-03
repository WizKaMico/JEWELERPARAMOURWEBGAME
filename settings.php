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
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="login/style.css">



<script>
var audio, playbtn, mutebtn, seekslider, volumeslider, seeking=false, seekto;
function initAudioPlayer(){
  audio = new Audio();
  audio.src = "https://www.soundjay.com/free-music/midnight-ride-01a.mp3";
  audio.loop = true;
  audio.play();
  // Set object references
  playbtn = document.getElementById("playpausebtn");
  mutebtn = document.getElementById("mutebtn");
  seekslider = document.getElementById("seekslider");
  volumeslider = document.getElementById("volumeslider");
  // Add Event Handling
  playbtn.addEventListener("click",playPause);
  mutebtn.addEventListener("click", mute);
  seekslider.addEventListener("mousedown", function(event){ seeking=true; seek(event); });
  seekslider.addEventListener("mousemove", function(event){ seek(event); });
  seekslider.addEventListener("mouseup",function(){ seeking=false; });
  volumeslider.addEventListener("mousemove", setvolume);
  // Functions
  function playPause(){
    if(audio.paused){
        audio.play();
        playbtn.style.background = "url(https://image.flaticon.com/icons/svg/189/189889.svg) no-repeat";
      } else {
        audio.pause();
        playbtn.style.background = "url(https://image.flaticon.com/icons/svg/148/148744.svg) no-repeat";
      }
  }
  function mute(){
    if(audio.muted){
        audio.muted = false;
        mutebtn.style.background = "url(https://image.flaticon.com/icons/svg/204/204287.svg) no-repeat";
      } else {
        audio.muted = true;
        mutebtn.style.background = "url(https://image.flaticon.com/icons/svg/148/148757.svg) no-repeat";
      }
  }
  function seek(event){
      if(seeking){
        seekslider.value = event.clientX - seekslider.offsetLeft;
          seekto = audio.duration * (seekslider.value / 100);
          audio.currentTime = seekto;
      }
    }
  function setvolume(){
      audio.volume = volumeslider.value / 100;
    }
}
window.addEventListener("load", initAudioPlayer);
</script>

</head>
<body style="background-image:url('login/main_menu.png');">
<!-- partial:index.partial.html -->
<section class="login">
  <div class="container">
   
   <?php if(!empty($_GET['view'])){ ?>
 
    <?php }else{ ?>
   <center>
    <h3 class="title">THE PARAMOUR JEWELER</h3>
   </center> 
    <form action="#" method="POST">
   
      <div class="form-group" style="margin-top:-20px;">
      <button id="playpausebtn">PLAY MUSIC</button>
      <input id="seekslider" type="range" min="0" max="100" value="0" step="1">
      </div>

    
      <div class="form-group" style="margin-top:20px;">
        <button id="mutebtn">STOP MUSIC</button>
      <input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
      </div>

       <div class="form-group" style="margin-top:-20px;">
          <button type="submit"><a href="logout.php" style="text-decoration:none;">SAVE</a></button>   
      </div>

       <div class="form-group" style="margin-top:-20px;">
          <button type="submit"><a href="home.php" style="text-decoration:none;">BACK</a></button>   
      </div>
      
    
    </form>
    
    
    <?php } ?>    
  </div>
</section>
<!-- partial -->
  
</body>
</html>

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

</head>
<body style="background-image:url('login/main_menu.png');">
<!-- partial:index.partial.html -->
<section class="login">
  <div class="container">
   
   <?php if(!empty($_GET['view'])){ ?>
 
    <?php }else{ ?>
    <?php if($_GET['language'] == 'EN'){ ?>   
   <center>
    <h3 class="title">THE PARAMOUR JEWELER</h3>
   </center> 
    <form action="#" method="POST">
   
      <div class="form-group">
        <?php if(!empty($crow['chapter_name'])){ ?>
          <button type="submit"><a href="<?php echo strtolower(str_replace(' ', '', $crow['chapter_name'])); ?>?email=<?php echo $row['email']; ?>" style="text-decoration:none;">CONTINUE TO PLAY</a></button>
        <?php } else { ?>
           <button type="submit"><a href="chapter1/?email=<?php echo $row['email']; ?>" style="text-decoration:none;">PLAY</a></button>
        <?php } ?>  
      </div>
      
  
     <div class="form-group" style="margin-top:-20px;">
          <button type="submit"><a href="chapter.php?email=<?php echo $row['email']; ?>" style="text-decoration:none;">CHAPTER SELECT</a></button>   
      </div>

      <div class="form-group" style="margin-top:-20px;">
          <button type="submit"><a href="character.php" style="text-decoration:none;">CHARACTER ACHIVES</a></button>   
      </div>

      <div class="form-group" style="margin-top:-20px;">
          <button type="submit"><a href="settings.php" style="text-decoration:none;">SETTINGS</a></button>   
      </div>

       <div class="form-group" style="margin-top:-20px;">
          <button type="submit"><a href="logout.php" style="text-decoration:none;">EXIT</a></button>   
      </div>
      
    
    </form>
  <?php } else {  ?>

    <center>
    <h3 class="title">ANG MAHAL NA MAG-AALAHAS</h3>
   </center> 
    <form action="#" method="POST">
   
      <div class="form-group">
        <?php if(!empty($crow['chapter_name'])){ ?>
          <button type="submit"><a href="<?php echo strtolower(str_replace(' ', '', $crow['chapter_name'])); ?>?email=<?php echo $row['email']; ?>" style="text-decoration:none;">MAGPATULOY SA PAGLALARO</a></button>
        <?php } else { ?>
           <button type="submit"><a href="chapter1/?email=<?php echo $row['email']; ?>" style="text-decoration:none;">MAGLARO</a></button>
        <?php } ?>  
      </div>
      
  
     <div class="form-group" style="margin-top:-20px;">
          <button type="submit"><a href="chapter.php?email=<?php echo $row['email']; ?>" style="text-decoration:none;">PUMILI NANG KABANATA</a></button>   
      </div>

      <div class="form-group" style="margin-top:-20px;">
          <button type="submit"><a href="character.php" style="text-decoration:none;">NAKAKAMIT ANG KARAKTER</a></button>   
      </div>

      <div class="form-group" style="margin-top:-20px;">
          <button type="submit"><a href="settings.php" style="text-decoration:none;">MGA SETTING</a></button>   
      </div>

       <div class="form-group" style="margin-top:-20px;">
          <button type="submit"><a href="logout.php" style="text-decoration:none;">UMALIS</a></button>   
      </div>
      
    
    </form>



  <?php  }  ?> 
    
    
    <?php } ?>    
  </div>
</section>
<!-- partial -->
  
</body>
</html>

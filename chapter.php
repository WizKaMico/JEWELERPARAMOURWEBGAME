<?php 
include('connection/connection.php');
include('connection/session.php'); 
 
$result=mysqli_query($conn, "select * from player where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
$email = $row['email'];

$resultx=mysqli_query($conn, "select *,count(id)  as TOTAL from player_completed_chapter where email='$email'")or die('Error In Session');
$rowx=mysqli_fetch_array($resultx);

// ECHO $rowx['TOTAL']; 
 ?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'><link rel="stylesheet" href="cols/style.css">
 <link rel="stylesheet" href="book/style.css">
</head>
<body style="background-image:url('login/GameIntro_BG_Image.gif');  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; background-size: cover;">
<!-- partial:index.partial.html -->
<div class="container-fluid">
  <div class="container">

 
 <button class="button button4"><a href="home.php" style="text-decoration:none; color:white;">HOME</a></button>
    <style type="text/css">
      
      .button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 20px;
  width:15%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
}

.button4 {border-radius: 12px;}


    </style>

  <div class="row">


  <?php
              include_once('connection/connection.php');
              $sql = "SELECT * FROM chapter";

              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){

                $chapter = $row['chap_id'];
                $resulty=mysqli_query($conn, "select * from player_chapter WHERE email = '$email' and chap_id = '$chapter'");
                $rowy=mysqli_fetch_array($resulty);
          
           
    ?>           
  
   <?php if($rowy['status'] == 'COMPLETED' OR $rowy['status'] == 'NEXT'){ ?>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-top:50px;">
        

    
      <figure class='book'>        
        <!-- Front -->        
        <ul class='hardcover_front'>
          <li>
            <img src="assets/book1.png" alt="" width="100%" height="100%">
            <span class="ribbon bestseller"><?php echo $row['chapter_name']; ?></span>
          </li>
          <li></li>
        </ul>        
        <!-- Pages -->        
        <ul class='page'>
          <li></li>
          <li>
            <a class="btn" href="<?php echo strtolower(str_replace(' ', '', $row['chapter_name'])); ?>?email=<?php echo $_GET['email']; ?>">PROCEED</a>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>        
        <!-- Back -->        
        <ul class='hardcover_back'>
          <li></li>
          <li></li>
        </ul>
        <ul class='book_spine'>
          <li></li>
          <li></li>
        </ul>
      </figure>      
      
    </div>
  <?php } else { ?>
     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-top:50px;">
        

    
      <figure class='book'>        
        <!-- Front -->        
        <ul class='hardcover_front'>
          <li>
            <img src="assets/book1_pad.png" alt="" width="100%" height="100%">
            <span class="ribbon bestseller"><?php echo $row['chapter_name']; ?></span>
          </li>
          <li></li>
        </ul>        
        <!-- Pages -->        
        <ul class='page'>
          <li></li>
          <li>
          <!--   <a class="btn" href="fade/index.php?email=<?php echo $_GET['email']; ?>">PROCEED</a> -->
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>        
        <!-- Back -->        
        <ul class='hardcover_back'>
          <li></li>
          <li></li>
        </ul>
        <ul class='book_spine'>
          <li></li>
          <li></li>
        </ul>
      </figure>      
      
    </div>


  <?php } ?>  
   
    <?php } ?>

       

  </div><!-- row -->
 
  </div><!-- container -->
  <br>
</div><!-- container fluid -->
<!-- partial -->
  <script  src="cols/script.js"></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>




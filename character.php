<?php 
include('connection/connection.php');
include('connection/session.php'); 
 
$result=mysqli_query($conn, "select * from player where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
 
 ?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'><link rel="stylesheet" href="cols/style.css">
 <link rel="stylesheet" href="book/style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
              $sql = "SELECT * FROM main_character";

              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){
    ?>            

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-top:50px;">
        

    
      <figure class='book'>        
        <!-- Front -->        
        <ul class='hardcover_front'>
          <li style="background-color:black;">
           <img src="ADMIN/content/<?php echo $row['photo']; ?>" alt="" width="100%" height="100%">
            <span class="ribbon bestseller" style="color:black;"><?php echo $row['character_name']; ?></span>
          </li>
          <li></li>
        </ul>        
        <!-- Pages -->        
        <ul class='page'>
          <li></li>
          <li>
            <button type="button" class="btn" data-toggle="modal" data-target="#myModal_<?php echo $row['cid']; ?>">CHARACTER INFORMATION</button>
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


    <!-- Modal -->
  <div class="modal fade" id="myModal_<?php echo $row['cid']; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         DISCOVER : <?php echo strtoupper($row['character_name']); ?>
        </div>
        <div class="modal-body">
          <textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10"><?php echo $row['speech']; ?></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
   
   
<?php } ?>

       

  </div><!-- row -->
 
  </div><!-- container -->
  <br>
</div><!-- container fluid -->
<!-- partial -->
  <script  src="cols/script.js"></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src = "speech/script.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- partial -->
  <script  src="speech/script.js"></script>

</body>
</html>





<?php 

$email = $_GET['email'];

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html>
<head>
	<title></title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="text.css">
	  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="check/style.css">
 <script src="puzzle.js"></script>

</head>
<?php if(!empty($_GET['view'])){ ?>

<?php if($_GET['view'] == '2NDVIEW'){ ?>

<body style="background-image:url('../assets/Lower_Deck_BG.gif');">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">
    There, below, other scenes were being enacted. Seated on benches or small wooden stools among valises, boxes, and baskets


</span>

<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">There, below, other scenes were being enacted. Seated on benches or small wooden stools among valises, boxes, and baskets</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=4THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

  <style type="text/css">
         
         .btn {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 30%;
           margin-top:300px;
         }

         .btn-primary {border-radius: 50px;}   

      </style>



</div>


<!-- <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=3RDVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script> -->

</body>

<?php } else if($_GET['view'] == '4THVIEW'){ ?>

 <body style="background-image:url('../assets/Lower_Deck_BG.gif');">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">
   a few feet from the engines, in the heat of the boilers, amid the human smells and the pestilential odor of oil, 


</span>

<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">a few feet from the engines, in the heat of the boilers, amid the human smells and the pestilential odor of oil,</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=5THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

  <style type="text/css">
         
         .btn {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 30%;
           margin-top:300px;
         }

         .btn-primary {border-radius: 50px;}   

      </style>



</div>


<!-- <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=3RDVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script> -->

</body>   

<?php } else if($_GET['view'] == '5THVIEW'){ ?>

 <body style="background-image:url('../assets/Lower_Deck_BG.gif');">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">
    were to be seen the great majority of the passengers. Some were silently gazing at the changing scenes along the banks, others were playing cards 



</span>

<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;"> were to be seen the great majority of the passengers. Some were silently gazing at the changing scenes along the banks, others were playing cards 
</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=6THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

  <style type="text/css">
         
         .btn {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 30%;
           margin-top:300px;
         }

         .btn-primary {border-radius: 50px;}   

      </style>



</div>


<!-- <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=3RDVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script> -->

</body>   


<?php } else if($_GET['view'] == '6THVIEW'){ ?>

 <body style="background-image:url('../assets/Lower_Deck_BG.gif');">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">
     or conversing in the midst of the scraping of shovels, the roar of the engine, the hiss of escaping steam, 



</span>

<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">  or conversing in the midst of the scraping of shovels, the roar of the engine, the hiss of escaping steam, 
</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=7THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

  <style type="text/css">
         
         .btn {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 30%;
           margin-top:300px;
         }

         .btn-primary {border-radius: 50px;}   

      </style>



</div>


<!-- <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=3RDVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script> -->

</body>   


<?php } else if($_GET['view'] == '7THVIEW'){ ?>

 <body style="background-image:url('../assets/Lower_Deck_BG.gif');">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">
    the swash of disturbed waters, and the shrieks of the whistle. In one corner, heaped up like corpses, slept, or tried to sleep,



</span>

<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">  the swash of disturbed waters, and the shrieks of the whistle. In one corner, heaped up like corpses, slept, or tried to sleep,
</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=8THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

  <style type="text/css">
         
         .btn {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 30%;
           margin-top:300px;
         }

         .btn-primary {border-radius: 50px;}   

      </style>



</div>


<!-- <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=3RDVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script> -->

</body>   



<?php } else if($_GET['view'] == '8THVIEW'){ ?>

 <body style="background-image:url('../assets/Lower_Deck_BG.gif');">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">
    a number of Chinese pedlers, seasick, pale, frothing through half-opened lips, and bathed in their copious perspiration.



</span>

<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">  a number of Chinese pedlers, seasick, pale, frothing through half-opened lips, and bathed in their copious perspiration.
</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=9THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

  <style type="text/css">
         
         .btn {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 30%;
           margin-top:300px;
         }

         .btn-primary {border-radius: 50px;}   

      </style>



</div>


<!-- <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=3RDVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script> -->

</body>   






<?php } else if($_GET['view'] == '9THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select * from main_character where character_name='Donya Victorina'");
$row=mysqli_fetch_array($result);   


?>  

<body style="background-image:url('background/dob.png'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
    <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:20%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">The elder, who was dressed in complete black, was the medical <br>[15]student, Basilio, famous for his successful<br> cures and extraordinary treatments,</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=10THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">The elder, who was dressed in complete black, was the medical <br>[15]student, Basilio, famous for his successful<br> cures and extraordinary treatments,</p>

</div>

  <style type="text/css">
         
         .btn {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 30%;
           margin-top:-300px;
         }

         .btn-primary {border-radius: 50px;}   

      </style>



<?php } else if($_GET['view'] == '10THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select * from main_character where character_name='Temporary Character'");
$row=mysqli_fetch_array($result);   


?>  

<body style="background-image:url('background/dob.png'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
    <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:30%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">while the other, taller and more robust, although much younger, <br> was Isagani, one of the poets, or at <br> least rimesters, who that year came from the Ateneo<br>,1 a curious character, ordinarily quite<br> taciturn and uncommunicative.</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=11THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">while the other, taller and more robust, although much younger, <br> was Isagani, one of the poets, or at <br> least rimesters, who that year came from the Ateneo<br>,1 a curious character, ordinarily quite<br> taciturn and uncommunicative.</p>

</div>

  <style type="text/css">
         
         .btn {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 30%;
           margin-top:-300px;
         }

         .btn-primary {border-radius: 50px;}   

      </style>

<?php } else if($_GET['view'] == '11THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select * from main_character where character_name='Temporary Character'");
$row=mysqli_fetch_array($result);   


?>  

<body style="background-image:url('background/dob.png'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
    <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:30%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">The man talking with them was the rich Capitan Basilio, who was returning from a business trip to Manila.</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=12THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">The man talking with them was the rich Capitan Basilio,<br> who was returning from a business trip to Manila.</p>

</div>

  <style type="text/css">
         
         .btn {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 30%;
           margin-top:-300px;
         }

         .btn-primary {border-radius: 50px;}   

      </style>

<?php } else if($_GET['view'] == '12THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select * from main_character where character_name='Temporary Character'");
$row=mysqli_fetch_array($result);   


?>  

<body style="background-image:url('background/dob.png'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
    <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:30%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">Capitan Tiago is getting along about the same as usual, yes, sir,” said the student Basilio, shaking his head</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=13THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">Capitan Tiago is getting along about the same<br> as usual, yes, sir,”<br> said the student Basilio, shaking his head</p>

</div>

  <style type="text/css">
         
         .btn {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 30%;
           margin-top:-300px;
         }

         .btn-primary {border-radius: 50px;}   

      </style>

<?php } else if($_GET['view'] == '13THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select * from main_character where character_name='Temporary Character'");
$row=mysqli_fetch_array($result);   


?>  

<body style="background-image:url('background/dob.png'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
    <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:30%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">He won’t submit to any treatment. At the advice of a certain person he is sending me to San Diego under the pretext of looking after his property, but in reality so that he may be left to </textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=14THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">He won’t submit to any treatment.<br> At the advice of a certain person he is sending<br> me to San Diego under the pretext of looking<br> after his property, but in reality so that<br> he may be left to </p>

</div>

  <style type="text/css">
         
         .btn {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 30%;
           margin-top:-300px;
         }

         .btn-primary {border-radius: 50px;}   

      </style>

<?php } else if($_GET['view'] == '14THVIEW'){ ?>


<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='Temporary_Character'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('background/dob.png'); ">
<div class="text-anim" style="margin-top:400px;">

  <!-- <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-600px;margin-right:-1200px;"> -->

</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '11'");
              $row=mysqli_fetch_array($result); 
               echo "<p style='font-size:20px;'>".strtoupper($row['question'])."</p>";
              $qid = $row['qid'];
                     $sql = "SELECT * FROM flow_option WHERE qid = '$qid'";

                     //use for MySQLi-OOP
                     $query = $conn->query($sql);
                     while($row = $query->fetch_assoc()){
      ?>                
      <label style="font-size:20px;">
         <input type="radio" name="answer" value="<?php echo $row['option_id']; ?>" CHE/>
         <span><?php echo $row['option']; ?></span>
      </label>
      
      <?php } ?>
          <style type="text/css">
         
         .button {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 100%;
         }

         .button1 {border-radius: 50px;}   

      </style>
     <label style="font-size:20px;">
      <button name="submit" class="button button1">PROCEED</button>
     </label>
   </form>

   <?php 

    if(isset($_POST['submit'])){
  
      $answer = $_POST['answer']; 

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '11'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
       $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('2', '$qid', '$email')");  
          header('Location:index.php?view=15THVIEW&email='.$email); 
      }else{
          header('Location:index.php?view=14THVIEW&email='.$email);
      }

    }

   ?>
</div>


</body>


<?php } else if($_GET['view'] == '15THVIEW'){ ?>


<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='Temporary Character' OR character_name='Temporary Character'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('background/dob.png'); ">
<div class="text-anim" style="margin-top:400px;">

 <!--  <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-600px;margin-right:-1200px;"> -->

</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '12'");
              $row=mysqli_fetch_array($result); 
               echo "<p style='font-size:20px;'>".strtoupper($row['question'])."</p>";
              $qid = $row['qid'];
                     $sql = "SELECT * FROM flow_option WHERE qid = '$qid'";

                     //use for MySQLi-OOP
                     $query = $conn->query($sql);
                     while($row = $query->fetch_assoc()){
      ?>                
      <label style="font-size:20px;">
         <input type="radio" name="answer" value="<?php echo $row['option_id']; ?>" CHE/>
         <span><?php echo $row['option']; ?></span>
      </label>
      
      <?php } ?>
          <style type="text/css">
         
         .button {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 100%;
         }

         .button1 {border-radius: 50px;}   

      </style>
     <label style="font-size:20px;">
      <button name="submit" class="button button1">PROCEED</button>
     </label>
   </form>

   <?php 

    if(isset($_POST['submit'])){
  
      $answer = $_POST['answer']; 

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '12'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
       $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('2', '$qid', '$email')");  
          header('Location:index.php?view=16THVIEW&email='.$email); 
      }else{
          header('Location:index.php?view=15THVIEW&email='.$email);
      }

    }

   ?>
</div>


</body>   


<?php } else if($_GET['view'] == '16THVIEW'){ ?>


<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='Temporary Character' OR character_name='Temporary Character'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('background/dob.png'); ">
<div class="text-anim" style="margin-top:400px;">

<!--   <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-600px;margin-right:-1200px;"> -->

</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '13'");
              $row=mysqli_fetch_array($result); 
               echo "<p style='font-size:20px;'>".strtoupper($row['question'])."</p>";
              $qid = $row['qid'];
                     $sql = "SELECT * FROM flow_option WHERE qid = '$qid'";

                     //use for MySQLi-OOP
                     $query = $conn->query($sql);
                     while($row = $query->fetch_assoc()){
      ?>                
      <label style="font-size:20px;">
         <input type="radio" name="answer" value="<?php echo $row['option_id']; ?>" CHE/>
         <span><?php echo $row['option']; ?></span>
      </label>
      
      <?php } ?>
          <style type="text/css">
         
         .button {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 100%;
         }

         .button1 {border-radius: 50px;}   

      </style>
     <label style="font-size:20px;">
      <button name="submit" class="button button1">PROCEED</button>
     </label>
   </form>

   <?php 

    if(isset($_POST['submit'])){
  
      $answer = $_POST['answer']; 

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '13'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
       $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('2', '$qid', '$email')");  
          header('Location:index.php?view=17THVIEW&email='.$email); 
      }else{
          header('Location:index.php?view=16THVIEW&email='.$email);
      }

    }

   ?>
</div>


</body>   



<?php } else if($_GET['view'] == '17THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='Temporary Character' OR character_name='Temporary Character'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('background/dob.png'); ">
<div class="text-anim" style="margin-top:400px;">

<!--   <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-600px;margin-right:-1200px;"> -->

</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '14'");
              $row=mysqli_fetch_array($result); 
               echo "<p style='font-size:20px;'>".strtoupper($row['question'])."</p>";
              $qid = $row['qid'];
                     $sql = "SELECT * FROM flow_option WHERE qid = '$qid'";

                     //use for MySQLi-OOP
                     $query = $conn->query($sql);
                     while($row = $query->fetch_assoc()){
      ?>                
      <label style="font-size:20px;">
         <input type="radio" name="answer" value="<?php echo $row['option_id']; ?>" CHE/>
         <span><?php echo $row['option']; ?></span>
      </label>
      
      <?php } ?>
          <style type="text/css">
         
         .button {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 100%;
         }

         .button1 {border-radius: 50px;}   

      </style>
     <label style="font-size:20px;">
      <button name="submit" class="button button1">PROCEED</button>
     </label>
   </form>

   <?php 

    if(isset($_POST['submit'])){
  
      $answer = $_POST['answer']; 

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '14'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
       $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('2', '$qid', '$email')");  
          header('Location:index.php?view=18THVIEW&email='.$email); 
      }else{
          header('Location:index.php?view=17THVIEW&email='.$email);
      }

    }

   ?>
</div>


</body>   



<?php } else if($_GET['view'] == '18THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='Temporary Character' OR character_name='Temporary Character'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('background/dob.png'); ">
<div class="text-anim" style="margin-top:400px;">

<!--   <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-600px;margin-right:-1200px;"> -->

</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '15'");
              $row=mysqli_fetch_array($result); 
               echo "<p style='font-size:20px;'>".strtoupper($row['question'])."</p>";
              $qid = $row['qid'];
                     $sql = "SELECT * FROM flow_option WHERE qid = '$qid'";

                     //use for MySQLi-OOP
                     $query = $conn->query($sql);
                     while($row = $query->fetch_assoc()){
      ?>                
      <label style="font-size:20px;">
         <input type="radio" name="answer" value="<?php echo $row['option_id']; ?>" CHE/>
         <span><?php echo $row['option']; ?></span>
      </label>
      
      <?php } ?>
          <style type="text/css">
         
         .button {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 100%;
         }

         .button1 {border-radius: 50px;}   

      </style>
     <label style="font-size:20px;">
      <button name="submit" class="button button1">PROCEED</button>
     </label>
   </form>

   <?php 

    if(isset($_POST['submit'])){
  
      $answer = $_POST['answer']; 

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '15'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
       $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('2', '$qid', '$email')");  
          header('Location:index.php?view=19THVIEW&email='.$email); 
      }else{
          header('Location:index.php?view=18THVIEW&email='.$email);
      }

    }

   ?>
</div>


</body>       


<?php } else if($_GET['view'] == '19THVIEW'){ ?>


<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='Temporary Character' OR character_name='Temporary Character'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('background/dob.png'); ">
<div class="text-anim" style="margin-top:400px;">

<!--   <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-600px;margin-right:-1200px;">
 -->
</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '16'");
              $row=mysqli_fetch_array($result); 
               echo "<p style='font-size:20px;'>".strtoupper($row['question'])."</p>";
              $qid = $row['qid'];
                     $sql = "SELECT * FROM flow_option WHERE qid = '$qid'";

                     //use for MySQLi-OOP
                     $query = $conn->query($sql);
                     while($row = $query->fetch_assoc()){
      ?>                
      <label style="font-size:20px;">
         <input type="radio" name="answer" value="<?php echo $row['option_id']; ?>" CHE/>
         <span><?php echo $row['option']; ?></span>
      </label>
      
      <?php } ?>
          <style type="text/css">
         
         .button {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 100%;
         }

         .button1 {border-radius: 50px;}   

      </style>
     <label style="font-size:20px;">
      <button name="submit" class="button button1">PROCEED</button>
     </label>
   </form>

   <?php 

    if(isset($_POST['submit'])){
  
      $answer = $_POST['answer']; 

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '16'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
       $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('2', '$qid', '$email')");  
          header('Location:index.php?view=20THVIEW&email='.$email); 
      }else{
          header('Location:index.php?view=19THVIEW&email='.$email);
      }

    }

   ?>
</div>


</body>           


<?php } else if($_GET['view'] == '20THVIEW'){ ?>


<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='Temporary Character' OR character_name='Temporary Character'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('background/dob.png'); ">
<div class="text-anim" style="margin-top:400px;">

<!--   <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-600px;margin-right:-1200px;"> -->

</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '17'");
              $row=mysqli_fetch_array($result); 
               echo "<p style='font-size:20px;'>".strtoupper($row['question'])."</p>";
              $qid = $row['qid'];
                     $sql = "SELECT * FROM flow_option WHERE qid = '$qid'";

                     //use for MySQLi-OOP
                     $query = $conn->query($sql);
                     while($row = $query->fetch_assoc()){
      ?>                
      <label style="font-size:20px;">
         <input type="radio" name="answer" value="<?php echo $row['option_id']; ?>" CHE/>
         <span><?php echo $row['option']; ?></span>
      </label>
      
      <?php } ?>
          <style type="text/css">
         
         .button {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 100%;
         }

         .button1 {border-radius: 50px;}   

      </style>
     <label style="font-size:20px;">
      <button name="submit" class="button button1">PROCEED</button>
     </label>
   </form>

   <?php 

    if(isset($_POST['submit'])){
  
      $answer = $_POST['answer']; 

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '17'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
       $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('2', '$qid', '$email')");  
          header('Location:index.php?view=21THVIEW&email='.$email); 
      }else{
          header('Location:index.php?view=20THVIEW&email='.$email);
      }

    }

   ?>
</div>


</body>         


<?php } else if($_GET['view'] == '21THVIEW'){ ?>
    <body style="background-image:url('background/dob.png'); ">
    <div class="container" style="margin-top:600px;">
   <form action="#" method="POST">
   
     <style type="text/css">
         
         .button {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 100%;
         }

         .button1 {border-radius: 50px;}   

      </style>
     <label style="font-size:20px;">
      <button name="submit" class="button button1">PROCEED</button>
     </label>
   </form>

   <?php 

    if(isset($_POST['submit'])){
    
          $email = $_GET['email'];
        $status = 'COMPLETED';
        $stat = 'NEXT';
   include('../connection/connection.php');
          mysqli_query($conn,"UPDATE player_chapter SET status = 'COMPLETED' WHERE chap_id = 2 AND email = '$email'");  
           mysqli_query($conn,"INSERT INTO player_chapter (chap_id, email, status) VALUES ('3', '$email', '$stat')");  
          header('Location:../chapter.php?email='.$email);  

    }

   ?>
</div>


    <iframe src="puzzle/" style="width:100%; height:500px; margin-top:300px;"></iframe>
    
   

    </body>



<?php } else { ?>


<?php } ?>
<?php } else { ?>
<body>
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">CHAPTER 2 : THE REIGN OF GREED BY DR. JOSE RIZAL</span>

</div>


<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">CHAPTER 2</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=2NDVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

  <style type="text/css">
         
         .btn {
           background-color: #04AA6D; /* Green */
           border: none;
           color: white;
           padding: 20px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
           width: 30%;
           margin-top:300px;
         }

         .btn-primary {border-radius: 50px;}   

      </style>

<!-- 
 <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=2NDVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script>
 -->
</body>
<?php } ?>
</html>
<!-- partial -->

  <script  src="./script.js"></script>
  <script src = "../speech/script.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- partial -->
  <script  src="../speech/script.js"></script>


</body>
</html>

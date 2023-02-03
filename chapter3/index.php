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
    When Padre Florentino joined the group above, having discussion with the people on the upper deck. At that moment Simoun’s head appeared above the hatchway.



</span>

<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">When Padre Florentino joined the group above, having discussion with the people on the upper deck. At that moment Simoun’s head appeared above the hatchway.</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=3THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

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


<?php } else if($_GET['view'] == '3THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select * from main_character where character_name='Don Custodio'");
$row=mysqli_fetch_array($result);   


?>  

<body style="background-image:url('../assets/Lower_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
    <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:20%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">Well, where’ve you been keeping yourself?” Don Custodio called to him, having forgotten all about their dispute. You’re missing the prettiest part of the trip!</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=4THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">Well, where’ve you been keeping yourself?”<br> Don Custodio called to him,<br> having forgotten all about their dispute.<br>
You’re missing the prettiest part of the trip!
   </p>

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



<?php } else if($_GET['view'] == '4THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select * from main_character where character_name='Simoun'");
$row=mysqli_fetch_array($result);   


?>  

<body style="background-image:url('../assets/Lower_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
    <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:30%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">Pshaw!” retorted Simoun, as he ascended, I’ve seen so many rivers and landscapes that…</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=5THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">Pshaw!” retorted Simoun, as he ascended,<br> I’ve seen so many rivers and landscapes that…</p>

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



<?php } else if($_GET['view'] == '5THVIEW'){ ?>


<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='Simoun'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('../assets/Lower_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

  <!-- <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-600px;margin-right:-1200px;"> -->

</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '18'");
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

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '18'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
       $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('3', '$qid', '$email')");  
          header('Location:index.php?view=6THVIEW&email='.$email); 
      }else{
          header('Location:index.php?view=5THVIEW&email='.$email);
      }

    }

   ?>
</div>


</body>


<?php } else if($_GET['view'] == '6THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select * from main_character where character_name='Temporary Character'");
$row=mysqli_fetch_array($result);   


?>  

<body style="background-image:url('../assets/Lower_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
    <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:30%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">“As for legends, the Pasig has a few,” observed the captain, <br>who did not relish any depreciation of the <br>river where he navigated and earned his livelihood.
</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=7THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">“As for legends, the Pasig has a few,” observed the captain, <br>who did not relish any depreciation of the <br>river where he navigated and earned his livelihood.</p>

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

<?php } else if($_GET['view'] == '7THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select * from main_character where character_name='Temporary Character'");
$row=mysqli_fetch_array($result);   


?>  

<body style="background-image:url('../assets/Lower_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
    <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:30%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">“Here you have that of Malapad-na-bato, a rock sacred before the coming of the Spaniards as the abode of spirits. Afterwards,
</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=8THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">“Here you have that of Malapad-na-bato, <br>a rock sacred before the coming of the<br> Spaniards as the abode of spirits. Afterwards,</p>

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


<?php } else if($_GET['view'] == '8THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select * from main_character where character_name='Temporary Character'");
$row=mysqli_fetch_array($result);   


?>  

<body style="background-image:url('../assets/Lower_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
    <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:30%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">“when the superstition had been dissipated and the rock profaned, it was converted into a nest of tulisanes, since from its crest they easily captured the luckless bankas, which had to contend against both the currents and men.
</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=9THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">“when the superstition had been dissipated and the rock profaned,<br> it was converted into a nest of tulisanes,<br> since from its crest they easily captured the luckless<br> bankas, which had to contend against<br> both the currents and men. </p>

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



<?php } else if($_GET['view'] == '9THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select * from main_character where character_name='Temporary Character'");
$row=mysqli_fetch_array($result);   


?>  

<body style="background-image:url('../assets/Lower_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
    <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:30%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">“Later, in our time, in spite of human interference, there are still told stories about wrecked bankas, and if on rounding it I didn’t steer with my six senses, .
</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=10THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">“Later, in our time, in spite of human interference,<br> there are still told stories about wrecked bankas,<br> and if on rounding it I didn’t steer with my six senses, </p>

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

<body style="background-image:url('../assets/Lower_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
    <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:30%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">“I’d be smashed against its sides. Then you have another legend, that of Doña Jeronima’s cave, which Padre Florentino can relate to you.”.
</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=11THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">“I’d be smashed against its sides. Then you have another legend,<br> that of Doña Jeronima’s cave, which <br>Padre Florentino can relate to you.”</p>

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

$result=mysqli_query($conn, "select * from main_character where character_name='Padre Sibyla'");
$row=mysqli_fetch_array($result);   


?>  

<body style="background-image:url('../assets/Lower_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
    <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:30%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">“Everybody knows that,” remarked Padre Sibyla disdainfully.
</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=12THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">“Everybody knows that,” <br>remarked Padre Sibyla disdainfully.</p>

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

$result=mysqli_query($conn, "select * from main_character where character_name='Benzayb'");
$row=mysqli_fetch_array($result);   


?>  

<body style="background-image:url('../assets/Lower_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
    <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:30%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">“A beautiful legend!” exclaimed Ben-Zayb. “I’m going to write an article about it. It’s sentimental!”
</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=13THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">“A beautiful legend!” exclaimed Ben-Zayb.<br> “I’m going to write an article about it.<br> It’s sentimental!”</p>

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

$result=mysqli_query($conn, "select * from main_character where character_name='Donya Victorina'");
$row=mysqli_fetch_array($result);   


?>  

<body style="background-image:url('../assets/Lower_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
    <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:30%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">“But what’s your opinion about that, Padre Salvi?” he asked the Franciscan, who seemed to be absorbed in thought.
</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=14THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">“But what’s your opinion about that, Padre Salvi?”<br> he asked the Franciscan, who seemed<br> to be absorbed in thought.</p>

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

$result=mysqli_query($conn, "select * from main_character where character_name='Donya Victorina'");
$row=mysqli_fetch_array($result);   


?>  

<body style="background-image:url('../assets/Lower_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
    <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:30%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">Doesn’t it seem to you as though his Grace, instead of giving her a cave, ought to have placed her in a nunnery—in St. Clara’s, for example? What do you say?”
</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=15THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">Doesn’t it seem to you as though his Grace,<br> instead of giving her a cave, ought to have<br> placed her in a nunnery—in St. Clara’s,<br> for example? What do you say?”</p>

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


<?php } else if($_GET['view'] == '15THVIEW'){ ?>


<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='Temporary Character' OR character_name='Simoun'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('../assets/Lower_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

<!--   <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-600px;margin-right:-1200px;"> -->

</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '19'");
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

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '19'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
       $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('3', '$qid', '$email')");  
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

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '20'");
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

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '20'");
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
          mysqli_query($conn,"UPDATE player_chapter SET status = 'COMPLETED' WHERE chap_id = 3 AND email = '$email'");  
           mysqli_query($conn,"INSERT INTO player_chapter (chap_id, email, status) VALUES ('4', '$email', '$stat')");  
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
<span style="color:maroon;">CHAPTER 3 : THE REIGN OF GREED BY DR. JOSE RIZAL</span>

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

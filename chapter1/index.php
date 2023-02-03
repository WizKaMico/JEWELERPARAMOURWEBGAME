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

</head>
<?php if(!empty($_GET['view'])){ ?>

<?php if($_GET['view'] == '2NDVIEW'){ ?>

<body style="background-image:url('background/el_fili.png');">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">
    EL Filibusterusmo, the second of Jose Rizal's Novals of Philippine Life, is a story of the last days of the Spanish regime in the Philippines. Under the name of The Reign Of Creed



</span>

<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">EL Filibusterusmo, the second of Jose Rizal's Novals of Philippine Life, is a story of the last days of the Spanish regime in the Philippines. Under the name of The Reign Of Creed</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=3RDVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

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

<?php } else if($_GET['view'] == '3RDVIEW'){ ?>

<body style="background-image:url('background/gomburza.png');">
<div  style="margin-top:400px;">
<span style="color:maroon;">To the memory of the priests, Don Mariano Gomez (85 years old), Don Jose Burgos (30 years old), and Don Jacinto Zamora (35 Years Old). Executed in Bayumbayan field on the 28th of February, 1872.</span>
</div>

<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">To the memory of the priests, Don Mariano Gomez (85 years old), Don Jose Burgos (30 years old), and Don Jacinto Zamora (35 Years Old). Executed in Bayumbayan field on the 28th of February, 1872.</textarea>
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


<!-- <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=4THVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script> -->



</body>


<?php } else if($_GET['view'] == '4THVIEW'){ ?>

<body style="background-image:url('background/bapor.png');  no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">It well began on the December morning in the Pasig River</span>
</div>

<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">It well began on the December morning in the Pasig River</textarea>
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


<!-- <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=5THVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script> -->

</body>

<?php } else if($_GET['view'] == '5THVIEW'){ ?>

<body style="background-image:url('background/bapor.png');  no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">One morning in December, a heavily built steamer Tabo was laboriously ascending the tortuous course of the Pasig, carrying a large crowd of passengers toward the province of La Laguna.</span>
</div>

<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">One morning in December, a heavily built steamer Tabo was laboriously ascending the tortuous course of the Pasig, carrying a large crowd of passengers toward the province of La Laguna.</textarea>
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


<!-- <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=6THVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script> -->

</body>

<?php } else if($_GET['view'] == '6THVIEW'){ ?>


<body style="background-image:url('../assets/Upper_Deck_BG.gif');  no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">On the lower deck appear brown faces and black heads, types of Indians,1 Chinese, and mestizos, wedged in between bales of merchandise and boxes.</span>
</div>

<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">On the lower deck appear brown faces and black heads, types of Indians,1 Chinese, and mestizos, wedged in between bales of merchandise and boxes.</textarea>
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

<!-- <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=7THVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script> -->
</body>
<?php } else if($_GET['view'] == '7THVIEW'){ ?>

<body style="background-image:url('../assets/Upper_Deck_BG.gif');  no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">while there on the upper deck, beneath an awning that protects them from the sun, are seated in comfortable chairs a few passengers dressed in the fashion of Europeans, friars, and government clerks, each with his puro cigar, and gazing at the landscape apparently without heeding the efforts of the captain and the sailors to overcome the obstacles in the river.</span>
</div>


<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">while there on the upper deck, beneath an awning that protects them from the sun, are seated in comfortable chairs a few passengers dressed in the fashion of Europeans, friars, and government clerks, each with his puro cigar, and gazing at the landscape apparently without heeding the efforts of the captain and the sailors to overcome the obstacles in the river.</textarea>
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
<!-- 
<script>
         setTimeout(function(){
            window.location.href = 'index.php?view=8THVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script> -->


</body>

<?php } else if($_GET['view'] == '8THVIEW'){ ?>

<body style="background-image:url('../assets/Upper_Deck_BG.gif');  no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">while there on the upper deck, beneath an awning that protects them from the sun, are seated in comfortable chairs a few passengers dressed in the fashion of Europeans, friars, and government clerks, each with his puro cigar, and gazing at the landscape apparently without heeding the efforts of the captain and the sailors to overcome the obstacles in the river.</span>
</div>

<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">while there on the upper deck, beneath an awning that protects them from the sun, are seated in comfortable chairs a few passengers dressed in the fashion of Europeans, friars, and government clerks, each with his puro cigar, and gazing at the landscape apparently without heeding the efforts of the captain and the sailors to overcome the obstacles in the river.</textarea>
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


<!-- <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=9THVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script>
 -->

</body>

<?php } else if($_GET['view'] == '9THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select * from main_character where character_name='Don Custodio'");
$row=mysqli_fetch_array($result);	


?>	

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

<span style="color:maroon;">
	<img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:20%; margin-top:-300px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">Don Custodio who was sleeping peacefully, satisfied with his projects</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=10THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">	Don Custodio who was sleeping peacefully,<br> satisfied with his projects;</p>

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

<!-- 
<script>
         setTimeout(function(){
            window.location.href = 'index.php?view=10THVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script>
 -->

</body>

<?php } else if($_GET['view'] == '10THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select * from main_character where character_name='Benzayb'");
$row=mysqli_fetch_array($result);	


?>	

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;" >
<span style="color:maroon;">
	<img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:20%; margin-top:-350px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">a prolific writer like Ben-Zayb (anagram of Ibañez), who believed that the people of Manila thought because he, Ben-Zayb, was a thinker</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=11THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">a prolific writer like Ben-Zayb (anagram of Ibañez),<br> who believed that the people of Manila thought because he,<br> Ben-Zayb, was a thinker</p>
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

<!-- 
<script>
         setTimeout(function(){
            window.location.href = 'index.php?view=11THVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script>
 -->

</body>

<?php } else if($_GET['view'] == '11THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select * from main_character where character_name='Padre Irene'");
$row=mysqli_fetch_array($result);	


?>	

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">
	<img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:20%; margin-top:-400px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">a canon like Padre Irene,<br> who added luster to the clergy with his rubicund face,<br> carefully shaven,<br> from which towered a beautiful Jewish nose,<br> and his silken cassock of neat cut and small buttons</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=12THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>
<p  style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">a canon like Padre Irene,<br> who added luster to the clergy with his rubicund face,<br> carefully shaven,<br> from which towered a beautiful Jewish nose,<br> and his silken cassock of neat cut and small buttons</p>
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

<!-- <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=12THVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script>
 -->

</body>

<?php } else if($_GET['view'] == '12THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select * from main_character where character_name='Simoun'");
$row=mysqli_fetch_array($result);	


?>	

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">
	<img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:20%; margin-top:-350px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">a wealthy jeweler like Simoun,<br> who was reputed to be the adviser and<br> inspirer of all the acts of his Excellency</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=13THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">a wealthy jeweler like Simoun,<br> who was reputed to be the adviser and<br> inspirer of all the acts of his Excellency</p>
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


<!-- <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=13THVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script>
 -->

</body>

<?php } else if($_GET['view'] == '13THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select * from main_character where character_name='Donya Victorina'");
$row=mysqli_fetch_array($result);	


?>	

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">
	<img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:20%; margin-top:-350px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">Doña Victorina was well known in the country<br> for her caprices and extravagances and she<br> married a poor wretch named Don Tiburcio de Espadaña,</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=14THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>

<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;"> Doña Victorina was well known in the country<br> for her caprices and extravagances and she<br> married a poor wretch named Don Tiburcio de Espadaña,</p>
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


<!-- <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=14THVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script>
 -->

</body>

<?php } else if($_GET['view'] == '14THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='Benzayb_c_mouth' OR character_name='Benzayb_o_mouth'");
$row=mysqli_fetch_array($result);	


?>	

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">
	<img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:20%; margin-top:-450px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">Ben-Zayb,<br> the journalist with the countenance of a friar, was disputing <br> with a young friar who in turn had the countenance of an<br> artilleryman. Both were shouting, gesticulating, waving their arms,<br> spreading out their hands, [6]stamping their feet, talking of levels,<br> fish-corrals, the San Mateo River,2 of cascos, of Indians, and so on,<br> to the great satisfaction of their listeners and the undisguised disgust<br> of an elderly Franciscan, remarkably thin and withered, and a handsome<br> Dominican about whose lips flitted constantly a scornful smile.</textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=15THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>
<p style="color:maroon; margin-top:-80px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;"> Ben-Zayb,<br> the journalist with the countenance of a friar, was disputing <br> with a young friar who in turn had the countenance of an<br> artilleryman. Both were shouting, gesticulating, waving their arms,<br> spreading out their hands, [6]stamping their feet, talking of levels,<br> fish-corrals, the San Mateo River,2 of cascos, of Indians, and so on,<br> to the great satisfaction of their listeners and the undisguised disgust<br> of an elderly Franciscan, remarkably thin and withered, and a handsome<br> Dominican about whose lips flitted constantly a scornful smile. </p>
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

<!-- <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=15THVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script>
 -->

</body>

<?php } else if($_GET['view'] == '15THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='Benzayb_c_mouth' OR character_name='Benzayb_o_mouth'");
$row=mysqli_fetch_array($result);	


?>	

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">
	<img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="height:600px; width:20%; margin-top:-400px;">
</span>
<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">“Scientists, Ben-Zayb—do you know what they are?”<br> asked the Franciscan in a hollow voice, scarcely<br> stirring in his seat and making only a faint gesture <br>with his skinny hand.  </textarea>
  <center><button class="btn btn-primary my-4 convert" id="click">NARRATION</button><button class="btn btn-primary"><a href="index.php?view=16THVIEW&email=<?php echo $email; ?>" style="text-decoration:none; color:white;">PROCEED</a></button></center>
<p style="color:maroon; margin-top:-10px; background-image: url('background/script.png'); padding: 100px;  width:100%; background-position: center center;
  background-repeat: no-repeat;">“Scientists, Ben-Zayb—do you know what they are?”<br> asked the Franciscan in a hollow voice, scarcely<br> stirring in his seat and making only a faint gesture <br>with his skinny hand.  </p>
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
           width: 20%;
           margin-top:-300px;
         }

         .btn-primary {border-radius: 50px;}   

      </style>

<!-- <script>
         setTimeout(function(){
            window.location.href = 'index.php?view=16THVIEW&email=<?php echo $email; ?>';
         }, 2000);
 </script>

 -->
</body>


<?php } else if($_GET['view'] == '16THVIEW'){ ?>

<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='Benzayb_c_mouth' OR character_name='Benzayb_o_mouth'");
$row=mysqli_fetch_array($result);	


?>	

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

	<img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-600px;margin-right:-1200px;">

</div>
<div class="container" style="background-image:url('background/script.png');   width:100%; background-position: center center;
  background-repeat: no-repeat;">
	<form action="#" method="POST">
	
		
		<br>
			<?php
							
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '1'");
              $row=mysqli_fetch_array($result);	
              echo "<p>".strtoupper($row['question'])."</p>";
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

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '1'");
      $xrow=mysqli_fetch_array($resultx);	

      if($answer == $xrow['answer']){
          
          $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('1', '$qid', '$email')");  
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

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='Benzayb_c_mouth' OR character_name='Benzayb_o_mouth'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

   <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-600px;margin-right:-1200px;">

</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '2'");
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

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '2'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
         $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('1', '$qid', '$email')");  
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

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='Benzayb_c_mouth' OR character_name='Benzayb_o_mouth'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

  <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-600px;margin-right:-1200px;">

</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '3'");
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

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '3'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
       $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('1', '$qid', '$email')");  
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

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='Benzayb_c_mouth' OR character_name='Benzayb_o_mouth'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">
<img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-600px;margin-right:-1200px;">
</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '4'");
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

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '4'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
          $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('1', '$qid', '$email')");  
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

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='simoun_c_mouth.php' OR character_name='simoun_o_mouth'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

   <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-500px;margin-right:-1200px;">

</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '5'");
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

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '5'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
         $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('1', '$qid', '$email')");  
          header('Location:index.php?view=21THVIEW&email='.$email); 
      }else{
          header('Location:index.php?view=20THVIEW&email='.$email);
      }

    }

   ?>
</div>


</body>

<?php } else if($_GET['view'] == '21THVIEW'){ ?>


<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='simoun_c_mouth.php' OR character_name='simoun_o_mouth'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

   <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-500px;margin-right:-1200px;">

</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '6'");
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

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '6'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
          $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('1', '$qid', '$email')");  
          header('Location:index.php?view=22THVIEW&email='.$email);  
      }else{
          header('Location:index.php?view=21THVIEW&email='.$email);
      }

    }

   ?>
</div>


</body>

<?php } else if($_GET['view'] == '22THVIEW'){ ?>


<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='simoun_c_mouth.php' OR character_name='simoun_o_mouth'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

   <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-500px;margin-right:-1200px;">

</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '7'");
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

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '7'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
          $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('1', '$qid', '$email')");  
          header('Location:index.php?view=23THVIEW&email='.$email); 
      }else{
          header('Location:index.php?view=22THVIEW&email='.$email);
      }

    }

   ?>
</div>


</body>

<?php } else if($_GET['view'] == '23THVIEW'){ ?>


<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='simoun_c_mouth.php' OR character_name='simoun_o_mouth'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">

   <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-500px;margin-right:-1200px;">

</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '8'");
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

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '8'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
         $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('1', '$qid', '$email')");  
          header('Location:index.php?view=24THVIEW&email='.$email); 
      }else{
          header('Location:index.php?view=23THVIEW&email='.$email);
      }

    }

   ?>
</div>


</body>


<?php } else if($_GET['view'] == '24THVIEW'){ ?>


<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='simoun_c_mouth.php' OR character_name='simoun_o_mouth'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">
   <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-500px;margin-right:-1200px;">
</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '9'");
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

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '9'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
          $qid = $xrow['qid'];
          $email = $_GET['email'];
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('1', '$qid', '$email')");  
          header('Location:index.php?view=25THVIEW&email='.$email); 
      }else{
          header('Location:index.php?view=24THVIEW&email='.$email);
      }

    }

   ?>
</div>


</body>

<?php } else if($_GET['view'] == '25THVIEW'){ ?>


<?php 

include('../connection/connection.php');

$result=mysqli_query($conn, "select *,rand(photo) from characters where character_name='simoun_c_mouth.php' OR character_name='simoun_o_mouth'");
$row=mysqli_fetch_array($result);   


?> 

<body style="background-image:url('../assets/Upper_Deck_BG.gif'); ">
<div class="text-anim" style="margin-top:400px;">
   <img src="../ADMIN/content/<?php echo $row['photo']; ?>" style="margin-top:-500px;margin-right:-1200px;">
</div>
<div class="container" style="background-image:url('background/script.png');  width:100%; background-position: center center;
  background-repeat: no-repeat;">
   <form action="#" method="POST">
   
      
      <br>
         <?php
                     
              include('../connection/connection.php');

              $result=mysqli_query($conn, "select * from flow_question WHERE qid = '10'");
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

      $resultx=mysqli_query($conn, "select * from flow_question WHERE qid = '10'");
      $xrow=mysqli_fetch_array($resultx); 

      if($answer == $xrow['answer']){
         $qid = $xrow['qid'];
          $email = $_GET['email'];
        $status = 'COMPLETED';
        $stat = 'NEXT';
          mysqli_query($conn,"INSERT INTO player_completed_chapter (chapter, qid, email) VALUES ('1', '$qid', '$email')");  
          mysqli_query($conn,"INSERT INTO player_chapter (chap_id, email, status) VALUES ('1', '$email', '$status')");  
           mysqli_query($conn,"INSERT INTO player_chapter (chap_id, email, status) VALUES ('2', '$email', '$stat')");  
          header('Location:../chapter.php?email='.$email); 

           
      }else{
          header('Location:index.php?view=25THVIEW&email='.$email);
      }

    }

   ?>
</div>


</body>


<?php } else { ?>


<?php } ?>
<?php } else { ?>
<body>
<div class="text-anim" style="margin-top:400px;">
<span style="color:maroon;">THE REIGN OF GREED BY DR. JOSE RIZAL</span>

</div>


<textarea placeholder="Enter here" class="form-control my-2 textarea" id="mybox" rows="10" style="display:none;">THE REIGN OF GREED BY DR. JOSE RIZAL</textarea>
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

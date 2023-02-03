<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="login/style.css">

</head>
<body style="background-image:url('login/GameIntro_BG_Image.gif');">
<!-- partial:index.partial.html -->
<section class="login">
  <div class="container">
   
   <?php if(!empty($_GET['view'])){ ?>
   <?php if($_GET['view'] == 'LOGIN'){ ?>

   	<h3 class="title">Login</h3>
    <form action="action/login.php" method="POST">
   
      <div class="form-group">
        <label for="Email"></label>
        <input type="Email" name="email" id="Email" placeholder="Email Address">          
      </div>
      
      <div class="form-group">
        <label for="password"></label>
        <input type="password" name="password" id="password" placeholder="Password">          
      </div>
      
      
      <button type="submit" name="login">Login</button>
    </form>
    
    <p class="additional-act">Dont have an account? <span><a href="index.php?view=<?php echo 'SIGNUP'; ?>" style="text-decoration:none;">Sign-up</a></span></p>	
   

   <?php } else if($_GET['view'] == 'SIGNUP'){ ?>

   <h3 class="title">Sign up</h3>
    <form action="action/add.php" method="POST">
      <div class="form-group">
        <label for="fullname"></label>
        <input type="text" id="fullname" name="fullname" placeholder="Full Name" required="">          
      </div>
      
      
      <div class="form-group">
        <label for="Email"></label>
        <input type="Email" id="Email" name="email" placeholder="Email Address" required="">          
      </div>
      
      <div class="form-group">
        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="Password" required="">          
      </div>
      
      
      <button type="submit" name="add">Sign up</button>
    </form>
    
    <p class="additional-act">Already have an account? <span><a href="index.php?view=<?php echo 'LOGIN' ?>" style="text-decoration:none;">Sign in</a></span></p>
    	
   
<?php } else if($_GET['view'] == 'VALIDATE'){ ?>

   <h3 class="title">Validate Account</h3>
    <form action="action/validate.php" method="POST">
      <h1>Hi! <?php echo $_GET['email']; ?></h1>
 
      <input type="hidden" id="Email" name="email" value="<?php echo $_GET['email']; ?>" placeholder="Email Address" required="" readonly="">          
      
      
      <div class="form-group" style="margin-top:30px;">
        <input type="number" id="password" name="ecode" placeholder="Enter Verification Code" required="">          
      </div>
      
      
      <button type="submit" name="add">VERIFY</button>
    </form>
    


    <?php } else {  ?>
    

    <?php } ?>	
    <?php }else{ ?>
   <h3 class="title">Login</h3>
    <form action="action/login.php" method="POST">
   
      <div class="form-group">
        <label for="Email"></label>
        <input type="Email" name="email" id="Email" placeholder="Email Address">          
      </div>
      
      <div class="form-group">
        <label for="password"></label>
        <input type="password" name="password" id="password" placeholder="Password">          
      </div>
      
      
      <button type="submit" name="login">Login</button>
    </form>
    
    <p class="additional-act">Dont have an account? <span><a href="index.php?view=<?php echo 'SIGNUP'; ?>" style="text-decoration:none;">Sign-up</a></span></p>	
    <?php } ?>    
  </div>
</section>
<!-- partial -->
  
</body>
</html>

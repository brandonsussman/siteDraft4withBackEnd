<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="styles.css" media="screen">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="form.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="footers.css">
    <script src="https://kit.fontawesome.com/0994ce4eb7.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<script src="script.js" defer></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="flexbox-body">

		<div class="form-login">
     <form action="login.php" method="post">
     	<div class"title"><h2>USER LOGIN</h2></div><br>
     		  <div>
     		        	<?php
   if (isset($_GET['message'])&& ($_GET['message']==="passwordChange")) { ?>
 		 	<p style="font-size:160%;">
 Your password has been successfully updated.

 </p>

 		<?php }
 		  ?>
 		    		        	<?php
   if (isset($_GET['message'])&& ($_GET['message']==="passwordChangeRequest")) { ?>
 		 	<p style="font-size:160%;">
 You have sent in a password change request please check your email.

 </p>

 		<?php }
 		  ?>
	    	<?php
   if (isset($_GET['message'])&& ($_GET['message']==="success")) { ?>
 		 	<p style="font-size:160%;">
 your account has been successfully created, we have sent you a verification email. Did not get it? Click here to resend
 <a href="sendEmail.php">
 resend
 </a>

 </p>

 		<?php }
 		  ?>
 		  	<?php
   if (isset($_GET['message'])&& ($_GET['message']==="verifiedAccount")) { ?>
 		 	<p style="font-size:160%;">
 Your account has been successfully verified

 </p>

 		<?php }
 		  ?>
 		  
 		  		  	<?php
   if (isset($_GET['message'])&& ($_GET['message']==="noLogin")) { ?>
 		 	<p style="font-size:160%;">
 Please login in order to view your passed orders

 </p>

 		<?php }
 		  ?>
	  </div>
		 <div class="input-field">
     	<input class="input" type="text" name="uname" placeholder="Username">
		 <i class="fa-solid fa-user"></i>
		 </div>
		<br>
<br><br>
		<div class="input-field">
     	<input class="input" type="password" name="password" placeholder="Password">
		 <i class="fa-solid fa-lock"></i>
		 </div>
		<br><br>

     	<button class="button" type="submit">Login</button><br><br><br>
		<div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="forgotPassword.php">Forgot password?</a></label>
            </div>
        </div>
          <label style="color: white;font-weight: 500; font-size: 16px">Don't have an account? <a href="signup.php" class="ca" style="color: #119DA4">Click here</a> to create one</label>
     </form>
	 
	 <div id="ErrorInfo">
		 <?php if (isset($_GET['error']))
		 if ($_GET['error']==="verify") { ?>
		 	<p style="font-size:160%;">
your account is not verified click here to get another verification email
<a href="sendEmail.php">
resend
</a>

		 </p>

		<?php }
		  ?>
		  <?php if (isset($_GET['error']))
		 if ($_GET['error']==="Details") { ?>
		 	<p style="font-size:160%;">
your user name or password is incorrect


		 </p style="font-size:160%;">

		<?php }
		  ?>
		  	  <?php if (isset($_GET['error']))
		 if ($_GET['error']==="Password") { ?>
		 	<p style="font-size:160%;">
		 	  please do not leave password blank
   	 </p>

		<?php }
		  ?>
		    <?php if (isset($_GET['error']))
		 if ($_GET['error']==="Email") { ?>
		 	<p style="font-size:160%;">
		 	  please do not leave email address blank
   	 </p>

		<?php }
		  ?>
	


	 </div>

	 </div>
 </div>
 <?php include "footer.php";?>
</body>
</html>


<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="styles.css" media="screen">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="file.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<script src="script.js" defer></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<nav class="menu">
	<?php include "menu2.php"; ?>

</nav>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<body>
	<div class="flexbox-body">
		<div class="form-login">
     <form action="login.php" method="post">
     	<div class"title"><h2>LOGIN</h2></div>

     	<label>Email Address</label>
     	<input class="input" type="text" name="uname" placeholder="Email"><br>

     	<label>Password</label>
     	<input class="input" type="password" name="password" placeholder="Password"><br>

     	<button class="button" type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
	 </div>
	 <div id="ErrorInfo">
		 <?php if (isset($_GET['error']))
		 if ($_GET['error']==="verify") { ?>
		 	<p>
your account is not verified click here to get another verification email
<a href="sendEmail.php">
resend
</a>

		 </p>

		<?php }
		  ?>
			<?php
   if (isset($_GET['message'])&& ($_GET['message']==="success")) { ?>
 		 	<p>
 your account has been successfully create, we have sent you a verification email. Did not get it? Click here to resend
 <a href="sendEmail.php">
 resend
 </a>

 </p>

 		<?php }
 		  ?>


	 </div>
 </div>
</body>
<footer class="footer">
		<?php include "footer.php";?>
</footer>
</html>

<html>
<head>
	<title>RESET PASSWORD</title>
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
     <form action="newPassword.php" method="post">
       <?php if(isset($_GET['error'])){?>
       
     	<div class"title"><p style="font-size:160%;"><?php echo $_GET['error'];?> </p></div><br><br>
     	
     	<?php }?>
     		<div class"title"><h2>Reset Password</h2></div><br>
     	 <div class="input-field">
     	<input class="input" type="password" name="password">
     	<i class="fa-solid fa-lock"></i>
     	<br><br><br>
     	<input class="input" type="password" name="re_password">
		 <i class="fa-solid fa-lock"></i>
		 </div>
		 <div class="input-field">
		  
     	<input class="input" type="hidden" name="code" value= "<?php echo $_GET['code'] ?>">
		 
		 </div>
		<br>
<br><br>
		
		<br><br>

     	<button class="button" type="submit">Set new password</button><br><br><br>
     	
     </form>
 
	 
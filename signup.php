<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" href="styles.css" media="screen">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="icons8-machine-wash-warm-96.png">
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
     <form action="signup-check.php" method="post">
     	<div class = "title"><h2>SIGN UP</h2></div>
     	<?php if (isset($_GET['error'])) { ?>
     		<p style="color:red; font-size: 1.5rem" class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
          
          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          <br>
          <div class="input-field">
          <?php if (isset($_GET['name'])) { ?>
               <input class="input"
							 				type="text"
                      name="name"
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input class="input"
							 				type="text"
                      name="name"
                      placeholder="Name"><br>
          <?php }?></div>
<br>
      <div class="input-field">
		   <?php if (isset($_GET['surname'])) { ?>
               <input class="input"
							 				type="text"
                      name="surname"
                      placeholder="Surname"
                      value="<?php echo $_GET['surname']; ?>"><br>
          <?php }else{ ?>
               <input class="input"
							 				type="text"
                      name="surname"
                      placeholder="Surname"><br>
          <?php }?>
          </div>
          <br>
          
          <div class="input-field">
          <?php if (isset($_GET['uname'])) { ?>
               <input class="input"
							 				type="text"
                      name="uname"
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input class="input"
							 				type="text"
                      name="uname"
                      placeholder="User Name"><br>
          <?php }?>
          </div>
<br>
      <div class="input-field">
		   <?php if (isset($_GET['EMail'])) { ?>
               <input class="input"
							 				type="text"
                      name="EMail"
                      placeholder="Email Address"
                      value="<?php echo $_GET['EMail']; ?>"><br>
          <?php }else{ ?>
               <input class="input"
							 				type="text"
                      name="EMail"
                      placeholder="Email Address"><br>
          <?php }?>
          </div><br>

      <div class="input-field">
		   <?php if (isset($_GET['PhoneNumber'])) { ?>
               <input class="input"
							 				type="text"
                      name="PhoneNumber"
                      placeholder="Phone Number"
                      value="<?php echo $_GET['PhoneNumber']; ?>"><br>
          <?php }else{ ?>
               <input class="input"
							 				type="text"
                      name="PhoneNumber"
                      placeholder="Phone Number"><br>
          <?php }?>
          </div>
          <br>
          <div class="input-field">
     	<input class="input"
							type="password"
              name="password"
              placeholder="Password">
              </div><br>
        
          <div class="input-field">
          <input class="input"
								 type="password"
                 name="re_password"
                 placeholder="Confirm Password">
                 </div><br>
<br>
     	<button class="button" type="submit">Sign Up</button>
     	<label style="color: white;font-weight: 500; font-size: 16px">Already have an account? <a href="loginFront.php" class="ca" style="color: #119DA4">Click here</a> to log in</label>
      
     </form>
	 </div>
 </div>
</body>
<footer class="footer">
		<?php include "footer.php";?>
</footer>
</html>

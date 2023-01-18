<?php

$name_or_Signup="";
$linkIn_or_Out="loginFront.php";
  $name_or_Signup_Link="";
$in_or_Out="Login";
if (isset($_SESSION['CustomerId']) && isset($_SESSION['Username'])) {

  $name_or_Signup=$_SESSION['Username'];
  if ("Admin@fresh.com"===$_SESSION['Username']) {
    $name_or_Signup_Link="admin/adminServices.php";
  }
  else {
  $name_or_Signup_Link="myservices.php";
  }

  $linkIn="index.php";
  $linkIn_or_Out="logout.php";
  $in_or_Out="Logout";

}
 ?>

 <header class="header">
  
     <div id="menu" class="fas fa-bars"></div>
     <a href="index.php" class="logo"><img src="Fresh-As-Daisies-Top.png" alt="Logo"></a>
     <nav class="navbar">
         <a href="index.php">Home</a>
         <a href="AboutUs.php">About us</a>
         <a href="booking.php">Services</a>
           <a href="ContactUs.php">Contact us</a>
          
         <a href=<?php echo $name_or_Signup_Link?>><?php echo $name_or_Signup?></a>

     </nav>
     
     
     <div id="login">
         <a class="btn" href=<?php echo $linkIn_or_Out?> ><?php echo $in_or_Out?></a>
         <i class="far fa-user"></i>
     </div>
     
    
 </header>
 
 
 </html>
 
 

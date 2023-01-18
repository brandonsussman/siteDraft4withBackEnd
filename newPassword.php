<?php

include('db_conn.php');




  $checkCode = $_POST['code'];
  
  
  $pass = $_POST['password'];
	$re_pass = $_POST['re_password'];
$password = $pass;

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
  
  if(empty($pass)){
        header("Location: enterNewPassword.php?error=Password is required&code=$checkCode");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: enterNewPassword.php?error=Please confirm password&code=$checkCode");
	    exit();
	}
	

	else if($pass !== $re_pass){
        header("Location: enterNewPassword.php?error=The confirmation password  does not match&code=$checkCode");
	    exit();
	}
else	if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
 header("Location: enterNewPassword.php?error=The password must be 8 characters or longer and contain an uppercase letter,lowercase leter, a number and a special char&code=$checkCode");
	    exit();
}

	else{
$password=md5($password);
$sql = "UPDATE `customer` SET Password_Hash= '$password' WHERE code ='$checkCode'";

$result = mysqli_query($conn,$sql);



if ($result) {

header("Location: https://freshasdaisieslaundry.co.za/loginFront.php?message=passwordChange");
  }
}


?>

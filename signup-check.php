<?php session_start();
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['uname']) && isset($_POST['EMail'])
	&& isset($_POST['PhoneNumber']) && isset($_POST['password']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$surname = validate($_POST['surname']);
	$uname = validate($_POST['uname']);
	$EMail = validate($_POST['EMail']);
	$PhoneNumber = validate($_POST['PhoneNumber']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
$password = $pass;

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);



	$user_data = 'uname='. $uname. '&name='. $name. '&surname='.$surname. '&PhoneNumber='.$PhoneNumber. '&EMail='.$EMail;


	if (empty($name)) {
		header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}else if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
        header("Location: signup.php?error=Name cannot consist of numbers&$user_data");
	    exit();
	}else if(empty($surname)){
        header("Location: signup.php?error=Surname is required&$user_data");
	    exit();
	}else if(!preg_match("/^[a-zA-Z-' ]*$/",$surname)){
        header("Location: signup.php?error=Surname cannot consist of numbers&$user_data");
	exit();
	}
	else if(empty($uname)){
        header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}
	else if(empty($EMail)){
        header("Location: signup.php?error=Email Address is required&$user_data");
	    exit();
	}else if(!filter_var($EMail, FILTER_VALIDATE_EMAIL)){
        header("Location: signup.php?error=Invalid email format&$user_data");
	    exit();
	}	else if(empty($PhoneNumber)){
        header("Location: signup.php?error=Phone Number is required&$user_data");
	    exit();
	}else if (!preg_match('/^[0-9]{10,12}+$/',$PhoneNumber)){
		header("Location: signup.php?error=Invalid Phone number&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Please confirm password&$user_data");
	    exit();
	}
	

	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}
else	if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
 header("Location: signup.php?error=The password must be 8 characters or longer have an uppercase letter,lowercase leter, a number and a special char&$user_data");
	    exit();
}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sqlusername = "SELECT * FROM customer WHERE Username='$uname' ";
		$usernameresult = mysqli_query($conn, $sqlusername);

		$sqlEmail = "SELECT * FROM customer WHERE EmailAdd='$EMail' ";
		$Emailresult = mysqli_query($conn, $sqlEmail);

		$sqlPhone = "SELECT * FROM customer WHERE PhoneNumber='$PhoneNumber' ";
		$Phoneresult = mysqli_query($conn, $sqlPhone);

		if (mysqli_num_rows($usernameresult) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else if (mysqli_num_rows($Emailresult) > 0) {
			header("Location: signup.php?error=This email address already exists&$user_data");
	        exit();
		}else if (mysqli_num_rows($Phoneresult) > 0) {
			header("Location: signup.php?error=This Phone Number already exists&$user_data");
	        exit();
		}
		else {
try{

		   $sql2 = "INSERT INTO `customer` ( Name, Surname, Username, EmailAdd, PhoneNumber,Password_Hash) VALUES('$name', '$surname', '$uname','$EMail','$PhoneNumber','$pass')";
	
			 
$result2 = mysqli_query($conn, $sql2);


		 if ($result2) {
		   
$_SESSION['Verify'] = $EMail;
$_SESSION['eName'] = $name;
			 
			 
           	 header("Location: sendEmail.php?message=verify");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }}catch(e){}
		}
	}


}else{
	header("Location: signup.php");
	exit();
}
?>

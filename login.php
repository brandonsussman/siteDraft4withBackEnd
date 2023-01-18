<?PHP include "db_conn.php";?>
<?php
session_start();


if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$EmailAdd= validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($EmailAdd)) {
		header("Location:loginFront.php?error=Email");
	    exit();
	}else if(empty($pass)){
        header("Location:loginFront.php?error=Password");
	    exit();
	}else{
		// hashing the password
       $pass = md5($pass);


		$sql = "SELECT * FROM customer WHERE UPPER(EmailAdd)=UPPER('$EmailAdd') AND Password_Hash='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {

			$row = mysqli_fetch_assoc($result);
			if($row['is_verified']==='1'){
            if (strtoupper($row['EmailAdd']) === strtoupper($EmailAdd) && $row['Password_Hash'] === $pass) {

								// code...

            	$_SESSION['CustomerId'] = $row['CustomerId'];
            	
				$_SESSION['Name'] = $row['Name'];
				$_SESSION['Surname'] = $row['Surname'];

				$_SESSION['Username'] = $row['EmailAdd'];
				$checkAdmin=$row['EmailAdd'];
				$_SESSION['Password_Hash'] = $row['Password_Hash'];
              if ($checkAdmin==="Admin@Fresh.Com") {
								header("Location: index.php");
							exit();
						}
							else {
							 
								header("Location: index.php");
							exit();
							}

            }else{
							header("Location: loginFront.php?error=Details");
		        exit();
			}}else {
$_SESSION['Verify'] = $row['EmailAdd'];
$_SESSION['eName'] = $row['Name'];
			header("Location: loginFront.php?error=verify");
exit();
			}

		}else{
			header("Location:loginFront.php?error=Details");
	        exit();
		}
	}

}else{
	header("Location: loginFront.php");
	exit();
}?>

<?php session_start();
include "db_conn.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require ('vendor/autoload.php');





error_reporting(0);

        $mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host       = 'smtp.freshasdaisieslaundry.co.za';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@freshasdaisieslaundry.co.za';
    $mail->Password   = '3rdYearProject';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    $mail->setFrom('info@freshasdaisieslaundry.co.za', 'info');
      $mail->addAddress( $_POST['uname']);
    $mail->addAddress($_POST['uname'], "new password");

$code = md5($_SESSION['uname']).rand(10,9999);
$sql = "UPDATE `customer` SET code='$code' WHERE EmailAdd = '{$_POST['uname']}'";
$result= mysqli_query($conn, $sql);
    $mail->isHTML(true);
    $mail->Subject = 'freshasdaisieslaundry.co.za change password';
    $mail->Body    = 'Please click this button to change your password: <a href=https://freshasdaisieslaundry.co.za/enterNewPassword.php?code='.$code.'>change password</a>' ;
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
  
    $mail->send();
   header("Location: https://freshasdaisieslaundry.co.za/loginFront.php?message=passwordChangeRequest");
	exit();
} catch (Exception $e) {
    	header("Location: signup.php");
	exit();
}
	

?>
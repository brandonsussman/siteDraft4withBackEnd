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
      $mail->addAddress( $_SESSION['Verify']);
    $mail->addAddress($_SESSION['Verify'], $_SESSION['eName']);

$code = md5($_SESSION['Verify']).rand(10,9999);
$sql = "UPDATE `customer` SET code='$code' WHERE EmailAdd = '{$_SESSION['Verify']}'";
$result= mysqli_query($conn, $sql);
    $mail->isHTML(true);
    $mail->Subject = 'freshasdaisieslaundry.co.za email verification';
    $mail->Body    = 'Please click this button to verify your account: <a href=https://freshasdaisieslaundry.co.za/verify.php?code='.$code.'>Verify</a>' ;
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
  
    $mail->send();
   header("Location: https://freshasdaisieslaundry.co.za/loginFront.php?message=success");
	exit();
} catch (Exception $e) {
    	header("Location: signup.php");
	exit();
}
	

?>

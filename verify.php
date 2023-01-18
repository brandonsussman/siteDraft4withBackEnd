<?php

include('db_conn.php');



if (isset($_GET['code'])) {

  $checkCode = $_GET['code'];



$sql = "UPDATE `customer` SET is_verified='1' WHERE code ='$checkCode'";

$result = mysqli_query($conn,$sql);



if ($result) {

 header("Location: https://freshasdaisieslaundry.co.za/loginFront.php?message=verifiedAccount");

  }

}

else {

  $message = "Wrong url";

}



?>

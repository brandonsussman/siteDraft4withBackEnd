<?php include "db_conn.php";


//when payment gateway is complete use this
//$orderNum=$_SESSION["orderNum"];
//for now use below


$CUSTOMER_ID=$_SESSION['CustomerId'];
$orderNum=$_SESSION["orderNum"];
$num=$_SESSION["numServices"];



for ($i=0; $i < $_SESSION["numServices"]; $i++) {
$cost=$_SESSION["cost"][$i];
  $service= $_SESSION["service"][$i];
$numItems=$_SESSION["numItems"][$i];
  $sql="INSERT INTO `customer_order` (`CUSTOMER_SERVICE`, `ORDER_ID`, `CUSTOMER_ID`, `SERVICE`, `NUM_SERVICE`, `PRICE`, `serviceComplete`) VALUES ('','$orderNum', '$CUSTOMER_ID', '$service', '$numItems', '$cost',0)";
     $result2 = mysqli_query($conn, $sql);
}?>

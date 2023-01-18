<?php session_start();

  // code...
$_SESSION["totalCost"]=0;
$_SESSION["standnum"]=$_POST["stand-num"];
$_SESSION["address"]=$_POST["address"];
$_SESSION["service"]=[];
$_SESSION["cost"]=[];
$_SESSION["numItems"]=[];
$_SESSION["numServices"]=$_POST["nServ"] ;
$_SESSION["totalCost"]=$_POST["totalCost"];
$_SESSION["orderNum"]=$_SESSION["CustomerId"] .substr(strval(time()),-10);
$k=0;
for ($i=0; $i < $_SESSION["numServices"] ; $i++) {
  // code...
if (isset($_POST["hCost{$i}"])) {

   $_SESSION["cost"][$k]=$_POST["hCost{$i}"];
    $_SESSION["service"][$k]=$_POST["select{$i}"];

    $_SESSION["numItems"][$k]=$_POST["services-amount{$i}"];
    $k++;
}



}





$_SESSION["numServices"]=$k;



include "insertServicesUponSuccess.php";
header("Location: payfast-php-sdk-master/examples/custom/");?>

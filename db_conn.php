<?php

$sname= "sql36.cpt3.host-h.net";
$unmae= "freshasdaisieslaundry";
$password = "3rdYearProject";
$db_name = "freshasdaisies";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
  
	echo $sname;
	echo "hello Connection failed!";
}
?>

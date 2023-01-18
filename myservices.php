<?php session_start();?>
<html>
<?php
include 'db_conn.php';
include 'menu.php';

?>
<?php echo if (!isset ($_SESSION["Name"]){
header("Location: https://freshasdaisieslaundry.co.za/loginFront.php?message=noLogin");
} ?> 
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="file.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="script.js" defer></script>
    <title>My Services</title>

</head>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>

<div class="info">
<p  id = "hello" style="margin-left:20%; font-size: 1.7rem" >Welcome <?php echo $_SESSION["Name"] ?> <?php echo $_SESSION["Surname"] ?>, here you can view your previous orders.</p>
</div>
<br></br>

<div id="ordSer">
  <h2 id="orderNumber"></h2>
 

</div>
<div>
  <br></br>
<h2>ORDERS</h2>
  
</div>
<table>
<tr>
  <th>Order Number</th>
  <th>COST (R)</th>
  <th>DATE</th>

<script> var serDisArr=[]; </script>
<?php
$email=$_SESSION['Username'];
$sql = "SELECT * FROM customer_order left join orders on customer_order.ORDER_ID=orders.id where orders.PaymentStatus='Complete' and  orders.customerEmail= '$email' Order by Date Desc";

$query = mysqli_query($conn,$sql);
$temp = "";
while ($result = mysqli_fetch_assoc($query)) { 
if ($temp !=  $result['id']) {?>
		 	<p>
		 	  <tr>
 
<td>

<a href="javascript:displayService(<?PHP echo $result['id']; ?>)">  <?PHP echo $result['id']; ?></a>
</td>


<td><?PHP echo $result['COST']; ?></td>
<td><?PHP echo $result['Date']; ?></td>

</tr>

   	 </p>

		 <?php }
		  ?>


<script>


newSer={ordID: <?PHP echo $result["id"]; ?> , service:  <?php echo json_encode($result["SERVICE"]); ?>, cost:  <?php echo json_encode($result["PRICE"]); ?>, units:  <?php echo json_encode($result["NUM_SERVICE"]); ?>};
serDisArr.push(newSer);


</script>




<?php  $temp =  $result['id'];}


?>
</table>
<div id="ordSer">
  
</div>
  <?php include "footer.php" ?>
  </html>
  <script>
  function displayService(num){
serDisArr.sort((a, b) => {
    return a.ordID - b.ordID;
});

searchIndex = serDisArr.findIndex((ser) => ser.ordID==num);
  n=searchIndex;
 if(document.getElementById("serTab")!=null)
 {
   document.getElementById("serTab").remove();
   
 }
    var serTab = document.createElement("table");
  serTab.name="serTab";
  serTab.id="serTab";

   serTab.style.border="1px solid black";
   serTab.style.cellspacing="0"
  document.getElementById("ordSer").appendChild(serTab);
document.getElementById("orderNumber").innerText= "You are looking at order " + serDisArr[n].ordID;
 serHeading=document.createElement("th");
 serHeading.innerText="SERVICE";
   serHeading.style.width="150px";
   serHeading.style.border="1px solid black";
 serTab.appendChild(serHeading);
  serHeading=document.createElement("th");
 serHeading.innerText="UNITS (kg/units)";
   serHeading.style.width="150px";
   serHeading.style.border="1px solid black";
 serTab.appendChild(serHeading);
   serHeading=document.createElement("th");
 serHeading.innerText="COST (R)";
   serHeading.style.width="150px";
   serHeading.style.border="1px solid black";
 serTab.appendChild(serHeading);
 
while (serDisArr[n].ordID==num) {
 

  row= document.createElement("tr");
  row.name="serRow";
  row.id="serRow";
  row.style.padding="0px";
  serTab.appendChild(row);

  serField=document.createElement("td");
  serField.style.width="150px";
   serField.style.border="1px solid black";
  serField.innerText=serDisArr[n].service;
  row.appendChild(serField);
  serField=document.createElement("td");
  serField.style.width="150px";
   serField.style.border="1px solid black";
  serField.innerText=serDisArr[n].units;
  row.appendChild(serField);
   serField=document.createElement("td");
  serField.style.width="150px";
   serField.style.border="1px solid black";
  serField.innerText=serDisArr[n].cost;
  row.appendChild(serField);
  
  
n++;
}
}
  </script>

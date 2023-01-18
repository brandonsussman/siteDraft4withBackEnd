
<?php include "db_conn.php";





$sql = "SELECT  * FROM services";
$query = mysqli_query($conn,$sql);
if(mysqli_num_rows($query) > 0)//if it finds any row
{
  $i=0;
   while($result = mysqli_fetch_assoc($query))
   {
      //adding data to the array
      $serviceArr[] = $result["Name"];
$serviceArrPricePerUnit[]= $result["PricePerUnit"];
      $i++;
   }
}

?>
<script type="text/javascript">
var nID=0;
var passed_array = <?php echo json_encode($serviceArr); ?>;
var passed_arrayPrice = <?php echo json_encode($serviceArrPricePerUnit); ?>;

 function loadServiceName(){

var serviceForm=  document.getElementById("divService");
var newln= document.createElement("br");
newln.id="ln"+nID;
serviceForm.appendChild(newln);
/*var addBtn= document.createElement("button");
addBtn.id="aBtn"+nID;
addBtn.innerText="Add";
addBtn.name="aBtn"+nID;
addBtn.type="button";

addBtn.onclick= loadServiceName;

serviceForm.appendChild(addBtn);*/
var select = document.createElement("select");
   select.name = "select"+nID;
   select.id = "select"+nID;
   select.class="custom-select sources";
   // set the CSS class select.style.width= 
  select.style.color="#040404";
  select.style.padding="10px";
  select.style.fontSize="16px";
  select.style.borderRadius=".5rem";
    serviceForm.appendChild(select);
    
var nIn = document.createElement("input");
nIn.id="number"+nID;

nIn.type = "number";
nIn.value="0";
nIn.min = "0";
nIn.name = "services-amount"+nID;
nIn.style.width="50px";
nIn.style.color="#040404";
  nIn.style.padding="10px";
  nIn.style.fontSize="16px";
  nIn.style.borderRadius=".5rem";
// set the CSS class


nIn.style.marginLeft="20px";
serviceForm.appendChild(nIn);










var removeBtn= document.createElement("button");
removeBtn.id="rBtn"+nID;
removeBtn.innerText="Remove Item";
removeBtn.name="rBtn"+nID;
removeBtn.type="button";
removeBtn.style.marginLeft="20px";
removeBtn.style.color="white";
removeBtn.style.padding="10px";
removeBtn.style.fontSize="16px";
removeBtn.style.cursor="pointer";
removeBtn.style.marginRight="10px";
removeBtn.style.background="#BF4E30";
removeBtn.style.borderRadius=".7rem";
// set the CSS class

var r=nID;
removeBtn.onclick= function() {RemoveService(r);};

serviceForm.appendChild(removeBtn);



for (var i = 0; i < "<?php echo $i; ?>"; i++) {


var option = document.createElement("option");
option.value = passed_array[i];


option.text =  passed_array[i];
select.appendChild(option);


}
var nOut = document.createElement("label");
nOut.id="PricePerUnit"+nID;

"\n"
nOut.innerText="Price Per Unit R " +passed_arrayPrice[0];

nOut.name = "PricePerUnit"+nID;
//css nOut.style.width
serviceForm.appendChild(nOut);

"\n"

var lCost=document.createElement("label");
lCost.name="lCost"+nID;
lCost.id="lCost"+nID;
// set the CSS class lcost.style.width= 

serviceForm.appendChild(lCost);
var hCost=document.createElement("input");
hCost.id="hCost"+nID;

hCost.name="hCost"+nID;
hCost.type="hidden";
hCost.value="0";



serviceForm.appendChild(hCost);












nID++;
document.getElementById("nServ").value=nID;



calculate();

}

function calculate(){
var totalCost=0;
for (var a = 0; a < nID; a++) {

var cost=0;



try {
  var e = document.getElementById("select"+a);
  var val = e.options[e.selectedIndex].index;


  document.getElementById("PricePerUnit"+a).innerHTML= "Price Per Unit/kg R"+passed_arrayPrice[val];
  cost=document.getElementById('number'+a).value*passed_arrayPrice[val];
  document.getElementById("lCost"+a).innerHTML= "Cost R"+cost;
  document.getElementById("hCost"+a).value=cost;

  totalCost+=cost;
  document.getElementById("totalCost").value=totalCost;
  document.getElementById("tCostDis").innerText="Total Cost R"+totalCost;
} catch (e) {


}








}



/*storeCalculation();*/

}

function RemoveService(k){



  document.getElementById("select"+k).remove();
    document.getElementById("lCost"+k).remove();
    document.getElementById("ln"+k).remove();
    document.getElementById("hCost"+k).remove();

    document.getElementById("number"+k).remove();
    document.getElementById("PricePerUnit"+k).remove();
    document.getElementById("rBtn"+k).remove();
    calculate();


}













/*function storeCalculation(){

for (var i = 0; i < nID; i++) {



  var hService=document.createElement("input");
  hService.id="hService"+i;
  hService.type="hidden";
  hService.name="hService"+i;
  hService.value="1";
  serviceForm.appendChild(hService);
  var hService=document.createElement("input");
  hService.id="hService"+i;
  hService.type="hidden";
  hService.name="hService"+i;
  hService.value="1";
  serviceForm.appendChild(hService);
}









}*/

</script>

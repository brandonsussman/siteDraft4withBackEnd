<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bookings</title>
        <link rel="stylesheet" href="styles.css" media="screen">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="icons8-machine-wash-warm-96.png">
        <link rel="stylesheet" href="file.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/0994ce4eb7.js" crossorigin="anonymous"></script>
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <script src="script.js" defer></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
div.rmv {
position: inherit;

  left: 300px;
  width: 300px;

}
</style>
    </head>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>

    <body  onload="loadServiceName()"class="body">

        <header class="header">
            <a href="#"><img src="images/Logo.png" class="logo-image"></a>
            <nav class="menu">
              <?php include "menu.php";?>

            </nav>
        </header>

        <!-- This is the form for bookings in feel free to change what you need to-->

        <!--If you want to add another input field the syntax is:
            <div class="login-form">
                <label for="nameOfLabel">Labe text:</label>
                <input type="text" name="inputName" id="inputName" required>
            </div>
        -->

        <!--
            format if you want to add another drop down list
            <div class="login-form">
                <label for="services-2">Select a service:</label>
                <select name="services-2" id="services-2">
                    <option></option>
                    <option></option>
                </select>
                <lable for="services-amount-2">Enter weight for the selected service:</lable>
                <input type="text" name="services-amount-2" id="services-amount-2" required>
            </div>
        -->

                  <h1 id="test">Place your order</h1>
                  <div class="flexbox-body">
                  <div class="form-login">
        <form id="serviceForm" action="pending_payment.php" method="post" onchange="calculate()" class="form">
        <h4>Address Details</h4>
        <br>
            <div class="form">
            <div class="inputfield">
                <label for="stand-num">Enter your stand number: </label>
                <input class = "input" type="text" name="stand-num" id="stand-num" placeholder="Stand Number" required>
            </div>
            </div><br>
            <div class="form">
            <div class="inputfield">
                <label for="address">Enter your address: </label>
                <input class = "input" type="text" name="address" id="address" placeholder="address" required>
            </div>
            </div>
            <div>
            <h4>Product Details</h4>
            <span><i class="fa fa-info-circle" style="font-size:20px"></i></span>
              <?php

               if (isset($_SESSION['CustomerId']) && isset($_SESSION['Username'])) {
             

               }
               else {
          

               }
              ?>
              <?php include "select_services.php";?>

              <input class = "input"  type="hidden" id="totalCost" name="totalCost" value="0">
                <input class = "input" type="hidden" id="nServ" name="nServ" value="0">






        </div>
        
<div id= "divService" class="form">



</div>




<button class="button" type="button" id="add_Service" name="button" onclick="loadServiceName()">Add Item</button>
<br></br>

<div class = "total">
  <P id="tCostDis">Total COST</P>
</div><br>
  <?php if (isset($_SESSION['CustomerId']) && isset($_SESSION['Username'])) { ?>
             
 <input class="enter" type="submit" value="Proceed to Checkout">
              <?php }
               else { ?>
          
<input class="enter" type="input" value="Please Login in to Checkout">
              <?php }
              ?>
  
</form>



</div>

</div>





              <!--  <label for="services-1">Select a service:</label>
                <select name="services-1" id="services-1">

                </select>




                <lable for="services-amount-1">Enter weight for the selected service:</lable>
                <input type="text" name="services-amount-1" id="services-amount-1" required>
            </div>
          <div class="login-form">
                <label for="services-2">Select a service:</label>
              <select name="services-2" id="services-2">
                    <option></option>
                    <option></option>
                </select>
                <lable for="services-amount-2">Enter weight for the selected service:</lable>
                <input type="text" name="services-amount-2" id="services-amount-2">
            </div>
            <div class="login-form">
                <label for="services-3">Select a service:</label>
                <select name="services-3" id="services-3">
                    <option></option>
                    <option></option>
                </select>
                <lable for="services-amount-3">Enter weight for the selected service:</lable>
                <input type="text" name="services-amount-3" id="services-amount-3">
            </div>
-->
    </body>
    <footer class="footer">
        <?php include "footer.php";?>
    </footer>
</html>

<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="icons8-machine-wash-warm-96.png"><a target="_blank" href="https://icons8.com/icon/GYMghO4Qgik2/machine-wash-warm">Machine Wash Warm</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="script.js" defer></script>
    <title>About Us</title>
</head>
<body>

    <section>
        <header class="header">
                <?php include "menu.php";?>
        </header>
    </section>

    <section id="legend">
        <div class="container">
        <div class="info">
            <h1><span>About us</span></h1>
        </div>
        </div>
    </section>

    <section class="services" id="services">

        <h1 class="heading">More Information About Us</h1>

        <div class="container">
        <div class="info">
            <h2 style="font-size: 2.2rem">We are Passionate About Laundry</h2>
            <p style="font-size: 1.7rem">We are professionals in the laundry and dry cleaning business, which means we always stay up to date on the latest technologies, cleaning methods, and solutions for dealing with stains or delicate fabrics. Plus, we maintain the highest standards of business integrity by following national and environmental safety regulations. We are passionate about the way you think about laundry!</p>
            <br>
            <ul style="list-style-type:disc; font-size: 1.6rem">
                <li>100% Customer Satisfaction</li>
                <li>Free Collection & Delivery</li>
                <li>Affordable Prices</li>
                <li>Best Quality</li>
            </ul>
        </div>
        <img src="img01.jpg">

        </div>
<br>


        <div class="box-container">

            <div class="box">
                <h2> <i class="fas fa-map-marker-alt"> </i></h2>
                <h3>Location</h3>
                <p>Shop 7 (Next to Checkers), Grey Owl Shopping Centre, C/O Brakfontein rd & Erasmsu dr, Louwlardia, Centurion, 1683</p>
            </div>

            <div class="box">
                <h2> <i class="fas fa-hourglass"></i> </h2>
                <h3>Opening hours</h3>
                <p>Mon-Sun 7:00 am - 7:00 pm <br> Closed on public holidays</p>
            </div>

        </div>

    </section>


<?php include "footer.php" ?>

</body>
</html>

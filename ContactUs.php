<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="icons8-machine-wash-warm-96.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="script.js" defer></script>
    <title>Contact Us</title>
</head>
<body>

    <section>
        <header class="header">
            <div id="menu" class="fas fa-bars"></div>
            <a href="index.html" class="logo"><img src="Fresh-As-Daisies-Top.png" alt="Logo"></a>
          <?php include "menu.php"; ?>
        </header>
    </section>

    <section id="legend">
        <div class="container">
        <div class="info">
            <h1><span>Contact</span></h1>
        </div>
        </div>
    </section>

    <section class="services" id="services">

        <h1 class="heading"> Our Contact Information</h1>

        <div class="box-container">

            <div class="box">
                <h2> <i class="fas fa-map-marker-alt"> </i></h2>
                <h3>Find Us</h3>
                <p>Shop 7 (Next to Checkers), Grey Owl Shopping Centre, C/O Brakfontein rd & Erasmsu dr, Louwlardia, Centurion, 1683</p>
            </div>

            <div class="box">
                <h2> <i class="fab fa-whatsapp"> </i></h2>
                <h3>Call / WhatsApp us</h3>
                <p>064 221 8986</p>
            </div>

            <div class="box">
                <h2> <i class="fas fa-envelope"></i> </h2>
                <h3>E-mail us</h3>
                <p>greyowl@freshasdaisies.co.za</p>
            </div>

            <div class="box">
                <h2> <i class="fas fa-hourglass"></i> </h2>
                <h3>Opening hours</h3>
                <p>Mon-Sun 7:00 am - 7:00 pm <br> Closed on public holidays</p>
            </div>

        </div>

    </section>


    <footer class="footer">
        <?php include "footer.php";?>
    </footer>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="script.js"></script>

</body>
</html>

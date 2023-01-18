<?php session_start()?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="icons8-machine-wash-warm-96.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="aboutcss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="script.js" defer></script>
    <title>Home</title>
</head> 
<body>
    <section>
  <?php include "menu.php";?>
</section>
        <section id="hero">
            <div class="container">
            <div class="info">
                <h1>Fresh As <span>DAISIES</span></h1>
                <h2>We provide great laundry services</h2>
                <p>We are passionate professionals in the laundry and dry cleaning business, and we have so much to offer to you!</p>
                <br>
              
            </div>
            </div>
        </section>

        <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <h3>Laundry</h3>
                <p>Let us collect your dirty laundry, sort it, pre-treat stains, wash, dry, fold and deliver back to you in one neat easy package.</p>
                <a href="booking.php" class="btn"> read more</a>
            </div>

            <div class="box">
                <h3>Dry cleaning</h3>
                <p>Local residents and students love our dry cleaning services due to our fast, accurate and top quality results.</p>
                <a href="booking.php" class="btn"> read more</a>
            </div>

            <div class="box">
                <h3>Alterations and Repairs</h3>
                <p>We also do alterations and to all sorts of pants/skirts/shirts. You name it and we'll repair it.</p>
                <a href="booking.php" class="btn"> read more</a>
            </div>

            <div class="box">
                <h3>Sneaker valet</h3>
                <p>We will get you sneakers looking brand new again.</p>
                <a href="booking.php" class="btn"> read more</a>
            </div>

            <div class="box">
                <h3>Carpet cleaning</h3>
                <p>To keep your carpet in peak condition, we recommend professional deep cleaning every 12 to 18 months.</p>
                <a href="booking.php" class="btn"> read more</a>
            </div>

            <div class="box">
                <h3>Steam Ironing</h3>
                <p>We also offer steam ironing. For more information, ask in store.</p>
                <a href="booking.php" class="btn"> read more</a>
            </div>

        </div>

    </section>

                <div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>About Us</h1>
				</div>
				<div class="content">
					<h3>This is who we are in a nutshell.</h3>
					<p>We are laundry and dry cleaning specialists, therefore we are always up to speed on the newest technology, cleaning processes, and solutions for dealing with stains or fragile materials. Furthermore, we uphold the highest levels of company integrity by adhering to national and environmental safety rules. We are devoted to changing the way you think about laundry!
                    </p>
                    <br>
                    <div class="skills">
                        <span>Laundry</span>
                        <span>Sneaker valet</span>
                        <span>Carpet Cleaning</span>
        				        <span>... And More!</span>
                    </div>
                    <br>
                    <p>To learn more about us and what we offer, visit our About Us page by clicking the link below</p>
					<div class="button">
						<a href="AboutUs.php">Read More</a>
					</div>
				</div>
				<div class="social">
					<a href="https://www.facebook.com/FRESHASDAISIESGREYOWL"><i class="fab fa-facebook-f"></i></a>
				</div>
			</div>
		</div>
	</div>



    <section class="testimonials" id="testimonials">
        <div class="inner">
          <h1>Testimonials</h1>
          <div class="border"></div>

          <div class="row">
            <div class="col">
              <div class="testimonial">
                <div class="name">Beverly Garmon</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>

                <p>
                    "I was sceptical about leaving my clothes to be washed dried and folded by someone I did not know and let me tell you I was beyond amazed by the quality they put into the process of washing, drying, and folding. It was packaged and put back into the bin I delivered my dirty clothes in and was notified via text message when it was ready for collection."
                </p>
              </div>
            </div>

            <div class="col">
              <div class="testimonial">
                <div class="name">Teresa and Kevin K.</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>

                <p>
                    "This was my first time coming to a Laundromat. I was greeted with a warm smile. I was looking around and they could tell I needed help. They gave me recommendations per the clothes I had. They were so helpful and friendly. Being new here, this is now my go to. Very clean and up to date machines."
                </p>
              </div>
            </div>

            <div class="col">
              <div class="testimonial">
                <div class="name">Alice Munguia</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>

                <p>
                    "I don't dry clean a lot of clothes, but I've been going here for 5 years and they have never once been late, the customer service is always great, and I’ve never had a quality concern. Their prices are market related and very cost effective for such a superb service."
                </p>
              </div>
            </div>
          </div>
        </div>
    </section>

  <?php include "footer.php" ?>
</body>
</html>

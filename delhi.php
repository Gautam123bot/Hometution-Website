<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project - Get Info</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <link rel="icon" type="image/x-icon" href="img/logo2.png">
    <script src="app.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="laptopmode.css">
    <link rel="stylesheet" href="tabletmode.css">
    <link rel="stylesheet" href="mobilemode.css">
    <link rel="stylesheet" href="laptop1024pxless.css">
    <link rel="stylesheet" href="laptop1024pxmore.css">
    <script src="https://kit.fontawesome.com/b90099deb6.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include 'header.php' ?>

    <div class="social_fixed_footer">
        <div class="d-flex flex-md-column">
            <div class="social">
                <a href="#"><i class="fab fw ss fa-facebook-f facebook-theme"></i></a>
            </div>
            <div class="social">
                <a href="#"><i class="fab fw ss fa-twitter twitter-theme"></i></a>
            </div>
            <div class="social">
                <a href="#"><i class="fab fw ss fa-instagram instagram-theme"></i></a>
            </div>
            <div class="social">
                <a href="#"><i class="fab fw ss fa-linkedin-f linkedin-theme"></i></a>
            </div>
            <div class="social">
                <a href="#"><i class="fab fw ss fa-youtube youtube-theme"></i></a>
            </div>
        </div>
    </div>

    <div class="expand">
        <ul class="expand-element">
            <li class="element-extra">
                <a href="#" class="extra-thing" onmouseover="comedialog()" onmouseout="godialog()">
                    <i class="fa-regular fa-envelope two-icon"></i>
                    <p class="openanaccount">Enquiry Now</p>
                    <!-- <span>Facebook</span> -->
                    <div class="open_form">
                        <form action="srtutor_sideenquiry_connection.php" method="post" id="closethis">
                            <h4>Contact Form</h4>
                            <!-- <button type="button" class="btn-close" aria-label="Close"></button> -->
                            <i class="fa-solid fa-xmark" onclick="closeDialog()"></i>
                            <script>
                                var x = document.getElementById("closethis");
                                function closeDialog() {
                                    x.style.display = "none";
                                }
                                function comedialog() {
                                    x.style.display = "block";
                                }
                                function godialog() {
                                    x.style.display = "none";
                                }
                            </script>
                            <input type="text" name="name" id="" placeholder="Name">
                            <input type="text" name="phone" id="" placeholder="Phone*">
                            <input type="text" name="email" id="" placeholder="Email*">
                            <textarea name="message" id="" cols="30" rows="5" placeholder="Message"></textarea>
                            <input type="submit" name="submit" class="open_form_submit" value="Submit">
                        </form>
                    </div>
                </a>
            </li>
            <li class="element">
                <a href="#" class="extra-thing-1">
                    <i class="fa-brands fa-whatsapp two-icon"></i><span>Whatsapp</span>
                </a>
            </li>
            <li class="element">
                <a href="#" class="extra-thing-1">
                    <i class="fa-solid fa-money-check two-icon"></i><span>Payment</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="bottomtotop" onclick="totop()"><i class="fa-solid fa-circle-arrow-up"></i></div>

    <section class="section-city">
        <div class="container subject-city p-4">
            <h2>Uttar Pradesh (UP)</h2>
            <div class="row subject-city-row">
                <div class="single-city col-12 col-sm-12 col-md-6 col-lg-3 p-0">
                    <a href="#">Noida</a>
                </div>
                <div class="single-city col-12 col-sm-12 col-md-6 col-lg-3 p-0">
                    <a href="#">Ghaziabad</a>
                </div>
                <div class="single-city col-12 col-sm-12 col-md-6 col-lg-3 p-0">
                    <a href="#">Faridabad</a>
                </div>
                <div class="single-city col-12 col-sm-12 col-md-6 col-lg-3 p-0">
                    <a href="#">Mukherjee Nagar</a>
                </div>
                <div class="single-city col-12 col-sm-12 col-md-6 col-lg-3 p-0">
                    <a href="#">Saidnagar</a>
                </div>
                <div class="single-city col-12 col-sm-12 col-md-6 col-lg-3 p-0">
                    <a href="#">Araria</a>
                </div>
                <div class="single-city col-12 col-sm-12 col-md-6 col-lg-3 p-0">
                    <a href="#">Kishanganj</a>
                </div>
                <div class="single-city col-sm-12 col-md-6 col-lg-3 p-0">
                    <a href="#">Forbesganj</a>
                </div>
            </div>
        </div>
    </section>

    <section class="free-quote-section">
        <div class="container free-quote">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 free-quote-col1">
                    <h1>Get Your Free Quote</h1>
                    <p>Kindly Fill out this form we indus packers and movers will contact you as soon as possible. thanks</p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 free-quote-col2">
                    <form action="">
                        <input type="text" placeholder="Enter Your Name" name="name">
                        <input type="number" placeholder="Enter Phone Number" name="name">
                        <input type="text" placeholder="Enter Starting City" name="name">
                        <input type="text" placeholder="Enter Destination City" name="name">
                        <textarea name="query" id="" cols="30" rows="3" placeholder="Any Query"></textarea>
                        <input type="email" name="email" id="" placeholder="Enter Email Id">
                        <button>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>


</body>

</html>
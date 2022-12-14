<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My project - Contact Us page</title>
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
    <?php include 'header.php'; ?>

    <!-- <br><br><br><br> -->

    <div class="contact_img">
        <!-- <img src="img/contactimg.jpg" alt="" class="img-responsive"> -->
        <h1>Contact Us</h1>
    </div>

    <div class="container contact_container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 simple_contact_form">
                <form action="srtutor_contact_connection.php" method="post">
                    <input type="text" name="full_name" id="" placeholder="Full name">
                    <input type="email" name="email" id="" placeholder="Email Address">
                    <textarea name="message" id="" cols="40" rows="5" placeholder="Message"></textarea>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-md-6 input_full_container">
                            <div class="input_contain input_con2">
                                <input class="form-check-input check-input2" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2">
                            </div>
                            <label for="">I'm a parent</label>

                        </div>
                        <div class="col-sm-6 col-lg-6 col-md-6 input_full_container">
                            <div class="input_contain input_con2">
                                <input class="form-check-input check-input2" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2">
                            </div>
                            <label for="">I'm a Student</label>

                        </div>
                        <div class="col-sm-12 col-lg-12">
                            <input type="submit" class="sendconactform" value="Send" name="send">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 wpb_col">
                <div class="wpb_wrapper">
                    <div class="bottomtxt">
                        <p style="text-align: center;">Feedback, Love Letters &amp; Everything Else, Write to Us at
                            <a href="mailto:info@tutoratdoor.com">info@tutoratdoor.com</a>!
                        </p>
                    </div>


                    <div class="wpb_text_column">
                        <h2>Haven???t Started Yet?</h2>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-lg-6 col-md-6 vc_btn3-container1">
                            <button href="#" title="">For Parents</button>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 vc_btn3-container2">
                            <button href="#" title="">For Students</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="contact_mapouter">
        <div class="gmap_canvas contact-map"><iframe width="1730" height="500" id="gmap_canvas"
                src="https://maps.google.com/maps?q=webgany%20patna&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br>
            <style>
            .mapouter {
                position: relative;
                text-align: right;
                height: 500px;
                width: 1730px;
            }
            </style><a href="https://www.embedgooglemap.net"></a>
            <style>
            .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 500px;
                width: 1730px;
            }
            </style>
        </div>
    </div>




    <?php include 'footer.php'; ?>



</body>

</html>
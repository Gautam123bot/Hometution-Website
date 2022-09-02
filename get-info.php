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
    <?php include 'header.php'; ?>

    <div class="container-fluid main-img">
        <div class="blue-bg">
            <div class="container">
                <div class="row full-info-content">

                    <div class="col-sm-12 col-md-12 col-lg-6 info-intro">
                        <h5>For K-12 Schools and Districts</h5><br>
                        <p class="online-tutoring-para">1:1 online tutoring with <span>professional educators<span></p>
                        <br><br>
                        <p class="support-para"><span>24/7 academic support</span> through on-demand homework help and
                            24-hour assignment review across <span>122+ subjects.</span></p>
                        <div class="academic-dash"></div>
                        <p class="studentpara" data-bs-toggle="modal" data-bs-target="#myModal2">Are you a student? <a
                                href="#">Complete your registration</a> to connect with a tutor now.</p>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <form action="" method="get" class="info-form">
                            <p>Let's work together to enhance student success at your school or district!</p>
                            <p>Complete the form below:</p>
                            <div class="labeldiv"><label for="">First Name *</label></div>
                            <input type="text" name="" id="">
                            <div class="labeldiv"><label for="">Last Name *</label></div>
                            <input type="text" name="" id="">
                            <div class="labeldiv"><label for="">Email *</label></div>
                            <input type="email" name="" id="">
                            <div class="labeldiv"><label for="">Phone Number</label></div>
                            <input type="text" name="" id="">
                            <div class="labeldiv"><label for="">I am a... *</label></div>
                            <select name="" id="">
                                <option value="">Please select</option>
                                <option value="">School/District Leader</option>
                                <option value="">Company Representative</option>
                                <option value="">Tutor</option>
                                <option value="">Student</option>
                                <option value="">Parent</option>
                            </select>
                            <div class="labeldiv"><label for="">School Name *</label></div>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                            <button class="partner-button">Partner with us</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="row top-content">
        <div class="academic-support col-sm-12 col-md-12 col-lg-12">
            <div class="academic-support-header">
                <p>24/7 academic support anytime, and anywhere</p>
            </div>
            <div class="academic-support-para">
                <p>No matter your level of study, you’ll find an online tutor for you. Elementary, middle, and high
                    school students can connect with the best professional educators from across the country and around
                    the world. College students can learn from subject experts holding master’s and doctorate degrees.
                </p>
            </div>
        </div>
    </div>

    <div class="icon-content">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 icon-description">
                <img src="img/support-icon-1.png" alt="" class="img-responsive support-icon" width="72" height="auto">
                <div class="quality-header">
                    <p>The highest quality educators in 122+ subjects</p>
                </div>
                <div class="quality-para">
                    <p>Skooli tutors are experienced educators who possess teaching licenses or advanced degrees in the
                        subject they are tutoring in, meaning students receive help from true subject-matter experts.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 icon-description">
                <img src="img/support-icon-2.png" alt="" class="img-responsive support-icon" width="72" height="auto">
                <div class="quality-header">
                    <p>Safe and secure learning environment</p>
                </div>
                <div class="quality-para">
                    <p>Whether students need live, on-demand homework help via live chat or audio, or feedback on an
                        assignment (in 24 hours or less), Skooli tutors utilize best practices to meet students’ unique
                        learning needs.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 icon-description">
                <img src="img/support-icon-3.png" alt="" class="img-responsive support-icon" width="72" height="auto">
                <div class="quality-header">
                    <p>An advanced, secure digital classroom</p>
                </div>
                <div class="quality-para">
                    <p>Skooli’s safe, user-friendly digital classroom accelerates student learning through the use of
                        cutting-edge learning tools (including a 700+ math term glossary) and an interactive white
                        board.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 icon-description">
                <img src="img/support-icon-4.png" alt="" class="img-responsive support-icon-extra" width="51"
                    height="auto">
                <div class="quality-header">
                    <p>Say goodbye to hourly fees</p>
                </div>
                <div class="quality-para">
                    <p>Skooli offers flexible, equitable on-demand tutoring at an affordable, per-student rate which
                        grants students unlimited 24/7 access for an entire year (365 days). </p>
                </div>
            </div>
        </div>
    </div>

    <div class="move-top">
        <div class="move-top-para">
            <p>Give the students the help they need,</p>
            <h1>when they need it</h1>
            <a href="#" onclick="goToTop()" target="_self">Request more info</a>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>
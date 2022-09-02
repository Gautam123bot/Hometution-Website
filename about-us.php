<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My project - About-Us page</title>
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


    <div class="container comprehensive-content">
        <div class="row">
            <div class="headeraboutus col-sm-12 col-md-12 col-lg-12">
                <h1>About <span>Us<span></h1>
                <div class="aboutdash"><span class="aboutdashspan1"></span><span class="aboutdashspan2"></span></div>
            </div>
            <div class="ipads3-image col-sm-12 col-md-6 col-lg-6">
                <img src="img/ipads3.jpg" alt="" class="img-responsive">
            </div>

            <div class="comprehensive-text col-sm-12 col-md-6 col-lg-6">
                <div class="mt-2">
                    <h1>A Comprehensive Learning Destination</h1>
                </div>
                <p class="mt-4">Tuoratdoor provides personalized learning in over 3,000 subjects across multiple learning
                    formats—One-on-One, Large Group Classes, Small Group Classes, and Self Study—to meet the full needs
                    of our Learners.</p>
                <a href="#">Learn More</a>
                <div class="comprehensive-dash"></div>
            </div>
        </div>
    </div>

    <div class="container comprehensive-content-2">
        <div class="row comprehensive-content-row">
            <div class="comprehensive-text-2 col-sm-12 col-md-6 col-lg-6">
                <div class="mt-2">
                    <h1>High Quality Live Learning at Scale</h1>
                </div>
                <p class="mt-4">Using software, we’re able to scale live instruction in an unprecedented way. Our
                    technology leverages vast amounts of data to help us identify the Experts who are capable of
                    delivering quality learning experiences and driving high customer satisfaction. We curate a select
                    group that is deeply knowledgeable in a particular area, has exceptional communication skills, and
                    is passionate about teaching. AI and process automation enable us to do this consistently and at
                    scale in multiple learning formats throughout the entire learning lifecycle.</p>
                <a href="#">Learn More</a>
                <div class="comprehensive-dash"></div>
            </div>
            <div class="curation-image col-sm-12 col-md-6 col-lg-6">
                <img src="img/Curation.jpg" alt="" class="img-responsive">
            </div>
        </div>
    </div>

    <div class="container comprehensive-content-3">
        <div class="row">
            <div class="personalized-image col-sm-12 col-md-6 col-lg-6">
                <img src="img/personalized.jpg" alt="" class="img-responsive">
            </div>

            <div class="comprehensive-text-3 col-sm-12 col-md-6 col-lg-6">
                <div class="mt-2">
                    <h1>Personalized Learning in over 3,000 Subjects</h1>
                </div>
                <p class="mt-4">Our proprietary platform leverages AI to personalize the experience for Learners of all
                    ages —from kindergarten to professional—in academic, test prep, enrichment, and certification
                    subjects. Our extensive data set and machine learning algorithms enable us to find the exact right
                    Expert for a given Learner’s needs, and allow us to hone in on the perfect person among thousands of
                    possible matches. The end result is a more effective, engaging, and enriching experience for both
                    Learners and Experts.</p>
                <a href="#">Learn More</a>
                <div class="comprehensive-dash"></div>
            </div>
        </div>
    </div>
    <br>

    <div class="container talented_teachers">
        <h1 class="text-center">Talented and highly qualified tutors to<br>serve you for online help.</h1>
        <h5>We help the students get the grades that they are actually capable of getting!</h5>
        <p>Our tutor makes learning simple and easy for students by their innovative teaching methods at affordable fees
            in Darbhanga, Patna, Delhi. We are one of the leading home tutor providers in Darbhanga, Patna, Delhi. We
            have 300+ tutors registered with us. We follow a strict registration and verification process before having
            the teachers in Darbhanga, Patna, Delhi.<br><br>
            Tutar at door is a home tuition consultancy which lets you to find suitable home
            tutor for your ward in your city. We provide you with the finest devoted and faithful home tutor. We believe
            in a quality interface working with both students, tutors and parents all over Patna , Delhi, Darbhanga. We
            help them to fulfil. their requirements. We provide you the devoted and loyal home tutors who enhance the
            performance of your ward. We assure you to provide the best quality. In today's era home tuition is one of
            the reasons behind the success of a student because home tutors provide personalised attention. Our devoted
            facullis provide one on one attention to hup. students to score better. The students get 100% Attention from
            the tutor unlike coaching. This one-on-one attention and teaching allow students to ask them doubts without
            any hesitation. This kind of guidance by home tutors help students to learn and achieve bettes.
            Tutor at doon is the best home tutors provider in Patna, Darbhanga, Delhi. We provide a specialised Tutor in
            Patna, Darbhanga, Delhi for a number of academic courses consisting of science, arts, commerce and computer
            etc.</p>
    </div>


    <div class="container quote_section">
        <div class="quote-text">
            <p>“If we’re successful, we can change the outcomes of millions of people.”</p>
        </div>
        <p class="quote-name"> Nathan Schultz </p>
        <p class="quote-title"> President, Learning Services </p>
    </div>


    <div class="how-works">
        <h1 class="works-title text-center">How it works</h1>
        <div class="works-wrapper">
            <div class="info-wrapper">
                <div class="info"><img src="img/hw-circle-1.png" alt="Circle picture">
                    <div class="text-wrapper">
                        <h2 class="title-text">Type Your Question</h2>
                        <p class="info-text">Log on and type what you’re struggling with</p>
                    </div>
                </div>
                <div class="info"><img src="img/hw-circle-2.png" alt="Circle picture">
                    <div class="text-wrapper">
                        <h2 class="title-text">Connect with a Tutor</h2>
                        <p class="info-text">Typically takes less than 60 seconds</p>
                    </div>
                </div>
                <div class="info"><img src="img/hw-circle-3.png" alt="Circle picture">
                    <div class="text-wrapper">
                        <h2 class="title-text">Get it solved!</h2>
                        <p class="info-text">Tutor will work with you through your question</p>
                    </div>
                </div>
            </div>
            <img class="img-responsive device-img" src="img/hw-devices.png" alt="Devices">
        </div>
    </div>

    <br><Br><br><br><br>

    <div class="edge">
        <div class="edge-wrapper">
            <h1 class="edge-title text-center">The Tutoratdoor <br class="visible-xs"> Review Edge</h1>
            <div class="edge-items">
                <div class="edge-item">
                    <img src="img/tpr-edge-icon-1.png" alt="TPR Edge Icon">
                    <h2 class="item-title">Quick Help by Experts</h2>
                    <p class="item-info text-center">Connect with an expert tutor <br class="visible-lg"> on-demand
                        within 60 seconds or less.</p>
                </div>
                <div class="edge-item">
                    <img src="img/tpr-edge-icon-2.png" alt="TPR Edge Icon">
                    <h2 class="item-title">Customized Learning</h2>
                    <p class="item-info text-center">Choose from over 3,000+ tutors <br class="visible-lg"> for 1-on-1
                        lessons based on your <br class="visible-lg"> goals and interests.</p>
                </div>
                <div class="edge-item mr-top-15">
                    <img src="img/tpr-edge-icon-3.png" alt="TPR Edge Icon">
                    <h2 class="item-title">80+ Subjects</h2>
                    <p class="item-info text-center">From Statistics, Calculus and <br class="visible-lg"> Chemistry to
                        Algebra, our experts <br class="visible-lg"> have you covered</p>
                </div>
                <div class="edge-item mr-top-15">
                    <img src="img/tpr-edge-icon-4.png" alt="TPR Edge Icon">
                    <h2 class="item-title">Anytime, Anywhere</h2>
                    <p class="item-info text-center">Take online lessons at the time <br class="visible-lg"> and place
                        that suits you.</p>
                </div>
            </div>
        </div>
    </div>

    <br><Br>

    <!-- ---------------------------------------------- Testimonials section -------------------------- -->

    <section class="testimonial-section">
        <div class="text-center p-4 testiheader">
            <h3>What Says Most Of Our</h3> <br>
            <h2>Happy <span class="singletesticlient">Clients</span></h2>
        </div>

        <div class="testi-dash"></div>

        <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
            <div class="carousel-indicators testi-carouse-indicator">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="carouse-indicator active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    class="carouse-indicator" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner testi-carousel-inn container">
                <div class="carousel-item active">
                    <div class="row carouse-row">
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center p-4 mb-4">
                            <div class="carouse-content">
                                <div class="right-quotee-div">
                                    <i class="fa-solid fa-quote-right right-quotee"></i>
                                </div>
                                <img src="img/tstm1.jpg" alt="" class="img-responsive testiimg">
                                <div class="testi-ranking">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>First Lorem ipsum dolor, sit amet consecem ipsa? Cum explicabo similique fugiat quos
                                    a nam sint, iusto temporibus natus, cupiditate sed beatae aliquid. Ex.</p>
                                <div class="h4">Person 1</div>
                                <span>Finance Mininster</span>
                                <div class="left-quotee-div">
                                    <i class="fa-solid fa-quote-left left-quotee"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center p-4 mb-4">
                            <div class="carouse-content">
                                <div class="right-quotee-div">
                                    <i class="fa-solid fa-quote-right right-quotee"></i>
                                </div>
                                <img src="img/tstm2.jpg" alt="" class="img-responsive testiimg">
                                <div class="testi-ranking">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half"></i>
                                </div>
                                <p>Second Lorem ipsum dolor, sit amet consectetur adipisicore tenetur eius ab dolorem
                                    ipsa? Cum explicabo similique fugiat quos a nam sint, iusto temporibus natus,
                                    cupiditate sed beatae aliquid. Ex.</p>
                                <div class="h4">Person 2</div>
                                <span>Manager</span>
                                <div class="left-quotee-div">
                                    <i class="fa-solid fa-quote-left left-quotee"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center p-4 mb-4">
                            <div class="carouse-content">
                                <div class="right-quotee-div">
                                    <i class="fa-solid fa-quote-right right-quotee"></i>
                                </div>
                                <img src="img/tstm3.jpg" alt="" class="img-responsive testiimg">
                                <div class="testi-ranking">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half"></i>
                                </div>
                                <p>third Lorem ipsum dolor, sit amet consectetur adipisis, cupiditate sed beatae
                                    aliquid. Ex.</p>
                                <div class="h4">Person 3</div>
                                <span>Deputy Chief Minister</span>
                                <div class="left-quotee-div">
                                    <i class="fa-solid fa-quote-left left-quotee"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row carouse-row">
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center p-4 mb-4">
                            <div class="carouse-content">
                                <div class="right-quotee-div">
                                    <i class="fa-solid fa-quote-right right-quotee"></i>
                                </div>
                                <img src="img/tstm2.jpg" alt="" class="img-responsive testiimg">
                                <div class="testi-ranking">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>First Lorem ipsum dolor, sit amet consectetur adipisimilique fugiat quos a nam sint,
                                    iusto temporibus natus, cupiditate sed beatae aliquid. Ex.</p>
                                <div class="h4">Person 4</div>
                                <span>Company Secretary</span>
                                <div class="left-quotee-div">
                                    <i class="fa-solid fa-quote-left left-quotee"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center p-4 mb-4">
                            <div class="carouse-content">
                                <div class="right-quotee-div">
                                    <i class="fa-solid fa-quote-right right-quotee"></i>
                                </div>
                                <img src="img/tstm3.jpg" alt="" class="img-responsive testiimg">
                                <div class="testi-ranking">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half"></i>
                                </div>
                                <p>Second Lorem ipsum dolor, sit amet consectsicing elit. Labore tenetur eius ab dolorem
                                    ipsa? Cum explicabo similique fugiat quos a nam sint, iusto temporibus natus,
                                    cupiditate sed beatae aliquid. Ex.</p>
                                <div class="h4">Person 5</div>
                                <span>Prime Minister</span>
                                <div class="left-quotee-div">
                                    <i class="fa-solid fa-quote-left left-quotee"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center p-4 mb-4">
                            <div class="carouse-content">
                                <div class="right-quotee-div">
                                    <i class="fa-solid fa-quote-right right-quotee"></i>
                                </div>
                                <img src="img/testi1.jpg" alt="" class="img-responsive testiimg">
                                <div class="testi-ranking">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>third Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore tenetur eius
                                    ab dolorem ipsa? Cum explicabo similique fugiat quos a nam sint, iusto temporibus
                                    natus, cupiditate sed beatae aliquid. Ex.</p>
                                <div class="h4">Person 6</div>
                                <span>Manager</span>
                                <div class="left-quotee-div">
                                    <i class="fa-solid fa-quote-left left-quotee"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <!-- <br><br><br> -->

    <!-- ---------------------------------------------- Testimonials section -------------------------- -->




    <?php include 'footer.php'; ?>
</body>

</html>
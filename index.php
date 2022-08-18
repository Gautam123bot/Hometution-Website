<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My project - Home page</title>


    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>




    <link rel="icon" type="image/x-icon" href="img/logo2.png">
    <script src="app.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="laptopmode.css">
    <link rel="stylesheet" href="tabletmode.css">
    <link rel="stylesheet" href="mobilemode.css">
    <link rel="stylesheet" href="laptop1024pxless.css">
    <link rel="stylesheet" href="laptop1024pxmore.css">
    <!-- <link rel="stylesheet" media="screen" href="style.css"> -->
    <script src="https://kit.fontawesome.com/b90099deb6.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
</head>

<body>

    <?php include "header.php"; ?>





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
                        <form action="" id="closethis">
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
                            <input type="text" name="" id="" placeholder="Name">
                            <input type="text" name="" id="" placeholder="Phone*">
                            <input type="text" name="" id="" placeholder="Email*">
                            <textarea name="" id="" cols="30" rows="5">Message</textarea>
                            <button class="open_form_submit">Submit</button>
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


    <div id="carouselExampleIndicators" class="carousel slide back-carouse" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item index-carousel active">
                <img src="img/tution14.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item index-carousel">
                <img src="img/tution16.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item index-carousel">
                <img src="img/tution17.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item index-carousel">
                <img src="img/tution3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev prev-icon-carousel" type="button"
            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next next-icon-carousel" type="button"
            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container col-md-3 col-sm-6 col-lg-12 formcontainer">
        <form action="/action_page.php">
            <div class="optionfield">
                <select class="cochinoption" id="cochin" name="cochin">
                    <option selected="selected" value="0">Select Class/Course</option>
                    <option value="8">I - V</option>
                    <option value="9">VI - VIII</option>
                    <option value="10">IX - X</option>
                    <option value="11">XI - XII</option>
                    <option value="12">B.A - M.A</option>
                    <option value="13">B.COM - M.COM</option>
                    <option value="14">B.SC - M.SC</option>
                    <option value="15">B.TECH - M.TECH</option>
                    <option value="16">BCA - MCA</option>
                    <option value="17">COMPETITIVE EXAM</option>
                    <option value="18">IIT - JEE - PMT - AIEEE</option>
                    <option value="20">LANGUAGES</option>
                    <option value="21">CA/CS/IPCC/CPT</option>
                    <option value="22">DRAWING / PAINTING / SKETCHING / ART AND CRAFTS</option>
                    <option value="23">Graduate</option>
                    <option value="1023">YOGA</option>
                    <option value="1024">GRAPHIC DESIGN</option>
                    <option value="1025">DANCE / MUSIC</option>
                    <option value="2026">SPEECH THERAPIST </option>
                    <option value="2027">PRE-PRIMARY</option>
                </select>
            </div>
            <div class="optionfield">
                <select class="cochinoption" id="cochin" name="cochin">
                    <option selected="selected" value="0">Select Subject</option>
                </select>
            </div>
            <div class="optionfield">
                <input class="cochinoption" type="text" placeholder="Enter your locality">
            </div>
            <div class="buttonorange">
                <button type="button" class="btnn">Search</button>
            </div>
        </form>
    </div>

    <!-- <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="select-ct">

            <select name="search1$ddlclass"
                onchange="javascript:setTimeout('__doPostBack(\'search1$ddlclass\',\'\')', 0)" id="search1_ddlclass"
                class="form-control">
                <option selected="selected" value="0">Select Class/Course</option>
                <option value="8">I - V</option>
                <option value="9">VI - VIII</option>
                <option value="10">IX - X</option>
                <option value="11">XI - XII</option>
                <option value="12">B.A - M.A</option>
                <option value="13">B.COM - M.COM</option>
                <option value="14">B.SC - M.SC</option>
                <option value="15">B.TECH - M.TECH</option>
                <option value="16">BCA - MCA</option>
                <option value="17">COMPETITIVE EXAM</option>
                <option value="18">IIT - JEE - PMT - AIEEE</option>
                <option value="20">LANGUAGES</option>
                <option value="21">CA/CS/IPCC/CPT</option>
                <option value="22">DRAWING / PAINTING / SKETCHING / ART AND CRAFTS</option>
                <option value="23">Graduate</option>
                <option value="1023">YOGA</option>
                <option value="1024">GRAPHIC DESIGN</option>
                <option value="1025">DANCE / MUSIC</option>
                <option value="2026">SPEECH THERAPIST </option>
                <option value="2027">PRE-PRIMARY</option>

            </select>
        </div>
    </div> -->

    <!-- ---------------------------------------------- Hiring Section ------------------------------------------- -->

    <div class="hiring-section">
        <div class="container hiringheader">
            <h2 class="hiringheading p-3">Hiring A Tutor Is Easy. Here Is How It Works:</h2>
            <p class="hiringpara">"SR Tutors" expertise in providing Home Tutors & Online tuitions in India. We offers a
                wide-range of tutoring programs citywise.</p>
        </div>
        <div class="container middle-section">
            <div class="row p-3">
                <div class="col-sm-12 col-md-6 col-lg-3 middle-section-child">
                    <div class="single-product p-3">
                        <img src="img/fourimg1.jpg" class="img-responsive fourimage" alt="" width="300" height="auto">
                        <h4><a href="#">Search For Your Tutor</a></h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, qui autem. Alias
                            voluptatibus totam autem at animi, ducimus nihil odit! Autem a at deleniti repellendus amet
                            odit nobis alias quam.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 middle-section-child">
                    <div class="single-product p-3">
                        <img src="img/fourimg2.jpg" class="img-responsive fourimage" alt="" width="300" height="auto">
                        <h4><a href="#">Schedule Your Class:</a></h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, qui autem. Alias
                            voluptatibus totam autem at animi, ducimus nihil odit! Autem a at deleniti repellendus amet
                            odit nobis alias quam.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 middle-section-child">
                    <div class="single-product p-3">
                        <img src="img/fourimg3.jpg" class="img-responsive fourimage" alt="" width="300" height="auto">
                        <h4><a href="#">Get Reviews For Tutor:</a></h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, qui autem. Alias
                            voluptatibus totam autem at animi, ducimus nihil odit! Autem a at deleniti repellendus amet
                            odit nobis alias quam.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 middle-section-child">
                    <div class="single-product p-3">
                        <img src="img/fourimg4.jpg" class="img-responsive fourimage" alt="" width="300" height="auto">
                        <h4><a href="#">Focus on Your Lessons:</a></h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, qui autem. Alias
                            voluptatibus totam autem at animi, ducimus nihil odit! Autem a at deleniti repellendus amet
                            odit nobis alias quam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------------------------------------- End of Hiring Section -------------------------- -->

    <!-- <div class="container-fluid">
        <div class="backimage relative">
            <div class="content"></div>
        </div>
    </div> -->

    <!-- <section class="cta-7">
        <div class="cta-bg7 relative">
            <div class="overlay cta-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="cta-content">
                        <div class="col-sm-6 col-xs-12">
                            <div class="single-cta first-cta">
                                <span class="et-line icon-hazardous"></span>
                                <h3><a href="#">Book a Free Demo Class</a></h3>
                                <p>Interact with the tutor &amp; understand your child’s current preparation level via Benchmark Test.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="single-cta last-cta">
                                <span class="et-line icon-pricetags"></span>
                                <h3><a href="#">Connect. Learn. Grow.</a></h3>
                                <p>Connect &amp; start tuitions. Download mobile app to access online &amp; offline study content &amp; assessment tools.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- ------------------------------------------------------------------------------------------------------------- -->

    <div class="container-fluid mt-4 mb-4 p-4 quality-teachers">
        <h3 class="p-2">High quality Teachers</h3>
        <p>Only <span>55.1%</span> of teachers that apply make through our application process</p>
    </div>

    <!-- -------------------------------------------------------------------------------------------------------------- -->

    <div class="container count p-3">
        <div class="row count-content">
            <div class="col-sm-4">
                <h5>4500+</h5>
                <p>Subjects</p>
            </div>
            <div class="col-sm-4">
                <h5>500+</h5>
                <p>Skills</p>
            </div>
            <div class="col-sm-4">
                <h5>250+</h5>
                <p>Languages</p>
            </div>
        </div>
    </div>


    <!-- ----------------------------------------------------------------------------------------------------- -->

    <div class="brick-container">
        <div class="container bricks-bg">
            <div class="row ">
                <div class="col-sm-12 col-sm-push-1 brick-content">
                    <h3>What we do?</h3>
                    <p>TeacherOn.com is a free website, trusted by thousands of students and teachers, all over the
                        world.</p>
                    <p>You can find local tutors, online teachers, and teachers to help with tutoring, coaching,
                        assignments, academic projects, and dissertations for over 4500 subjects.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------------------------------------- End of brick section----------------------------------------- -->

    <!-- ------------------------------------------------- Start of support section----------------------------------------- -->

    <section class="threebox">
        <div class="container threebox-contain">
            <div class="row">
                <!-- <div class="col-md-12 col-sm-12 col-xs-12 pb25"> -->
                <div class="col-md-12 col-sm-12 col-lg-4 col-xs-12 ">
                    <div class="equalbox">
                        <img src="img/img-1.png">
                        <h3>24×6</h3>
                        <p>Our tutors are available round the clock. Choose your slots as you like!</p>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-lg-4 col-xs-12 ">
                    <div class="equalbox">
                        <img src="img/img-2.png">
                        <h3>TRY FIRST</h3>
                        <p>Ask a free question, Get on a free demo class, access to knowledge base!</p>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-lg-4 col-xs-12 ">
                    <div class="equalbox">
                        <img src="img/img-3.png">
                        <h3>BEST FACULTY</h3>
                        <p>Learn from our Highly Accomplished Tutor <br>Force!</p>
                    </div>
                </div>
                <!-- </div> -->
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 seemorebtn_wrap" data-bs-toggle="modal"
                data-bs-target="#scheduled-session">
                <a href="#" class="seemorebtn">Schedule For a Free Demo Session</a>
            </div>


            <!-- ------------------------------------------------------------------------------- -->

            <!-- <li class="nav-item" data-bs-toggle="modal" data-bs-target="#democlass">
                    <a class="nav-link" href="#">Contact Us</a>
                </li> -->

            <div class="modal fade" id="scheduled-session">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content demo_session_full">

                        <div class="modal-header demo_session_header">
                            <h4 class="modal-title">Schedule demo class</h4>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
                            <button type="button" class="close cross-close-login" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="demo_session">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-6 demo_calendar">
                                        <input type="text" name="" id="" placeholder="Enter name here">
                                        <input type="text" name="" id="" placeholder="Enter email here">
                                        <input type="text" name="" id="" placeholder="Enter phone number here">
                                        <label for="">Calendar section.........................</label>




                                        <!-- .................. -->

                                        <form action="">
                                            <label for="date">Date</label>
                                            <div class="input-group date" id="datepicker">
                                                <input type="text" class="form-control" name="" id="">
                                                <span class="input-group-append">
                                                    <span class="input-group-text bg-white">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </form>



                                        <!-- .................. -->








                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 demo_form">
                                        <div class="row">
                                            <label for="">Time</label><br>

                                            <div class="col-sm-4 col-md-4 col-lg-4 time1">
                                                <select class="demo_select" name="hr" id="hr">
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 time1">
                                                <select class="demo_select" name="min" id="min">
                                                    <option value="00">00</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>
                                                    <option value="50">50</option>
                                                    <option value="51">51</option>
                                                    <option value="52">52</option>
                                                    <option value="53">53</option>
                                                    <option value="54">54</option>
                                                    <option value="55">55</option>
                                                    <option value="56">56</option>
                                                    <option value="57">57</option>
                                                    <option value="58">58</option>
                                                    <option value="59">59</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-4 col-md-4 col-lg-4 time1">
                                                <select class="demo_select" name="ampm" id="ampm">
                                                    <option value="AM">AM</option>
                                                    <option value="PM">PM</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-6 col-lg-6">
                                                <label for="">Country</label><br>
                                                <select class="demo_select" name="" id="">
                                                    <option value="">Country</option>
                                                    <option value="">India</option>
                                                    <option value="">Afganistan</option>
                                                    <option value="">Alzeria</option>
                                                    <option value="">Australia</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 col-lg-6">
                                                <label for="">Timezone</label><br>
                                                <select class="demo_select" name="" id="">
                                                    <option value="">Kolkata, India</option>
                                                    <option value=""></option>
                                                    <option value=""></option>
                                                </select>
                                            </div>

                                            <div class="col-sm-12 col-lg-12">
                                                <label for="">You found us through</label><br>
                                                <select class="demo_select" id="" name="source">
                                                    <option value="Website">Website</option>
                                                    <option value="Live Chat">Live Chat</option>
                                                    <option value="Facebook">Facebook</option>
                                                    <option value="Instagram">Instagram</option>
                                                    <option value="Other Social Media">Other Social Media</option>
                                                    <option value="BBB">BBB</option>
                                                    <option value="Sulekha">Sulekha</option>
                                                    <option value="JustDial">JustDial</option>
                                                    <option value="Blog">Blog</option>
                                                    <option value="Quora">Quora</option>
                                                    <option value="Reference">Reference</option>
                                                    <option value="Linkedin">Linkedin</option>
                                                    <option value="others">Others</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-6 col-lg-6 col-md-6">
                                                <label for="">Grade</label><br>
                                                <select class="demo_select" name="grade" id="grade_subject"
                                                    onchange="Checkothergr(this.value);">
                                                    <option value="">- Select -</option>
                                                    <option value="1">Class 1</option>
                                                    <option value="2">Class 2</option>
                                                    <option value="3">Class 3</option>
                                                    <option value="4">Class 4</option>
                                                    <option value="5">Class 5</option>
                                                    <option value="6">Class 6</option>
                                                    <option value="7">Class 7</option>
                                                    <option value="8">Class 8</option>
                                                    <option value="9">Class 9</option>
                                                    <option value="10">Class 10</option>
                                                    <option value="11">Class 11</option>
                                                    <option value="12">Class 12</option>
                                                    <!--option value="otherg">Other</option -->
                                                </select>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                <label for="">Subject</label><br>
                                                <select class="demo_select" name="" id="">
                                                    <option value="">Mathematics</option>
                                                    <option value="">Physics</option>
                                                    <option value="">Chemistry</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 col-lg-12">
                                                <label for="">Sub Subject</label><br>
                                                <select class="demo_select" name="" id="">
                                                    <option value="">Calculus</option>
                                                    <option value="">Trigonometry</option>
                                                    <option value="">Height and Distance</option>
                                                    <option value="">Sets and Relations</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 col-lg-12">
                                                <label for="">Topic</label><br>
                                                <textarea name="" id="" cols="45" rows="3"></textarea>
                                            </div>
                                            <div class="col-sm-12 col-lg-12">
                                                <button class="schedule_btn">Schedule Demo</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- --------------------------Ending of modal---------------------------- -->



            <!-- ------------------------------------------------------------------------------- -->






        </div>
    </section>

    <!-- ------------------------------------------------- End of support section----------------------------------------- -->

    <!-- ------------------------------------------- Start of red benefit section --------------------------------- -->

    <section class="benefitsec">
        <div class="container benefitsec-contain">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 heading_wrap">
                    <h2 class="white_headbordr">Benefits of Online Tutoring in Vnaya</h2>
                </div>

                <div class="col-md-12 col-sm-12 col-lg-4 col-xs-12 benefitwrap">
                    <img src="img/benefit1.png" class="img-responsive">
                    <p class="benecontent">Dedicated academic counselor</p>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-4 col-xs-12 benefitwrap">
                    <img src="img/benefit2.png" class="img-responsive">
                    <p class="benecontent">Customized Session As Per Individual Board/Curriculum</p>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-4 col-xs-12 benefitwrap">
                    <img src="img/benefit3.png" class="img-responsive">
                    <p class="benecontent">Learning leaders for free parenting counseling</p>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-4 col-xs-12 benefitwrap">
                    <img src="img/benefits4.png" class="img-responsive">
                    <p class="benecontent"> Monthly report cards for parents</p>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-4 col-xs-12 benefitwrap">
                    <img src="img/benefit5.png" class="img-responsive">
                    <p class="benecontent">Weekly Online Assessments and Evaluations </p>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-4 col-xs-12 benefitwrap">
                    <img src="img/benefit6.png" class="img-responsive">
                    <p class="benecontent">Natural Learning Style Methodology Adopted</p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 getbtnwrap">
                    <a href="#" class="getstratbtn" data-bs-toggle="modal" data-bs-target="#scheduled-session">Get
                        Started</a>
                </div>
            </div>

        </div>
    </section>

    <!-- ------------------------------------------- End of red benefit section --------------------------------- -->



    <!-- ----------------------------------------- Start of perfect tutor section ------------------------- -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center perfect-tutor-heading">
                    <h2>
                        <span>Get a Perfect Home Tutor within 30 Minutes</span>
                    </h2>
                </div>
                <div class="col-md-12 col-sm-12" style="padding: 50px 0;">
                    <div class="clearfix text-center">
                        <div class="step-boxes">
                            <!-- 1 -->
                            <div class="process-box">
                                <div class="process-img">
                                    <img src="img/student_post.jpg" width="80px">
                                </div>
                                <h5 class="title">Post Free Requirement</h5>
                                <div class="line">
                                    <div class="number">
                                        <span class="">1</span>
                                    </div>
                                </div>
                            </div>
                            <!--/ #1 -->
                            <!-- 1 -->
                            <div class="process-box">
                                <div class="process-img">
                                    <img src="img/notification.jpg" width="80px">
                                </div>
                                <h5 class="title">Instant Responses</h5>
                                <div class="line">
                                    <div class="number">
                                        <span class="">2</span>
                                    </div>
                                </div>
                            </div>
                            <!--/ #1 -->
                            <!-- 1 -->
                            <div class="process-box">
                                <div class="process-img">
                                    <img src="img/weight.png" width="80px">
                                </div>
                                <h5 class="title">Compare, Hire and Learn</h5>
                                <div class="line">
                                    <div class="number">
                                        <span class="">3</span>
                                    </div>
                                </div>
                            </div>
                            <!--/ #1 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------------------- End of perfect tutor section ----------------------------------------- -->

    <section>
        <div class="container subject-tutor">
            <h2>Tutors According to your Subjects</h2>
            <div class="row">
                <div class="single-subject col-sm-6 col-md-3 p-4">
                    <img src="icons/cal-1.png" alt="" class="img-responsive" width="50">
                    <p>Mathematics</p>
                </div>
                <div class="single-subject col-sm-6 col-md-3 p-4">
                    <img src="icons/bio.png" alt="" class="img-responsive" width="50">
                    <p>Biology</p>
                </div>
                <div class="single-subject col-sm-6 col-md-3 p-4">
                    <img src="icons/eco.png" alt="" class="img-responsive" width="50">
                    <p>Economics</p>
                </div>
                <div class="single-subject col-sm-6 col-md-3 p-4">
                    <img src="icons/history.png" alt="" class="img-responsive" width="50">
                    <p>History</p>
                </div>
                <div class="single-subject col-sm-6 col-md-3 p-4">
                    <img src="icons/science.png" alt="" class="img-responsive" width="50">
                    <p>Science</p>
                </div>
                <div class="single-subject col-sm-6 col-md-3 p-4">
                    <img src="icons/physics.png" alt="" class="img-responsive" width="50">
                    <p>Physics</p>
                </div>
                <div class="single-subject col-sm-6 col-md-3 p-4">
                    <img src="icons/busi.png" alt="" class="img-responsive" width="50">
                    <p>Business Studies</p>
                </div>
                <div class="single-subject col-sm-6 col-md-3 p-4">
                    <img src="icons/political.png" alt="" class="img-responsive" width="50">
                    <p>Political Science</p>
                </div>
                <div class="single-subject col-sm-6 col-md-3 p-4">
                    <img src="icons/hindi.png" alt="" class="img-responsive" width="50">
                    <p>Hindi</p>
                </div>
                <div class="single-subject col-sm-6 col-md-3 p-4">
                    <img src="icons/english.png" alt="" class="img-responsive" width="50">
                    <p>English</p>
                </div>
                <div class="single-subject col-sm-6 col-md-3 p-4">
                    <img src="icons/chem-1.png" alt="" class="img-responsive" width="50">
                    <p>Chemistry</p>
                </div>
                <div class="single-subject col-sm-6 col-md-3 p-4">
                    <img src="icons/french.png" alt="" class="img-responsive" width="50">
                    <p>French</p>
                </div>
                <div class="single-subject col-sm-6 col-md-3 p-4">
                    <img src="icons/comp-1.png" alt="" class="img-responsive" width="50">
                    <p>Computer Science</p>
                </div>
                <div class="single-subject col-sm-6 col-md-3 p-4">
                    <img src="icons/acc.png" alt="" class="img-responsive" width="50">
                    <p>Accounts</p>
                </div>
                <div class="single-subject col-sm-6 col-md-3 p-4">
                    <img src="icons/geography.png" alt="" class="img-responsive" width="50">
                    <p>Geography</p>
                </div>
                <!-- <div class="col-md-12" style="margin-bottom: 15px;">
					<a data-target="#modalfull" data-toggle="modal" href="#modalfull" data-backdrop="static" data-keyboard="false" class="btn btn-primary anchor-highlight-links asatutor" title="Explore more subjects" style="margin-top:0px">Explore more subjects</a>
				</div> -->
                <div class="single-subject single-button col-sm-12 col-md-12">
                    <button class="single-subject-btn">Explore more subjects</button>
                </div>
            </div>
        </div>
    </section>

    <!-- ----------------------------------------------- End of subject description section --------------------------- -->

    <!-- ----------------------------------------------- Start of Why Tutor section --------------------------- -->

    <div class="container-fluid why-tutor p-4">
        <div class="row why-tutor-header">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 How_it_h2">
                <h2>Why S.R. Tutors ?</h2>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center why-tutor-content1">
                <img src="img/post_new.png" width="65">
                <div class="why-total">
                    <h3>50711</h3>
                </div>
                <h4 class="why-content">Requirement Posted</h4>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center why-tutor-content2">
                <img src="img/tutor_new.png" width="65">
                <div class="why-total">
                    <h3>92539</h3>
                </div>
                <h4 class="why-content">Registered Tutors</h4>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center why-tutor-content3">
                <img src="img/star.png" width="65">
                <div class="why-total">
                    <h3>4.5</h3>
                </div>
                <h4 class="why-content">Ratings on Social Media</h4>
            </div>
        </div>
        <!-- <div class="col-md-12 " style="margin-top: 30px"> -->
        <!-- <button type="button" href="#modalfull" data-target="#modalfull" data-toggle="modal" class="btn btn-primary bln-lg" data-backdrop="static" data-keyboard="false">
				<span> Book a Free Trial Now </span>
			</button> -->
        <div class="single-button col-sm-12 col-md-12 col-lg-12 mt-4" data-bs-toggle="modal"
            data-bs-target="#scheduled-session">
            <button class="single-subject-btn">Book a Free Trial Now</button>
        </div>
        <!-- </div> -->
    </div>

    <!-- ----------------------------------------------- End of Why Tutor section --------------------------- -->

    <!-- ----------------------------------------------- Start of Top Tutors section --------------------------- -->


    <div class="container-fluid tutor-section p-4">

        <div class="top-tutor-heading mb-4">
            <h1>Few of our Top Tutors</h1>
        </div>

        <div data-aos="fade-up" data-aos-duration="2000" class="aos-init aos-animate">
            <div class="container top-tutor-section">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                <img alt="" src="img/sirimg.jpg">
                            </div>
                            <div class="team-content">
                                <h3 class="team-title">Shamsher Sir</h3>
                                <p class="team-description">
                                    M.Sc in Mathematics<br>20 Yrs Experience
                                </p>
                                <ul class="social-links">
                                    <li><a data-target="#modalfull" data-toggle="modal" href="#modalfull">Contact Tutor
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                <img alt="" src="img/sirimg.jpg">
                            </div>
                            <div class="team-content">
                                <h3 class="team-title">Smriti Saini</h3>
                                <p class="team-description">
                                    B.A and LLB<br>3 Yrs Experience
                                </p>
                                <ul class="social-links">
                                    <li><a data-target="#modalfull" data-toggle="modal" href="#modalfull">Contact
                                            Tutor</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                <img alt="" src="img/sirimg.jpg">
                            </div>
                            <div class="team-content">
                                <h3 class="team-title">Dharmendra Yadav</h3>
                                <p class="team-description">
                                    B.Tech<br>15 Yrs Experience
                                </p>
                                <ul class="social-links">
                                    <li>
                                        <a data-target="#modalfull" data-toggle="modal" href="#modalfull">Contact
                                            Tutor</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                <img alt="" src="img/sirimg.jpg">
                            </div>
                            <div class="team-content">
                                <h3 class="team-title">Pragya gupta</h3>
                                <p class="team-description">
                                    UGC<br>3 Yrs Experience
                                </p>
                                <ul class="social-links">
                                    <li><a data-target="#modalfull" data-toggle="modal" href="#modalfull">Contact
                                            Tutor</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="top-tutor-link" data-target="#modalfull" data-toggle="modal" href="#modalfull">
            <button type="button" class="btn btn-primary btn-md top-tutor-button">Hire Best Among 23000 Tutors</button>
        </a><br>
    </div>


    <!-- ----------------------------------------------- End of Top Tutors section --------------------------- -->


    <!-- ------------------------------------------------- map section----------------------------------------- -->

    <div class="lozad mt-4" data-background-image="https://assets2.teacheron.com/resources/assets/img/team/faces.jpg"
        data-loaded="true">
        <div class="pt-4 pb-4 text-center backgroundblack">
            <h2 class="text-center lozadheader p-3">Teachers from over 125 countries</h2>
            <div class="outermap"><img class="img-responsive lozad-custom"
                    data-src="https://assets2.teacheron.com/resources/assets/img/customImages/global-presence-125-countries-blue.png"
                    src="img/map.png" alt="Global presence in 125+ countries"></div>
        </div>
    </div>

    <!-- ------------------------------- End of map section --------------------------------------------- -->

    <?php include "footer.php"; ?>

    <!-- ------------------------------------------------------------------------------------------------------------------- -->



    <!-- --------------------------------------- Start of Home Modal -------------------------------->


    <div class="modal fade in" id="subscription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <!-- <div class="modal-body"> -->
                <div class="subscription_content">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6 subscription_img">
                            <img src="img/neverdone.gif" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 subscription_form">
                            <button type="button" class="close cross-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <img src="img/email1.png" alt="" class="img-responsive">
                            <h3>Stay Ahead</h3>
                            <p class="text-center" style="margin-bottom: 0;">Subscribe to our weekly Newsletter!</p>
                            <p class="text-center">Parenting, Academics, Test Preparation, Offers and more.... Stay
                                Tuned!</p>
                            <form action="" class="inside_form text-center">
                                <div class="selectone">
                                    <label for="">I am :</label>
                                    <!-- <div class="radio_btn"><input type="radio" name="clients" id=""></div> -->
                                    <div class="input_contain input_con1">
                                        <input class="form-check-input check-input1" type="radio"
                                            name="flexRadioDefault" id="flexRadioDefault2">
                                    </div>
                                    <label for="">Parent</label>
                                    <!-- <div class="radio_btn"><input type="radio" name="clients" id=""></div> -->
                                    <div class="input_contain input_con1">
                                        <input class="form-check-input check-input1" type="radio"
                                            name="flexRadioDefault" id="flexRadioDefault2">
                                    </div>
                                    <label for="">Student</label>
                                    <!-- <div class="radio_btn"><input type="radio" name="clients" id=""></div> -->
                                    <div class="input_contain input_con1">
                                        <input class="form-check-input check-input1" type="radio"
                                            name="flexRadioDefault" id="flexRadioDefault2">
                                    </div>
                                    <label for="">Tutor</label>
                                </div>
                                <div class="row input_box">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <input type="text" name="" id="" placeholder="First Name">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <input type="text" name="" id="" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="row input_box">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input class="input_box_email" type="email" name="" id="" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="#" class="sigsbsform" id="subsforn">Sign me up!</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>

    <script>
        var subscription = new bootstrap.Modal(document.getElementById('subscription'), {})
        subscription.show()
    </script>





    <!-- -------------------------- End of Home Modal -------------------------------------------- -->

</body>

</html>
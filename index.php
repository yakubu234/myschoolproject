<!DOCTYPE html>
<html lang="en-US"><!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">

    <!-- Title -->
    <title>Medicalpress | Just another Website</title>

    <!-- Define a viewport to mobile devices to use - telling the browser to assume that the page is as wide as the device (width=device-width) and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon-new.png">

    <!-- Google Web Font -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,800,900,300,200" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Include the bootstrap stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
    <!-- Flexslider stylesheet -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
    <!-- Animations stylesheet -->
    <link rel="stylesheet" href="css/animations.css" type="text/css" media="all">
    <!-- Awesome Font stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
    <!-- Datepciker stylesheet -->
    <link rel="stylesheet" href="css/datepicker.css" type="text/css" media="all">
    <!-- Swipebox stylesheet -->
    <link rel="stylesheet" href="css/swipebox.css" type="text/css" media="all">
    <!-- meanmenu stylesheet -->
    <link rel="stylesheet" href="css/meanmenu.css" type="text/css" media="all">
    <!-- Include the site main stylesheet -->
    <link rel="stylesheet" href="css/main.css" type="text/css" media="all">
    <!-- Include the site ressponsive  stylesheet -->
    <link rel="stylesheet" href="css/custom-responsive.css" type="text/css" media="all">


    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="<php echo 'http://www.google.com/chromeframe/?redirect=true'; ?>">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<?php Include "header.php"; ?>


<!--slider-->
<div class="home-slider clearfix">
    <div class="flexslider loading" >
        <ul class="slides">
            <!--slide start-->
            <li>
                <img src="images/temp-images/imgre.png" alt="Medical Services <span>That You Can Trust</span>"/>
                <div class="content-wrapper clearfix">
                    <div class="container">
                        <div class="slide-content clearfix ">
                            <h1  >Medical Services <span>That You Can Trust</span></h1>
                            <p style="color: black;"  >Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod.</p>
                            <a class="slider-button" href="doctors-three-columns.html">Read More</a>
                        </div>
                    </div>
                </div>
            </li>
            <!--slide end-->

            <!--slide start-->
            <li>
                <img src="images/temp-images/laterdoc.png"  alt="We <span>Care</span> for <span>You</span>"/>
                <div class="content-wrapper clearfix">
                    <div class="container">
                        <div class="slide-content clearfix "  >
                            <h1>We <span>Care</span> for <span>You</span></h1>
                            <p style="color: black;"  >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <a class="slider-button" href="doctors-three-columns.html">Read More</a>
                        </div>
                    </div>
                </div>
            </li>
            <!--slide end-->
        </ul>
    </div>

    <!--appointment form-->
    <div class="appointment clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6  ">
                    <span class="btn make-appoint">Make an Appointment <i class="fa fa-caret-down"></i></span>
                </div>
            </div>
            <div class="clearfix">
                <div class="appointment-form clearfix animated">
                    <form  action="appointment_form_handler.php" method="POST" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6 common">
                                <input type="text" name="name" id="app-name" class="required" placeholder="Name" />
                            </div>
                            <div class="col-md-3 col-sm-6 common">
                                <input type="text" name="number" id="app-number" class="required number" placeholder="Phone Number"/>
                            </div>
                            <div class="col-md-3 col-sm-6 common">
                                <input type="email" name="email" id="app-email" class="required email" placeholder="Email Address"/>
                            </div>
                            <div class="col-md-3 col-sm-6 common">
                                <input type="text" name="date" id="datepicker" class="required" placeholder="Appointment Date"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10 common">
                                <input type="text" name="message" id="app-message" class="required" placeholder="Message" />
                            </div>
                            <div class="col-sm-1">
                                
                            </div>
                        </div>
                        <input type="submit" name="submit" value="register" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--appointment form end-->
</div>

<!--general services-->
<div class="features-var-two clearfix">
    <div class="container">
        <div class="slogan-section clearfix">
            <h2><span>Health and Medical</span> WordPress Theme</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
        <div class="row">
            <section class="single-feature text-center clearfix col-sm-4">
                <img src="images/temp-images/1st-big-feature.png" alt="Special Care Unit">
                <h3>Special Care Unit</h3>
                <div class="feature-border"></div>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            </section>
            <section class="single-feature text-center clearfix col-sm-4">
                <img src="images/temp-images/2nd-big-feature.png" alt="Caring Nursing Staff">
                <h3>Caring Nursing Staff</h3>
                <div class="feature-border"></div>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            </section>
            <section class="single-feature text-center clearfix col-sm-4">
                <img src="images/temp-images/3rd-big-feature.png" alt="Advanced Medical Equipment">
                <h3>Advanced Medical Equipment</h3>
                <div class="feature-border"></div>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            </section>
        </div>
    </div>
</div>
<!--general services end-->

<!--doctors section-->
<div class="home-doctors  clearfix">
    <div class="container">
        <div class="slogan-section animated fadeInUp clearfix">
            <h2>Meet our <span>Medical Specialists</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center">
                <div class="common-doctor animated fadeInUp clearfix">
                    <figure>
                        <a href="doctor-alex.html" title="Dr.Addison Alexander">
                            <img src="images/temp-images/wa.png" alt="Dr Addison" />
                        </a>
                    </figure>
                    <div class="text-content">
                        <h5><a href="doctor-alex.html">Dr.Addison Alexander</a></h5>
                        <div class="for-border"></div>
                        <p>
                            This text represents a brief introduction of doctor and this text will be displayed on homepage and all the places where multiple doctors are listed.
                        </p>
                    </div>
                </div>
                <a class="read-more" href="doctor-alex.html">Read More</a>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="common-doctor animated fadeInUp clearfix">
                    <figure>
                        <a href="doctor-becka.html" title="Dr.Adaline Becka">
                            <img src="images/temp-images/mrb.png" alt="doctor-1" />
                        </a>
                    </figure>
                    <div class="text-content">
                        <h5><a href="doctor-becka.html">Dr.Adaline Becka</a></h5>
                        <div class="for-border"></div>
                        <p>
                            This text represents a brief introduction of doctor and this text will be displayed on homepage and all the places where multiple doctors are listed.
                        </p>
                    </div>
                </div>
                <a class="read-more" href="doctor-becka.html">Read More</a>
            </div>

            <div class="visible-sm clearfix margin-gap"></div>

            <div class="col-md-3 col-sm-6 text-center">
                <div class="common-doctor animated fadeInUp clearfix">
                    <figure>
                        <a href="doctor-bert.html" title="Dr.Andrew Bert">
                            <img src="images/temp-images/mrc.png"  alt="doctor-4" />
                        </a>
                    </figure>
                    <div class="text-content">
                        <h5><a href="doctor-bert.html">Dr.Andrew Bert</a></h5>
                        <div class="for-border"></div>
                        <p>
                            This text represents a brief introduction of doctor and this text will be displayed on homepage and all the places where multiple doctors are listed.
                        </p>
                    </div>
                </div>
                <a class="read-more" href="doctor-bert.html">Read More</a>
            </div>

            <div class="col-md-3 col-sm-6 text-center">
                <div class="common-doctor animated fadeInUp clearfix">
                    <figure>
                        <a href="doctor-taleebin.html" title="Dr.Orana Taleebin">
                            <img src="images/temp-images/missc.jpg"  alt="doctor-3" />
                        </a>
                    </figure>
                    <div class="text-content">
                        <h5><a href="doctor-taleebin.html">Dr.Orana Taleebin</a></h5>
                        <div class="for-border"></div>
                        <p>
                            This text represents a brief introduction of doctor and this text will be displayed on homepage and all the places where multiple doctors are listed.
                        </p>
                    </div>
                </div>
                <a class="read-more" href="doctor-taleebin.html">Read More</a>
            </div>
            <div class="visible-sm clearfix margin-gap"></div>
        </div>
    </div>
</div>
<!--doctors section end-->

<!--services section tabs-->
<div class="home-services clearfix">
    <div class="container">
        <div class="slogan-section animated fadeInUp clearfix ae-animation-fadeInUp">
            <h2>We are Offering <span>Reliable Services</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>

        <div class="tab-main animated fadeInDown clearfix ae-animation-fadeInDown">
            <div class="row">
                <div class="col-sm-4">
                    <div class="tab-title active">
                        <h6>Dental Implants</h6>
                    </div>
                    <div class="tab-title">
                        <h6>Blood Bank</h6>
                    </div>
                    <div class="tab-title">
                        <h6>Medicine Research</h6>
                    </div>
                    <div class="tab-title">
                        <h6>Pharmaceutical Advice</h6>
                    </div>
                    <div class="tab-title">
                        <h6>Medical Counseling</h6>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="tab-content">
                        <article class="content clearfix hentry">
                            <div class="row">
                                <div class="col-md-6">
                                    <figure>
                                        <a href="services-dental.html">
                                            <img src="images/temp-images/Dental-Implants3.jpg" alt="sdental implant image">
                                        </a>
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <h5><a href="services-dental.html">Dental Implants</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip…</p>
                                    <a class="read-more" href="services-dental.html">Read More</a>
                                </div>
                            </div>
                        </article>
                        <article class="content clearfix hentry">
                            <div class="row">
                                <div class="col-md-6">
                                    <figure>
                                        <a href="services-blood.html">
                                            <img src="images/temp-images/bloodbank.jpg" alt="blood bank image">
                                        </a>
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <h5><a href="services-blood.html">Blood Bank</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip…</p>
                                    <a class="read-more" href="services-blood.html">Read More</a>
                                </div>
                            </div>
                        </article>
                        <article class="content clearfix hentry">
                            <div class="row">
                                <div class="col-md-6">
                                    <figure>
                                        <a href="services-research.html">
                                            <img src="images/temp-images/research.jpg"  alt="a woman with teloscope">
                                        </a>
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <h5><a href="services-research.html">Medicine Research</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip…</p>
                                    <a class="read-more" href="services-research.html">Read More</a>
                                </div>
                            </div>
                        </article>
                        <article class="content clearfix hentry">
                            <div class="row">
                                <div class="col-md-6">
                                    <figure>
                                        <a href="services-advice.html">
                                            <img src="images/temp-images/advicem.jpg"  alt="doctor advicing patient">
                                        </a>
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <h5><a href="services-advice.html">Pharmaceutical Advice</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip…</p>
                                    <a class="read-more" href="services-advice.html">Read More</a>
                                </div>
                            </div>
                        </article>
                        <article class="content clearfix hentry">
                            <div class="row">
                                <div class="col-md-6">
                                    <figure>
                                        <a href="services-counseling.html">
                                            <img src="images/temp-images/counsel.jpg" alt="doctor offering counsel to patient">
                                        </a>
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <h5><a href="services-counseling.html">Medical Counseling</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip…</p>
                                    <a class="read-more" href="services-counseling.html">Read More</a>
                                </div>
                            </div>
                        </article>
                    </div><!-- end of tab-content -->
                </div>
            </div>
        </div><!-- tab-main -->
    </div>
</div>
<!--services section tabs end-->

<!--blog posts section-->
<div class="home-blog blog-var-two clearfix">
    <div class="container">
        <div class="slogan-section animated fadeInUp clearfix">
            <h2>Latest News from <span>Health and Medical</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <article class="common-blog-post animated fadeInRight clearfix">
                    <figure>
                        <a href="image-post-format.html" title="Image Post Format">
                            <img src="images/temp-images/news-2-732x447.jpg"  alt="news-2" />
                        </a>
                    </figure>
                    <div class="text-content clearfix">
                        <h5><a href="image-post-format.html">Image Post Format</a></h5>
                        <div class="entry-meta">
                            <time class="entry-time updated" datetime="2014-05-10T11:07:36+00:00">May <strong>10</strong></time>
                            , by <a href="#" title="Posts by John Doe">John Doe</a>
                        </div>
                        <div class="for-border"></div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat&hellip; </p>
                    </div>
                </article>
                <a class="read-more" href="image-post-format.html">Read More</a>
            </div>

            <div class="col-md-4">
                <article class="common-blog-post animated fadeInRight clearfix">
                    <div class="gallery gallery-slider clearfix loading">
                        <ul class="slides">
                            <li>
                                <a href="images/temp-images/gallery-1.jpg" title="" >
                                    <img src="images/temp-images/gallery-1.jpg" alt="gallery-1" />
                                </a>
                            </li>
                            <li>
                                <a href="images/temp-images/gallery-2.jpg" title="" >
                                    <img src="images/temp-images/gallery-2.jpg" alt="gallery-2" />
                                </a>
                            </li>
                            <li>
                                <a href="images/temp-images/gallery-3.jpg" title="" >
                                    <img src="images/temp-images/gallery-3.jpg" alt="gallery-3" />
                                </a>
                            </li>
                            <li>
                                <a href="images/temp-images/gallery-2.jpg" title="" >
                                    <img src="images/temp-images/gallery-2.jpg" alt="gallery-4" />
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="text-content clearfix">
                        <h5><a href="gallery-post-format.html">Gallery Post Format</a></h5>
                        <div class="entry-meta">
                            <time class="entry-time updated" datetime="2014-05-10T11:07:36+00:00">May <strong>10</strong></time>
                            , by <a href="#" title="Posts by John Doe">John Doe</a>
                        </div>
                        <div class="for-border"></div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat&hellip; </p>
                    </div>
                </article>

                <a class="read-more" href="gallery-post-format.html">Read More</a>
            </div>

            <div class="col-md-4">
                <article class="common-blog-post animated fadeInRight clearfix">
                    <div class="video clearfix">
                        <div class="video-wrapper clearfix">
                            <iframe src="//player.vimeo.com/video/75594702?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="text-content clearfix">
                        <h5><a href="video-post-format.html">The Hero In All Of Us</a></h5>
                        <div class="entry-meta">
                            <time class="entry-time updated" datetime="2014-05-10T11:07:36+00:00">May <strong>10</strong></time>
                            , by <a href="#" title="Posts by John Doe">John Doe</a>
                        </div>
                        <div class="for-border"></div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat&hellip; </p>
                    </div>
                </article>
                <a class="read-more" href="video-post-format.html">Read More</a>
            </div>
        </div>

    </div>
</div>
<!--blog posts section end-->

<!--testimonials section-->
<div class="home-testimonial  clearfix">
    <div class="container">
            <div class="text-center">
                <div class="slogan-section animated fadeInUp clearfix">
                    <h2>What patients say <span>About MedicalPress</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                </div>
            </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 text-center">
                <div class="flexslider-three animated fadeInUp">
                    <ul class="slides">
                        <li>
                            <img class="img-circle" src="images/temp-images/author-22-130x130.jpg" alt="author-22" />
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation.</p>
                            </blockquote>
                            <div class="testimonial-footer clearfix">
                                <h3>Marina Forrest</h3>
                                <div class="for-border"></div>
                                <p><a target="_blank" href="#">Autommatic</a></p>
                            </div>
                        </li>
                        <li>
                            <img class="img-circle" src="images/temp-images/author-11-130x130.jpg"  alt="author-11" />
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            </blockquote>

                            <div class="testimonial-footer clearfix">
                                <h3>Jaden Wayne</h3>
                                <div class="for-border"></div>
                                <p><a target="_blank" href="#">Themeforest</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--testimonials section end-->



<!--page footer-->
<?php Include "footer.php" ; ?>
<script type='text/javascript' id='quick-js'></script>
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='js/jquery.swipebox.min.js'></script>
<script type='text/javascript' src='js/jquery.isotope.min.js'></script>
<script type='text/javascript' src='js/jquery.appear.js'></script>
<script type='text/javascript' src='js/jquery.ui.core.min.js'></script>
<script type='text/javascript' src='js/jquery.ui.datepicker.min.js'></script>
<script type='text/javascript' src='js/jquery.validate.min.js'></script>
<script type='text/javascript' src='js/jquery.form.js'></script>
<script type='text/javascript' src='js/jquery.autosize.min.js'></script>
<script type='text/javascript' src='js/jquery.meanmenu.min.js'></script>
<script type='text/javascript' src='js/jquery.velocity.min.js'></script>
<script type='text/javascript' src='js/jquery-twitterFetcher.js'></script>
<script type='text/javascript' src='js/respond.min.js'></script>
<script type='text/javascript' src='js/jquery-migrate-1.2.1.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>

</body>
</html>
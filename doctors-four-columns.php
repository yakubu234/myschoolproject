
<!DOCTYPE html> <html lang="en-US"><!--<![endif]-->

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

<?php Include "header.php" ;?>


<!--banner-->
<div class="banner clearfix"></div>
<div class="doctors-posts doctors-page clearfix">
    <div class="container">

        <!-- Filter -->
        <ul id="filters">
            <li><a href="#" data-filter="*">All Departments</a></li>
            <li><a href="#" data-filter=".cardiac-clinic">Cardiac Clinic</a></li>
            <li><a href="#" data-filter=".gynaecological-clinic">Gynaecological Clinic</a></li>
            <li><a href="#" data-filter=".pediatrics-clinic">Pediatrics Clinic</a></li>
            <li><a href="#" data-filter=".primary-health-care">Primary Health Care</a></li>
        </ul>

        <div class="blog-page-single clearfix">
            <article>
                <div class="full-width-contents">
                    <div class="entry-content text-center">
                        <h2>Meet Our Doctors</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <div class="container isotope-wrapper text-center">
        <div class="row">
            <div id="isotope-container" class="clearfix">

                <div class="isotope-item cardiac-clinic primary-health-care col-md-3 col-sm-6 ">
                    <article class="common-doctor clearfix hentry">
                        <!--doctor image-->
                        <figure>
                            <a href="doctor-alex.html" title="Dr.Addison Alexander">
                                <img src="images/temp-images/wa.png" alt="dr Addison" />
                            </a>
                        </figure>
                        <div class="text-content">
                            <!--doctor name-->
                            <h5 class="entry-title"><a href="doctor-alex.html">Dr.Addison Alexander</a></h5>
                            <div class="doctor-departments">
                                <a href="#">Cardiac Clinic</a>,
                                <a href="#">Primary Health Care dept</a>
                            </div>
                            <div class="for-border"></div>
                            <!--doctor detail-->
                            <p class="entry-summary">
                                This text represents a brief introduction of doctor and this text will be displayed on homepage and all the places where multiple doctors are listed.
                            </p>
                            <div class="social-icon clearfix">
                                <!--social icons-->
                                <ul class="doc-social-nav">
                                    <li class ="twitter-icon" ><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class ="facebook-icon" ><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class ="linkedin-icon" ><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class ="skype-icon" ><a target="_blank" href="skype:testusername?add"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="isotope-item gynaecological-clinic pediatrics-clinic col-md-3 col-sm-6 ">
                    <article class="common-doctor clearfix hentry">
                        <!--doctor image-->
                        <figure>
                            <a href="doctor-becka.html" title="Dr.Adaline Becka">
                                <img  src="images/temp-images/mrb.png" alt="doctor-1" />
                            </a>
                        </figure>
                        <div class="text-content">
                            <!--doctor name-->
                            <h5 class="entry-title"><a href="doctor-becka.html">Dr.Adaline Becka</a></h5>
                            <div class="doctor-departments">
                                <a href="#">Gynaecological Clinic</a>,
                                <a href="#">Pediatrics Clinic</a>
                            </div>
                            <div class="for-border"></div>
                            <!--doctor detail-->
                            <p class="entry-summary">
                                This text represents a brief introduction of doctor and this text will be displayed on homepage and all the places where multiple doctors are listed.
                            </p>
                            <div class="social-icon clearfix">
                                <!--social icons-->
                                <ul class="doc-social-nav">
                                    <li class ="twitter-icon" ><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class ="facebook-icon" ><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class ="linkedin-icon" ><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class ="skype-icon" ><a target="_blank" href="skype:testusername?add"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="isotope-item cardiac-clinic primary-health-care col-md-3 col-sm-6 ">
                    <article class="common-doctor clearfix hentry">
                        <!--doctor image-->
                        <figure>
                            <a href="doctor-bert.html" title="Dr.Andrew Bert">
                                <img  src="images/temp-images/mrc.png"  alt="doctor-4" />
                            </a>
                        </figure>
                        <div class="text-content">
                            <!--doctor name-->
                            <h5 class="entry-title"><a href="doctor-bert.html">Dr.Andrew Bert</a></h5>
                            <div class="doctor-departments"> <a href="#">Cardiac Clinic</a>,
                                <a href="#">Primary Health Care physician</a>
                            </div>
                            <div class="for-border"></div>
                            <!--doctor detail-->
                            <p class="entry-summary">
                                This text represents a brief introduction of doctor and this text will be displayed on homepage and all the places where multiple doctors are listed.
                            </p>
                            <div class="social-icon clearfix">
                                <!--social icons-->
                                <ul class="doc-social-nav">
                                    <li class ="twitter-icon" ><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class ="facebook-icon" ><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class ="linkedin-icon" ><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class ="skype-icon" ><a target="_blank" href="skype:testusername?add"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="isotope-item gynaecological-clinic pediatrics-clinic col-md-3 col-sm-6 ">
                    <article class="common-doctor clearfix hentry">
                        <!--doctor image-->
                        <figure>
                            <a href="doctor-taleebin.html" title="Dr.Orana Taleebin">
                                <img src="images/temp-images/missc.jpg" alt="doctor-3" />
                            </a>
                        </figure>
                        <div class="text-content">
                            <!--doctor name-->
                            <h5 class="entry-title"><a href="doctor-taleebin.html">Dr.Orana Taleebin</a></h5>
                            <div class="doctor-departments"> <a href="#">Gynaecological Clinic</a>,
                                <a href="#">Pediatrics Clinic</a>
                            </div>
                            <div class="for-border"></div>
                            <!--doctor detail-->
                            <p class="entry-summary">
                                This text represents a brief introduction of doctor and this text will be displayed on homepage and all the places where multiple doctors are listed.
                            </p>
                            <div class="social-icon clearfix">
                                <!--social icons-->
                                <ul class="doc-social-nav">
                                    <li class ="twitter-icon" ><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class ="facebook-icon" ><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class ="linkedin-icon" ><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class ="skype-icon" ><a target="_blank" href="skype:testusername?add"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>




<!--page footer-->
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
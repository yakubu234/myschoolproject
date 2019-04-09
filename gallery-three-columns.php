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

<!--banner-->
<div class="banner clearfix"></div>
<div class="gallery-page clearfix">
    <div class="container">
        <div class="blog-page-single clearfix">
            <article class="page hentry clearfix">
                <div class="full-width-contents">
                    <div class="entry-content">
                    </div>
                </div>
            </article>
        </div>
        <!--fliter-->
        <ul id="filters">
            <li class="active"><a href="#" data-filter="*">All</a></li>
            <li><a href="#" data-filter=".advanced-technology">Advanced Technology</a></li>
            <li><a href="#" data-filter=".free-facilities">Free Facilities</a></li>
            <li><a href="#" data-filter=".health-counseling">Health Counseling</a></li>
            <li><a href="#" data-filter=".kids-care">Kids Care</a></li>
            <li><a href="#" data-filter=".patient-care">Patient Care</a></li>
            <li><a href="#" data-filter=".pharmaceutical-care">Pharmaceutical Care</a></li>
            <li><a href="#" data-filter=".professional-staff">Professional Staff</a></li>
        </ul>
    </div>

    <div class="container isotope-wrapper text-center">
        <div class="row">
            <div id="isotope-container" class="clearfix">
                <!--column start-->
                <div class="isotope-item advanced-technology free-facilities col-md-4 col-sm-6 ">
                    <article class="common clearfix hentry ">
                        <figure class="overlay-effect">
                            <a href="images/temp-images/gallery-11.jpg" title="Medical Record Keeping">
                                <img src= "images/temp-images/medical record.jpg"  alt="medical record keeping" />
                            </a>
                            <a class="overlay" href="images/temp-images/medical record.jpg"></a>
                        </figure>
                        <div class="content clearfix">
                            <h4><a href="gallery-single-record.html">Medical Record Keeping</a></h4>

                            <div class="gallery-item-types">
                                <a href="#">Advanced Technology</a>,
                                <a href="#">Free Facilities</a>
                            </div>
                        </div>
                    </article>
                </div>
                <!--column end-->

                <!--column start-->
                <div class="isotope-item free-facilities patient-care col-md-4 col-sm-6 ">
                    <article class="common clearfix hentry ">
                        <figure class="overlay-effect">
                            <a href="images/temp-images/gallery-41.jpg" title="Blood Pressure Checkup">
                                <img src="images/temp-images/bp.jpg"  alt="blood pressure test" />
                            </a>
                            <a class="overlay" href="images/temp-images/bp.jpg"></a>
                        </figure>
                        <div class="content clearfix">
                            <h4><a href="gallery-single-checkup.html">Blood Pressure Checkup</a></h4>

                            <div class="gallery-item-types">
                                <a href="#">Free Facilities</a>,
                                <a href="#">Patient Care</a>
                            </div>
                        </div>
                    </article>
                </div>
                <!--column end-->

                <!--column start-->
                <div class="isotope-item health-counseling kids-care professional-staff col-md-4 col-sm-6 ">
                    <article class="common clearfix hentry ">
                        <figure class="overlay-effect">
                            <a href="images/temp-images/gallery-31.jpg" title="Kids Treatment">
                                <img src="images/temp-images/kids.jpg" alt="kids treatment" />
                            </a>
                            <a class="overlay" href="images/temp-images/kids.jpg"></a>
                        </figure>
                        <div class="content clearfix">
                            <h4><a href="gallery-single-treatment.html">Kids Treatment</a></h4>

                            <div class="gallery-item-types">
                                <a href="#">Health Counseling</a>,
                                <a href="#">Kids Care</a>,
                                <a href="#">Professional Staff</a>
                            </div>
                        </div>
                    </article>
                </div>
                <!--column end-->

                <!--column start-->
                <div class="isotope-item health-counseling patient-care col-md-4 col-sm-6 ">
                    <article class="common clearfix hentry ">
                        <figure class="overlay-effect">
                            <a href="images/temp-images/gallery-5.jpg" title="Health Counseling">
                                <img  src="images/temp-images/counsel.jpg"  alt="medical Counseling" />
                            </a>
                            <a class="overlay" href="images/temp-images/counsel.jpg"></a>
                        </figure>
                        <div class="content clearfix">
                            <h4><a href="gallery-single-counseling.html">Health Counseling</a></h4>

                            <div class="gallery-item-types">
                                <a href="#">Health Counseling</a>,
                                <a href="#">Patient Care</a>
                            </div>
                        </div>
                    </article>
                </div>
                <!--column end-->

                <!--column start-->
                <div class="isotope-item advanced-technology pharmaceutical-care col-md-4 col-sm-6 ">
                    <article class="common clearfix hentry ">
                        <figure class="overlay-effect">
                            <a href="images/temp-images/gallery-6.jpg" title="Advanced Lab">
                                <img  src="images/temp-images/lab.jpg"  alt="Advance kab" />
                            </a>
                            <a class="overlay" href="images/temp-images/lab.jpg"></a>
                        </figure>
                        <div class="content clearfix">
                            <h4><a href="gallery-single-lab.html">Advanced Lab</a></h4>

                            <div class="gallery-item-types">
                                <a href="#">Advanced Technology</a>,
                                <a href="#">Pharmaceutical Care</a>
                            </div>
                        </div>
                    </article>
                </div>
                <!--column end-->

                <!--column start-->
                <div class="isotope-item patient-care professional-staff col-md-4 col-sm-6 ">
                    <article class="common clearfix hentry ">
                        <figure class="overlay-effect">
                            <a href="images/temp-images/gallery-7.jpg" title="Well Trained Staff">
                                <img src="images/temp-images/workers.jpg" alt="Well trained  staff" />
                            </a>
                            <a class="overlay" href="images/temp-images/workers.jpg"></a>
                        </figure>
                        <div class="content clearfix">
                            <h4><a href="gallery-single-staff.html">Well Trained Staff</a></h4>

                            <div class="gallery-item-types">
                                <a href="#">Patient Care</a>,
                                <a href="#">Professional Staff</a>
                            </div>
                        </div>
                    </article>
                </div>
                <!--column end-->
            </div>
        </div>
    </div>
</div>


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
<script type='text/javascript' src='js/jquery.jplayer.min.js'></script>
<script type='text/javascript' src='js/jquery.autosize.min.js'></script>
<script type='text/javascript' src='js/jquery.meanmenu.min.js'></script>
<script type='text/javascript' src='js/jquery.velocity.min.js'></script>
<script type='text/javascript' src='js/jquery-twitterFetcher.js'></script>
<script type='text/javascript' src='js/respond.min.js'></script>
<script type='text/javascript' src='js/jquery-migrate-1.2.1.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>

</body>
</html>
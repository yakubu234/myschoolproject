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
<?php Include  "header.php"; ?>
<!--banner-->
<div class="banner clearfix"></div>
<div class="contact-page clearfix">
    <div class="container">

        <!--contact form section-->
        <div class="blog-page-single clearfix">
            <article class="page type-page hentry  clearfix">
                <div class="full-width-contents">
                    <div class="entry-content">
                        <h2>Get in Touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,<br />
                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
                    </div>
                </div>
            </article>
        </div>

        <div class="clearfix"></div>
        <!--contact form-->
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-6 ">
                <form  action="contact_form_handler.php" method="POST">
                    <input type="text" name="name" id="name" class="required" placeholder="Full Name" title="* Please provide your name">
                    <input type="text" name="email" id="email" class="required email" placeholder="Email Address" title="* Please provide a valid email address">
                    <input type="text" name="number" id="number" placeholder="Phone Number">
                    <input type="hidden" name="action" value="send_message">
                    <input type="hidden" name="nonce" value="">
                    <textarea name="message" id="message" class="required" cols="30" rows="5"  placeholder="Message" title="* Please provide your message"></textarea>
                    <input id="contact-form-submit" class="form-submit-btn" type="submit" name="contact" value="SUBMIT">
                </form>
            </div>

            <!--contact detail-->
            <div class="col-lg-6 col-md-6 col-sm-6  col-lg-offset-1 col-md-offset-1">
                <div class="contact-sidebar clearfix">
                    <article class="address-area clearfix">
                        <h2><span>Medical Press</span></h2>
                        <div class="row">
                            <div class="col-md-6">
                                <address>121 King Street, Melbourne
                                    Victoria 3000 Australia</address>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <strong>Phone :</strong>+1-800-123-4567
                                </p>
                                <p>
                                    <strong>Fax :</strong>+1-123-456-7890
                                </p>
                            </div>
                        </div>
                    </article>
                    <!--social icons-->
                    <article class="social-icon clearfix">
                        <h5><span>Social :</span></h5>
                        <ul class="clearfix">
                            <li class="twitter-icon"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="facebook-icon"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="google-icon"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin-icon"><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="instagram-icon"><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="youtube-icon"><a target="_blank" href="#"><i class="fa fa-youtube"></i></a></li>
                            <li class="skype-icon"><a target="_blank" href="skype:skypeusername?add"><i class="fa fa-skype"></i></a></li>
                            <li class="rss-icon"><a target="_blank" href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>

    </div>
    <!--google map -->
    

</div>



<?php Include "footer.php"; ?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<!--google map API-->
<script>
    function initializeContactMap() {
        var officeLocation = new google.maps.LatLng(-37.817314, 144.955431);
        var contactMapOptions = {
            zoom:  14,
            center: officeLocation,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        }
        var contactMap = new google.maps.Map(document.getElementById('map-canvas'), contactMapOptions);

        var contactMarker = new google.maps.Marker({
            position: officeLocation,
            map: contactMap
        });

    }
    window.onload = initializeContactMap();

</script>
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
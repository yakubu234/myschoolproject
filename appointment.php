<?php
Include "db.php";
/* database connection */
if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $from_email = $_POST['email'];
   $number =  $_POST['number'];
   $date = $_POST['date'];
   $message = $_POST['message'];
   /* insert int database */
   $ins = "INSERT INTO appointment VALUES (null,'$name',' $from_email','$number',' $date','$message',null)";
   $con = $conn->query($ins);
   if ($con) {
    echo "<script>
    alert('Appointment recieved')
    </script>";
}
/* done inserting into database */
}
?>
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



<div class="banner clearfix"></div>
<div class="appoint-page clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <article class="page type-page status-publish hentry clearfix">
                    <div class="entry-content text-center">
                        <h2 >Make an Appointment</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                    </div>
                </article>

                <!--appointment form-->
                <div class="appoint-section clearfix">
                    <div class="top-icon"><img src="images/appoint-form-top.png" alt=""/></div>
                    <form action="appointment_form_handler.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" id="app-name" class="required" placeholder="Name" title="* Please provide your name" required=""  />
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="number" id="app-number" class="required" placeholder="Phone Number" title="* Please provide your phone number." required="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="email" name="email" id="app-email" class="required email" placeholder="Email Address" title="* Please provide a valid email address" required="" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="date" id="datepicker" class="required" placeholder="Appointment Date"  title="* Please provide appointment date"  required="" / >
                            </div>
                        </div>

                        <textarea name="message" id="app-message" class="required" cols="50" rows="1" placeholder="Message" title="* Please provide your message"  required="" ></textarea>

                        <input type="submit" name="submit" value="register" >
                    </form>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>

    </div>
</div>

<!--page footer-->
<?php Include "footer.php"; ?>

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
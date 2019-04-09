      <?php 
      include 'db.php';
      if (! $_SESSION['logedin']) {
        echo "<script>
        alert('login first')
        </script>";
        ?>
        <meta http-equiv="refresh" content="1;url=index.php" >
        <?php
    }else{
        session_start();
        $starttime = microtime();
        $startarray = explode("", $starttime);
        $starttime = $startarray[1] + $startarray[0];
        $totaltime = time() - $starttime;
            if ($totaltime  >= 12) {
                echo "<script>
                alert('yes timeup')
                </script>";
            }
            
       
        echo  $email = $_SESSION['email'];
        echo $patnum = $_SESSION['patnum'];

    }
    ?>
    <!DOCTYPE html>
    <html lang="en-US"><!--<![endif]-->
    <head>
        <!-- META TAGS -->
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1000;url=logout.php" >
        <!-- Title -->
        <title>Medicalpress | Just another Website</title>
        <style type="text/css">
        .bolder{
            background-color: #696969;
            margin-top: -20px;
            width: 100%;
            padding: 10px;
            border: 1px;
            /* height: 2%;*/

        }
    </style>
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
<style type="text/css">
a:hover{
  cursor: pointer;
  background-color: hsla(0,0,1,2);
}
.same{
    box-sizing: border-box;
    border: 1px solid;
    background-color: hsla(23,12,93,0);
    width: 85%;
    opacity: 0.6;
    border-radius: 50%;
    padding: 1%;
    margin: 0px auto;
}
</style>
<body>
    <?php Include "head.php"; ?>
    <!--banner-->
    <div  class="bolder" >
        <!--h3>signup</h3-->
    </div>
    <!--banner-->
    <div class="blog-page default-page service-page clearfix">
        <div class="container">
            <div class="row">

                <!--sidebar-->
                <div class="col-lg-3 col-md-4">
                    <aside class="sidebar clearfix">
                        <section id="search-3" class="widget widget_search">
                            <!--search bar-->
                            <!--h3 class="title">Search</h3-->
                            <form role="search" method="POST" id="searchform" class="searchform" action="#">
                                <div>
                                    <label class="screen-reader-text">Search for:patient</label>
                                    <b  style="font-weight: bold;color: black;" >&nbsp; SEARCH PATIENT</b>
                                    <input type="text" id="search" name="look" placeholder="Email or First Name or Last Name" value="" name="s" />
                                    <div id="display"></div >
                                    <p>&nbsp;</p>
                                    <input type="submit" name="find" value="Search" />
                                </div>
                            </form>
                        </section>
                        <!--categories-->
                        <section id="categories-4" class="widget widget_categories">
                            <h3 class="title">Categories</h3>
                            <ul>
                                <li><a href="#" title="View all posts filed under Environment">Environment</a></li>
                                <li><a href="#" title="View all posts filed under Health Basics">Health Basics</a></li>
                                <li><a href="#" title="View all posts filed under Lifestyle">Lifestyle</a></li>
                                <li><a href="#" title="View all posts filed under Motivation">Motivation</a></li>
                            </ul>
                        </section>
                        <!--departments-->
                    </aside>
                </div>
                <!-- end side bar -->
                <!-- start main tab -->
                <!-- start php -->
                <?php 
                include 'db.php';
                if (isset($_POST['find'])) {
                  $find = $_POST['look'];
                  $sel = "SELECT * FROM signup WHERE patnum = '$find'";
                  $suc = $conn->query($sel);
                  if ($suc->num_rows > 0) {
                      while ($res  = $suc-> fetch_assoc()) {
                          $name = $res['first_name'];
                          $address = $res['address'];
                          $last = $res['last_name'];
                          $phone = $res['phone'];
                          $email = $res['email'];
                          $dob = $res['dob'];
                          $pnum = $res['patnum'];
                      }
                      ?>
                      <div class="col-lg-9 col-md-8">
                        <div  class="same" >
                            <p style="text-align: center; font-size: 16pt;color: black;" >Enter report for <b style="color: red;" ><?php $col = $name." ".$last; echo $col; ?></b> </p>
                        </div>
                        <div>&nbsp;</div>
                        <form method="POST" action="record.php" >
                            <div class="col-md-6" >
                                <label>First Name</label>
                                <input type="text" name="first"  value="<?php  echo $name; ?>" placeholder="" required="" readonly="" >

                                <label>Email</label>
                                <input type="text" name="email"  value="<?php echo $email ?>"  placeholder="" required="" readonly="" >

                                <label>Phone</label>
                                <input type="text" name="phone" value="<?php echo $phone;  ?>"  placeholder="" required="" readonly="" >
                            </div>
                            <div class="col-md-6" >
                                <label>Last Name</label>
                                <input type="text" name="lname" value="<?php echo $last; ?>" placeholder=""  required="" readonly="" >

                                <label>D.o.b</label>
                                <input type="text" name="dob"  value="<?php echo $dob; ?>"  placeholder="" required="" readonly="" >

                                <label>Address</label>
                                <input type="text" name="address" value="<?php echo $address; ?>"  placeholder="" required="" readonly="" >
                            </div>
                            <div class="col-md-12" >
                                <label>Enter Information</label>
                                <textarea  name="mess"  required="" ></textarea>
                            </div>
                            <input type="text" style="display: none;" value="<?php echo $pnum; ?>" name="pnum">
                            <input type="text" style="display: none;" value="<?php echo $pnum; ?>" name="doctor_name">
                            <input type="text" style="display: none;" value="<?php echo $pnum; ?>" name="doctor_id">
                            <input type="submit" name="submit" value="Submit"  style="float: right;margin-right: 2%;" >
                        </form>
                    </div>
                    <?php
                }else{
                    echo "non sense";
                }
            }
            ?>
            <!-- end php -->
            <!-- end main tab -->
        </div>
    </div>
</div>



<!--page footer-->
<footer id="main-footer" class="site-footer clearfix">
    <div class="container">
        <div class="row">
            <!--about widget-->
            <div class="col-md-3 col-sm-6">
                <section  class="widget animated fadeInLeft">
                    <h3 class="title">About MedicalPress</h3>
                    <div class="textwidget">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    </div>
                </section>
            </div>
            <!--general services-->
            <div class="col-md-3 col-sm-6  ">
                <section class="widget animated fadeInLeft ae-animation-fadeInLeft">
                    <h3 class="title">General Services</h3>
                    <ul>
                        <li>
                            <a href="#">Immunization</a>
                        </li>
                        <li>
                            <a href="#">Medical Services</a>
                        </li>
                        <li>
                            <a href="#">Surgical</a>
                        </li>
                        <li>
                            <a href="#">Diagnostic Services</a>
                        </li>
                        <li>
                            <a href="#">Pharmacy</a>
                        </li>
                    </ul>
                </section>
            </div>

            <div class="clearfix visible-sm"></div>

            <!--recent posts-->
            <div class="col-md-3 col-sm-6  ">
                <section  class="widget animated fadeInLeft">
                    <h3 class="title">Latest Tweets</h3>                     <ul id="twitter_update_list">                         <li>No Tweet Loaded !</li>                     </ul>
                </section>
            </div>
            <!--subscription form-->
            <div class="col-md-3 col-sm-6  ">
                <section  class="widget animated fadeInLeft">
                    <h3 class="title">Subscribe!</h3>
                    <div class="textwidget">Subscribe to my blog for updates</div>
                    <div>

                        <form name="subs-form" id="subs_form" class="subs-form" method="post" action="subscription-handler.php">


                            <label for="subs-name">Name:</label>
                            <input name="name" id="subs-name" class="required" type="text" title="* Please provide your name" /><br/>

                            <label for="subs-email">Email:</label>
                            <input name="email" class="required email" id="subs-email" type="text" title="* Please provide a valid email address" /><br/>

                            <input type="hidden" name="action" value="send_message">
                            <input type="hidden" name="nonce" value="">

                            <input id="subs-form-submit" name="Submit" type="submit" value="SUBMIT" />
                            <img src="images/loader3.gif" id="subs-loader" alt="Loading...">
                            <div id="subs-error-container"></div>
                            <div id="subs-response-container"></div>

                        </form>

                    </div>

                </section>
            </div>
        </div>
        <div class="footer-bottom animated fadeInDown clearfix">
            <div class="row">
                <div class="col-sm-7">
                    <p>&copy; Copyright 2016. All Rights Reserved by Medical Press</p>
                </div>
                <!--footer social icons-->
                <div class="col-sm-5 clearfix">
                    <ul class="footer-social-nav">
                        <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a target="_blank" href="skype:skypeusername?add"><i class="fa fa-skype"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#top" id="scroll-top"></a>

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
<script type="text/javascript" src="script.js"></script>

</body>
</html>
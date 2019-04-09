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

        $email = $_SESSION['email'];
        $patnum = $_SESSION['patnum'];

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
            /* reciept section*/
            .rec{
              margin: 0px auto;
              border:2px solid black;
              padding: 10px 12px;
              width: 95%;
              height: auto;
          }
          .layout{
            width: 98%;
            border: 1px solid #000;
            margin: 0px auto;
            text-align: center;
            height: auto;
        }
        .text-center{
            text-align: center;
            color: black;
            font-weight: 400px;
            font-family: verdana arial-black;
            font-size: 30px;
        }
        .box p{
            color: black;
            font-family: times-new-roman;
            font-size: 19px;
            font-weight: 1em;

        }
        .scope{
            color: black;
            font-family: times-new-roman;
            font-size: 19px;
            font-weight: 1em;
            margin-left: 100px;
        }
        .box{
            width: 98%;
            margin: 0px auto;
            border: 1px solid #000;
            padding: 5px;
            height: auto;
        }
        .rule{
            border: 1px solid black;
        }
        .norm{
            margin-left: 15px;
        }
        .box2{

            border: 1px solid;
        }
        .box3{

            border: 1px solid;

        }
        .brk{
            word-wrap:break-word;
            color: red;
        }
        @media print {
            #printPageButton {
                display: none;
            }
        }
        /*end reciept section*/
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
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="all">
    <!-- Flexslider stylesheet -->
    <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="all">
    <!-- Animations stylesheet -->
    <link rel="stylesheet" href="../css/animations.css" type="text/css" media="all">
    <!-- Awesome Font stylesheet -->
    <link rel="stylesheet" href="../css/font-awesome.css" type="text/css" media="all">
    <!-- Datepciker stylesheet -->
    <link rel="stylesheet" href="../css/datepicker.css" type="text/css" media="all">
    <!-- Swipebox stylesheet -->
    <link rel="stylesheet" href="../css/swipebox.css" type="text/css" media="all">
    <!-- meanmenu stylesheet -->
    <link rel="stylesheet" href="../css/meanmenu.css" type="text/css" media="all">
    <!-- Include the site main stylesheet -->
    <link rel="stylesheet" href="../css/main.css" type="text/css" media="all">
    <!-- Include the site ressponsive  stylesheet -->
    <link rel="stylesheet" href="../css/custom-responsive.css" type="text/css" media="all">


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

                            <!--h3 class="title">Search</h3-->
                            <form role="search" method="POST"  class="searchform" action="encrypt.php">
                                <div>
                                    <label class="screen-reader-text">Check medical history</label>
                                    <b  style="font-weight: bold;color: black;" >&nbsp; Check Medical History</b>
                                    <p>&nbsp;</p>
                                    <select name="rec" class="form-control">
                                        <option>Select record number</option>
                                        <?php
                                        include 'db.php';
                                        $sel = "SELECT reciept_num FROM records Where patient_num = '$patnum'";
                                        $query = $conn->query($sel);
                                        if ($query->num_rows > 0) {
                                            while ($row = $query-> fetch_assoc()) {

                                                echo "<option value='". $row['reciept_num'] ."'>" .$row['reciept_num'] ."</option>" ;
                                            }
                                        }else{
                                          echo "<option>You have no record at all !</option>";
                                      }
                                      ?>
                                  </select>

                                  <p>&nbsp;</p>
                                  <input type="submit" name="query" value="Search" />
                              </div>
                          </form>
                      </section>
                      <!--categories-->
                      <section id="categories-4" class="widget widget_categories">
                        <h3 class="title">Categories</h3>
                        <ul>
                            <li><a href="delete.php">Delete Your Account</a></li>
                            <li><a href="history.php" title="View all posts filed under Health Basics">View Medical Records</a></li>
                            <li><a href="#" >Lifestyle</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </section>

                </aside>
            </div>
            <!-- end side bar -->
            <!-- start main tab -->
            <!-- start php -->
            
            <div class="col-lg-9">
                <?php
                    
                    session_start();
                    ob_start();

                    $key = $_SESSION['key'];
                    $encrypted = $_SESSION['encrypted'];
                $iv = mcrypt_create_iv(
    mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
    MCRYPT_DEV_URANDOM
);

                echo "<b> Due to Security Reasons this Medical Record has benn encrypted </b>";
                
                echo '<form method="POST" action="#">
                <input type="text" name="dec" placeholder="Enter Key To decrypt" class="form-control" >
                <button type="submit" name="correct" class="btn btn-primary" >  Decrypt</button>
                </form> ';
                echo "<b class='brk' >". $encrypted."</b>";
                if (isset($_POST['correct'])) {
                    $key1 = $_POST['dec'];
                    if ($key1 == $key) {
    # code...           
                        $data = base64_decode($encrypted);
                        $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));

                        $decrypted = rtrim(
                            mcrypt_decrypt(
                                MCRYPT_RIJNDAEL_128,
                                hash('sha256', $key, true),
                                substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
                                MCRYPT_MODE_CBC,
                                $iv
                            ),
                            "\0"
                        );
                        echo "<script>
                        alert('Record decrypted ! click okay to view')
                        </script>";
                        $_SESSION['decrypted'] = $decrypted;
                        ?>
                        <meta http-equiv="refresh" content="0;url=decrypt.php" >
                        <?php
                        session_unset();
                        session_destroy();
                        // echo $decrypted ;
#https://stackoverflow.com/questions/1289061/best-way-to-use-php-to-encrypt-and-decrypt-passwords
# the above is the link to where i get the encryption algorithim.
                    }else{
                        echo "<script>
                        alert('the key you entered is invalid')
                        </script>";
                    }
                }

                ?>
                <!-- starts here for displaying -->
            </div>

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

<script type='text/javascript' id='../quick-js'></script>
<script type='text/javascript' src='../js/jquery-2.2.3.min.js'></script>
<script type='text/javascript' src='../js/bootstrap.min.js'></script>
<script type='text/javascript' src='../js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='../js/jquery.swipebox.min.js'></script>
<script type='text/javascript' src='../js/jquery.isotope.min.js'></script>
<script type='text/javascript' src='../js/jquery.appear.js'></script>
<script type='text/javascript' src='../js/jquery.ui.core.min.js'></script>
<script type='text/javascript' src='../js/jquery.ui.datepicker.min.js'></script>
<script type='text/javascript' src='../js/jquery.validate.min.js'></script>
<script type='text/javascript' src='../js/jquery.form.js'></script>
<script type='text/javascript' src='../js/jquery.autosize.min.js'></script>
<script type='text/javascript' src='../js/jquery.meanmenu.min.js'></script>
<script type='text/javascript' src='../js/jquery.velocity.min.js'></script>
<script type='text/javascript' src='../js/jquery-twitterFetcher.js'></script>
<script type='text/javascript' src='../js/respond.min.js'></script>
<script type='text/javascript' src='../js/jquery-migrate-1.2.1.min.js'></script>
<script type='text/javascript' src='../js/custom.js'></script>
<script type="text/javascript" src="../script.js"></script>

</body>
</html>
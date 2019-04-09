 <?php
 Include "db.php";
         // define variables and set to empty values
 $fname = $lname = $email = $gender = $phone = $address = $password = $dob = $state = $home = $userex = "";
 $fnameerr = $lnameerr = $emailerr = $gendererr = $phoneerr = $addresserr = $passworderr = $doberr = $stateerr = $homeerr = ""; 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $select = "SELECT id from signup";
    $cont = $conn->query($select);
    while ($sol = $cont->fetch_assoc()) {
     $id = $sol[id];
     $pnum = $id + 20 ;
     $pnum = "doc_".$pnum;
 }  $pnum ;
 if (empty ($_POST['first_name'])) {
     $fnameerr = "first name required";
 }else{
    $fname = test_input($_POST["first_name"]);
}
if (empty ($_POST["last_name"])) {
    $lnameerr = "last name required";
}else{
    $lname = test_input($_POST["last_name"]);
}
if (empty( $_POST["email"])) {
    $emailerr = "email required";
}else{
    $email = test_input($_POST["email"]);
}
if (empty($_POST["gender"])) {
   $gendererr = "gender required";
}else{
    $gender = test_input($_POST["gender"]);
}
if (empty($_POST["phone"])) {
 $phoneerr = "phone number required";
}else{
 $phone = test_input($_POST["phone"]);
}
if (empty($_POST["address"])) {
    $addresserr = "address required";
}else{
    $address = test_input($_POST["address"]);
}
if (empty($_POST["password"])) {
    $passworderr = " password required";
}else{
    $password = test_input($_POST["password"]);
}
if (empty($_POST["dob"])) {
    $doberr = "date of birth required";
}else{
 $dob = test_input($_POST["dob"]);
}
if (empty($_POST["state"])) {
  $stateerr = "state required";
}else{
 $state = test_input($_POST["state"]);
}
if (empty($_POST["home"])) {
   $homeerr = "your home town required";
}else{
    $home = test_input($_POST["home"]);
}

$sel = "SELECT email FROM signup where email = '$email'";
$query = $conn->query($sel);
while ( $res = $query-> fetch_assoc()) {
    $mail = $res[email];
    echo $id = $res[id];
}
if ($mail === $email) {
 echo "<script>
 alert('email already exist');
 </script>";

}else{
   $hashed_password = password_hash($password, PASSWORD_BCRYPT);

   $ins = "INSERT INTO signup VALUES (null,'$fname','$lname','$email','$pnum','$phone','$address','$hashed_password','$dob','$state','$home','doctor',null )";
   $insert = $conn->query($ins);
}
if ($insert) {

    echo "<script>
    alert('successfully signed up please login');
    </script>";
    ?>
    <meta http-equiv="refresh" content="0;url=index.php">
    <?php
}else{
    echo $conn->error."unable to signup";
}
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
echo $conn->error;
?>
<!DOCTYPE html>
<html lang="en-US"><!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">

    <!-- Title -->
    <title>Medicalpress | Just another Website</title>

    <!-- Define a view port to mobile devices to use - telling the browser to assume that
    the page is as wide as the device (width=device-width)
    and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>

    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon-new.png">

    <!-- Google Web Font -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,800,900,300,200" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- bootstrap Style Sheet (caution ! - Do not edit this stylesheet) -->
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

    <link rel="stylesheet" href="../css/woocommerce.css" type="text/css" media="all">
    <!-- Include the site main stylesheet -->
    <link rel="stylesheet" href="../css/main.css" type="text/css" media="all">
    <!-- Include the site responsive  stylesheet -->
    <link rel="stylesheet" href="../css/custom-responsive.css" type="text/css" media="all">


    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->
<style type="text/css">
.bolder{
    background-color: grey;
    width: 100%;
    padding: 5px;
    border: 1px;
    /* height: 2%;*/

}
.bolder h3 {
    text-align: center;
    color: white;
    font-family: verdana;
    text-transform: uppercase;
    font-weight: 400px;
}
.error{
    color: #ff0000;
}
/*for user type in login section of signup */
.form-row-user{
    width: 40%;
    float: left;
}
.form-row-user2{
    width: 18%;
    float: right;
}
/*for user type in login section of signup ended */
</style>

</head>
<body class="woocommerce woocommerce-page">

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="<php echo 'http://www.google.com/chromeframe/?redirect=true'; ?>">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<?php Include "header.php"; ?>


<!--banner-->
<div  class="bolder" >
    <h3>Register Medical Practitioners </h3>
    <a href="index.php" style="color: red;">Return Home</a>
</div>
<!--banner-->
<div class="shop-page clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="blog-page-single clearfix">
                    <article id="post-237" class=" clearfix post-237 page type-page status-publish hentry">
                        <div class="full-width-contents">
                            <div class="entry-content">
                                <div class="woocommerce">                                  
                                        <form name="checkout" method="POST" class="checkout woocommerce-checkout" action="<?php 
                                        echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">

                                        <div class="move">

                                            <div class="col2-set" id="customer_details">
                                                <div class="col-1">
                                                    <div class="woocommerce-billing-fields">

                                                        <h3>Billing Details for Medical Practitioners</h3>




                                                        <p class="form-row form-row form-row-first validate-required" id="billing_first_name_field"><label for="billing_first_name" class="">First Name <abbr class="required" title="required">*</abbr> <span class = "error"> <?php echo $fnameerr;?></span></label><input type="text" class="input-text " name="first_name" id="billing_first_name" placeholder="" value="" title="enter your first name">
                                                        </p>

                                                        <p class="form-row form-row form-row-last validate-required" id="billing_last_name_field"><label for="billing_last_name" class="">Last Name <abbr class="required" title="required">*</abbr><span class = "error"> <?php echo $lnameerr;?></span></label><input type="text" class="input-text " name="last_name" id="billing_last_name" placeholder="" value="">
                                                        </p><div class="clear"></div>
                                                        <p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field"><label for="billing_email" class="">Email Address <abbr class="required" title="required">*</abbr><span class = "error"> <?php echo $emailerr;?></span></label><input type="email" class="input-text " name="email" id="billing_email" placeholder="" value=""></p>
                                                        <p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field"><label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr><span class = "error"> <?php echo $phoneerr;?></span></label><input type="tel" class="input-text " name="phone" id="billing_phone" placeholder="" value=""></p><div class="clear"></div>
                                                        <p class="form-row form-row form-row-last address-field validate-required" id="billing_address_1_field"><label for="billing_address_1" class="">Address <abbr class="required" title="required">*</abbr><span class = "error"> <?php echo $addresserr;?></span></label><input type="text" class="input-text " name="address" id="billing_address_1" placeholder="Street address" value=""></p>
                                                        <p class="form-row form-row form-row-first address-field validate-required validate-state" id="billing_state_field"><label for="billing_state" class="">Gender <abbr class="required" title="required">*</abbr><span class = "error"> <?php echo $gendererr;?></span></label><select name="gender" id="billing_state" class="state_select "  data-placeholder="">
                                                            <option value="">Select your gender&hellip;</option><option value="male" >male</option><option value="female" >female</option></select></p>
                                                            <div class="clear"></div>
                                                            <p class="form-row form-row form-row-first validate-required" id="account_password_field">
                                                                <label for="account_password" class="">Account password <abbr class="required" title="required">*</abbr><span class = "error"> <?php echo $passworderr;?></span></label>
                                                                <input type="password" class="input-text " name="password" id="account_password" placeholder="Password" value="" required="" ></p>
                                                                <p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field"><label for="billing_phone" class="">D. O. B <abbr class="required" title="required">*</abbr><span class = "error"> <?php echo $doberr;?></span></label><input type="text" class="input-text " name="dob" id="datepicker" class="required" placeholder=""  title="* Please provide appointment date" required=""></p>
                                                                <div class="clear"></div>
                                                                <p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field"><label for="billing_phone" class="">Town / City <abbr class="required" title="required">*</abbr><span class = "error"> <?php echo $homeerr;?></span></label><input type="text" class="input-text " name="home" id="billing_phone" placeholder="" value="" required ></p>

                                                                <p class="form-row form-row form-row-first address-field validate-required validate-state" id="billing_state_field"><label for="billing_state" class="">State <abbr class="required" title="required">*</abbr><span class = "error"> <?php echo $stateerr;?></span></label><select name="state" id="billing_state" class="state_select "  data-placeholder="" required="" />
                                                                    <option value="">Select a state&hellip;</option><option value="AL" >Alabama</option><option value="AK" >Alaska</option><option value="AZ" >Arizona</option><option value="AR" >Arkansas</option><option value="CA" >California</option><option value="CO" >Colorado</option><option value="CT" >Connecticut</option><option value="DE" >Delaware</option><option value="DC" >District Of Columbia</option><option value="FL" >Florida</option><option value="GA" >Georgia</option><option value="HI" >Hawaii</option><option value="ID" >Idaho</option><option value="IL" >Illinois</option><option value="IN" >Indiana</option><option value="IA" >Iowa</option><option value="KS" >Kansas</option><option value="KY" >Kentucky</option><option value="LA" >Louisiana</option><option value="ME" >Maine</option><option value="MD" >Maryland</option><option value="MA" >Massachusetts</option><option value="MI" >Michigan</option><option value="MN" >Minnesota</option><option value="MS" >Mississippi</option><option value="MO" >Missouri</option><option value="MT" >Montana</option><option value="NE" >Nebraska</option><option value="NV" >Nevada</option><option value="NH" >New Hampshire</option><option value="NJ" >New Jersey</option><option value="NM" >New Mexico</option><option value="NY" >New York</option><option value="NC" >North Carolina</option><option value="ND" >North Dakota</option><option value="OH" >Ohio</option><option value="OK" >Oklahoma</option><option value="OR" >Oregon</option><option value="PA" >Pennsylvania</option><option value="RI" >Rhode Island</option><option value="SC" >South Carolina</option><option value="SD" >South Dakota</option><option value="TN" >Tennessee</option><option value="TX" >Texas</option><option value="UT" >Utah</option><option value="VT" >Vermont</option><option value="VA" >Virginia</option><option value="WA" >Washington</option><option value="WV" >West Virginia</option><option value="WI" >Wisconsin</option><option value="WY" >Wyoming</option><option value="AA" >Armed Forces (AA)</option><option value="AE" >Armed Forces (AE)</option><option value="AP" >Armed Forces (AP)</option><option value="AS" >American Samoa</option><option value="GU" >Guam</option><option value="MP" >Northern Mariana Islands</option><option value="PR" >Puerto Rico</option><option value="UM" >US Minor Outlying Islands</option><option value="VI" >US Virgin Islands</option></select> </p>
                                                                    <div class="clear"></div>
                                                                    <div class="woocommerce-shipping-fields">
                                                                        <h3>Additional Information</h3>

                                                                        <p class="form-row form-row notes" id="order_comments_field"><label for="order_comments" class="">Order Notes</label><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="order_review" class="woocommerce-checkout-review-order">
                                                            <div id="payment" class="woocommerce-checkout-payment">
                                                                <div class="form-row place-order">
                                                                    <input type="submit" class="button alt" name="register" id="place_order" value="Sign up" data-value="Place order">
                                                                    <!--input type="hidden" id="_wpnonce" name="_wpnonce" value="3dbdefeb83"><input type="hidden" name="_wp_http_referer" value="/checkout/?wc-ajax=update_order_review"-->	
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal form -->

            <!--page footer-->
            <footer id="main-footer" class="site-footer clearfix">
                <div class="container">
                    <div class="row">


                        <!--about widget-->
                        <div class="col-md-3 col-sm-6">
                            <section  class="widget animated fadeInLeft">
                                <h3 class="title">About MedicalPress</h3>
                                <div class="textwidget">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                    nisl ut aliquip ex ea commodo consequat.</p>
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
            <script type='text/javascript' src='../js/respond.min.js'></script>
            <script type='text/javascript' src='../js/jquery-twitterFetcher.js'></script>
            <script type='text/javascript' src='../js/jquery-migrate-1.2.1.min.js'></script>
            <script type='text/javascript' src='../js/custom.js'></script>

        </body>
        </html>

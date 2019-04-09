<div class="header-top clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-5 ">
                <p>Welcome to MedicalPress a Premium Medical Theme</p>
            </div>
            <!--opening hours-->
            <div class="col-md-7 text-right">
                <p>
                    Opening Hours : <span>Monday to Saturday - 8am to 9pm</span>
                    <br class="visible-xs">&nbsp;&nbsp;Contact : <span>+1-800-654-3210</span>
                </p>
            </div>

        </div>
    </div>
</div>


<header id="header">
    <div class="container">

        <!-- Website Logo -->
        <div class="logo clearfix">
            <a href="index.php">
                <img src="images/temp-images/logo-two.png" alt="Medicalpress">
            </a>
        </div>

        <!-- Main Navigation -->
        <nav class="main-menu">
            <ul class="header-nav clearfix" id="menu-main-menu">
                <li class=" page_item">
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="addrecord.php">Book Appointment</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                 <li>
                    <a href="logout.php"  >Logut</a>
                </li>
            </ul>
        </nav>
        <div id="responsive-menu-container"></div>
    </div>
</header>







<!-- modal -->
<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i>
              Login</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
                <form  method="POST" enctype="multipart/form-data" class="checkout woocommerce-checkout" action="login.php" >
              <div class="md-form form-sm mb-5">
                <i class="fa fa-envelope prefix"></i><label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                <input type="email" id="modalLRInput10" name="email" class="form-control form-control-sm validate">
              </div>
               
              <div class="md-form form-sm mb-4">
                <i class="fa fa-lock prefix"></i><label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                <input type="password" id="modalLRInput11" name="password" class="form-control form-control-sm validate">
              </div>
              
              <div class="text-center mt-2">
                <button class="btn btn-info" name="login" >Log in <i class="fa fa-sign-in ml-1"></i></button>
              </div>
              </form>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="signup.php" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
              <button type="button" class="btn btn-danger waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>

          </div>
          <!--/.Panel 7-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->
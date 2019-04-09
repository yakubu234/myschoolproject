        <?php
        include 'db.php';
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        if (isset($_POST['query'])) {
          $number = $_POST['rec'];
          $sel = "SELECT * FROM records where reciept_num = '$number'" ;
          $query = $conn->query($sel);
          if ($query) {
           while ($res = $query-> fetch_assoc()) {
             $info = $res['info'];
             $fname = $res['first_name'];
             $lname = $res['last_name'];
             $doctorname = $res['doctor_name'];
             $doctorid = $res['doctor_id'];
             $address = $res['address'];
             $dob = $res['dob'];
             $email = $res['email'];
             $phone = $res['phone'];
             $patientnum = $res['patient_num'];
             $recordtnum = $res['reciept_num'];
             $time = $res['time'];
             $gender = "male";
             $state = "ogun state";
           }
         }
       }
       ?>
       <?php 
       $var = "".'
       <div  class="layout" ><b class="text-center" >SECURED PATIENT RECORDS </b></div>
       <div class="box" >
       <p>&nbsp;</p>
       <p><b style="margin-left: 40px;">Time Submitted : </b>'. $time .'<span style="margin-left: 150px;"><b>Record Number : </b>'. $recordtnum .'</span></p>
       <p>&nbsp;</p>
       <p><b style="margin-left: 20px;" >PATIENT DETAILS</b></p>
       <p class="rule"></p>
       <p>&nbsp;</p>
       <div class="box2 col-md-7">
       <p><b class="norm" >Names : </b>'. $fname . "&nbsp;" . $lname.'</p>
       <p>&nbsp;</p>
       <p><b class="norm" >Address : </b>'. $address .'</p>
       <p>&nbsp;</p>
       <p><b class="norm" >Email : </b>'. $email .'</p>
       <p>&nbsp;</p>
       <p><b class="norm" >Phone Number : </b>'. $phone .'</p>
       </div>
       <div class="box3 col-md-5">
       <p><b> Gender :</b>'. $gender.'</p>
       <p>&nbsp;</p>
       <p><b> D.O.B : </b>'. $dob.'</p>
       <p>&nbsp;</p>
       <p><b> Patient Number: </b>'. $patientnum.'</p>
       <p>&nbsp;</p>
       <p><b> State: </b>'. $state.'</p>
       </div>
       <p>&nbsp;</p>
       <p><b style="margin-left: 20px;" >DOCTORS DETAILS</b></p>
       <p class="rule"></p>
       <p>&nbsp;</p>
       <div class="box2 col-md-7">
       <p><b class="norm" >Names : </b>'. $doctorname.'</p>
       <p>&nbsp;</p>
       <p><b class="norm" >Speciallity : </b>'. $doctorid .'</p>
       </div>
       <div class="box3 col-md-5">
       <p><b> Phone Number :</b>'. $phone.'</p>
       <p>&nbsp;</p>
       <p style="display:none;"><b> D.O.B : </b>'. $dob.'</p>
       </div>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p><b style="margin-left: 20px;" >MEDICAL DETAILS</b></p>
       <p class="rule"></p>
       <p>&nbsp;</p>
       <div class="box2 col-md-12">
       <p>&nbsp;</p>
       <p><b class="norm" >Names : </b>'. $fname . "&nbsp;" . $lname.'</p>
       <p>&nbsp;</p>
       <p><b class="norm" >Address : </b>'. $address .'</p>
       <p>&nbsp;</p>
       <p><b class="norm" >Email : </b>'. $email .'</p>
       <p>&nbsp;</p>
       <p><b class="norm" >Phone Number : </b>'. $phone .'</p>
       </div>
       <p>&nbsp;</p>
       <p><b style="margin-left: 40px;">Date : </b>'. $time .'<span style="margin-left: 280px;"><b>Time : </b>'. $recordtnum .'</span></p>
       <p>&nbsp;</p>
       </div> ';
                // $key = openssl_digest(php_uname(), 'SHA256', TRUE);
       $hash = password_hash($email, PASSWORD_DEFAULT);
       $key = $hash;
       $string = $var;

       $iv = mcrypt_create_iv(
        mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
        MCRYPT_DEV_URANDOM
      );
       $encrypted = base64_encode(
        $iv .
        mcrypt_encrypt(
          MCRYPT_RIJNDAEL_128,
          hash('sha256', $key, true),
          $string,
          MCRYPT_MODE_CBC,
          $iv
        )
      );
       if ($encrypted) {            

        /* Exception class. */
        require 'C:\xampp\htdocs\www\group 2 (two)\user\src\Exception.php';

        /* The main PHPMailer class. */
        require 'C:\xampp\htdocs\www\group 2 (two)\user\src\PHPMailer.php';

        /* SMTP class, needed if you want to use SMTP. */
        require 'C:\xampp\htdocs\www\group 2 (two)\user\src\SMTP.php';

        $mail = new PHPMailer(TRUE);
        require 'C:\xampp\htdocs\vendor\autoload.php';
                $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'securedhms@gmail.com';                 // SMTP username
    $mail->Password = 'OdunFavourAbiola';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
                                        // TCP port to connect to
    //Recipients
    $mail->setFrom('securedhms@gmail.com', 'Mailer');
    $mail->addAddress('yakubuabiola2003@gmail.com', 'Joe User');     // Add a recipient
    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $key;
    $mail->AltBody = $key;

    $mail->send();
    echo '<p class = "box" >Message has been sent to your email<p>';
  } catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }

// 
  session_start();
  $_SESSION['key'] =$key;
  $_SESSION['encrypted'] =$encrypted;
  ?>
  <meta http-equiv="refresh" content="0;url=show.php" >
  <?php
  session_unset();
  session_destroy();          
}else{
  echo "<script>
  alert('Error in encrypting')
  /script>";
}
?>
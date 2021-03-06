<?php
/**
 * appointment request handler
 */
Include "db.php";
/**
 * File Name: appointment_form_handler.php
 *
 * Send message function to process contact form submission
 *
 */

/* database connection */
if ( isset( $_POST['submit'] ) ):

    $name = filter_var( $_POST['name'], FILTER_SANITIZE_STRING );
    $from_email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL );
    $number = filter_var( $_POST['number'], FILTER_SANITIZE_STRING );
    $date = filter_var( $_POST['date'], FILTER_SANITIZE_STRING );
    $message = filter_var( $_POST['message'], FILTER_SANITIZE_STRING );
     /* insert int database */
   $ins = "INSERT INTO appointment VALUES (null,'$name','$number',' $from_email',' $date','$message',null)";
   $con = $conn->query($ins);
   if ($con) {
    echo "<script>
    alert('Appointment Recieved thank you')
    </script>";
}
/* done inserting into database */
    /* done inserting into database */
    $to_email = "grouptwo@gmail.com";    // provide your target email address here
    $to_name = "Dear group two team";

    $email_subject = 'You Have Received a Message From ' . $name . '.';

    if ( ! empty( $name ) ) {
        $email_subject = $name . '.';
    }

    $email_body = "You have Received a message from: " . $name . " <br/>";

    if (!empty( $number )) {
        $email_body .= "Number: " . $number . " <br/><br/>";
    }
    if (!empty( $date )) {
        $email_body .= "Date: " . $date . " <br/><br/>";
    }

    $email_body .= "Their additional message is as follows." . " <br/><br/>";

    $email_content = nl2br( $message ) . " <br/><br/>";

    $email_reply = 	"You can contact " . $name . " via email, " . $from_email ;

    $prepared_message = $email_body . $email_content . $email_reply;

    // You can consult https://github.com/eoghanobrien/php-simple-mail for more details
    require 'class.simple_mail.php';

    /* @var SimpleMail $mail */
    $mail = new SimpleMail();
    $mail->setTo( $to_email, $to_name )
    ->setSubject( $email_subject )
    ->setFrom( $from_email, $name )
    ->addMailHeader( 'Reply-To', $from_email, $name )
    ->addGenericHeader( 'X-Mailer', 'PHP/' . phpversion() )
    ->addGenericHeader( 'Content-Type', 'text/html; charset="utf-8"' )
    ->setMessage( $prepared_message );


    $sent = $mail->send();

    //echo $mail->debug();

    if( $sent ) {
        echo json_encode(array(
            'success' => true,
            'message' => "Message Sent Successfully!"
        ));
    } else {
        echo json_encode(array(
            'success' => false,
            'message' => "Server Error:  mail method failed!"
        )
    );
    }

else:

    echo json_encode(array(
        'success' => false,
        'message' => "Invalid Request !"
    )
);
endif;

die;

?>
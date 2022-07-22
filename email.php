<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$mail = $_POST['message'];
$to = "dayosalamboi@gmail.com";
$subject = "New Form submission";

$message = "You have received a new message from the user $name.\n".
                          "Here is the message:\n $mail".
$headers = "Reply-To: $visitor_email \r\n";
$time = time()

$retval = mail($to,$subject,$message,$headers);
if( $retval == true ) {
    echo "Message sent successfully...";
 }else {
    echo "Message could not be sent...";
 }

print "Script Ran $time";

 ?>


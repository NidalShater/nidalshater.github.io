<?php 
if(isset($_POST['submit'])){
    $to = "ngiw2014@gmail.com"; // this is your Email address
    $from = $_POST['form_email']; // this is the sender's Email address
    $name = $_POST['form_name'];
    $subject = $_POST['form_subject'];
    $subject2 = "Copy of your message to Nidal Shater: ".$_POST['form_subject'];
    $message = $name. " wrote the following:" . "\n\n" . $_POST['form_message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['form_message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
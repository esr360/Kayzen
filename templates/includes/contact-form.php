<?php 

if(isset($_POST['submit'])){
    
    $to = "esr360@live.com"; // this is your Email address
    
    $from = $_POST['emailAddress']; // this is the sender's Email address
    $phone = $_POST['phoneNumber']; // this is the sender's Email address
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['yourMessage'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['yourMessage'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    
}
    
?>
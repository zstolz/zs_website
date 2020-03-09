
<?php

if($_POST["submit"]) {
    $recipient="zstolz26@gmail.com";
    $subject="Website Message";
    $sender=$_POST["firstName"]." ".$_POST["lastName"];                       
    $company=$_POST["company"];
    $phone=$_POST["phone"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];
    $mailBody="Name: $sender \r\n";
    $mailBody.="Company: $company \r\n";
    $mailBody.="Phone: $phone \r\n";
    $mailBody.="Email: $senderEmail\r\n";
    $mailBody.= "Message: $message\r\n";
    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<?=$thankYou ?>
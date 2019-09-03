<?php
if (isset($_POST['submit'])) {
    $subject = $_POST['pergunta'];
    $mailFrom = $_POST['email'];
    
    $mailTo = "chalestriunfo@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$email.".\n\n".$subject;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
    }
?>
<?php
if (isset($_POST['submit'])) {
    $mail = $_POST['mail'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $message1 = $_POST['message1'];
    $mailTo = "vedran_tadic97@gmail.com";
    $headers = "From: ".$mail;
    $txt = "Primili ste e-mail od:".$number.".\n\n.$message";
    mail($mailTo, $subject, $txt, $headers);
    header("Location: ../kreiranje_P.html?mailsend");
}
?>
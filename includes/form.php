<?php
session_start();

if (isset($_POST["sendmail"])) {
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $emailFrom = $_POST["email"];
    $message = $_POST["message"];

    $to = "nataliemezher96@hotmail.com";
    $headers = "From: " . $emailFrom;
    $txt = "You have recieved an email from " . $name . ".\n\n" . $message;


    mail($to, $subject, $txt, $headers);

    header("Location: ../index.php");
}

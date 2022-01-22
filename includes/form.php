<?php
require("config.php");

$errormsg = "";

if (isset($_POST['sendmail'])) {
    $contactName = $_POST['name'];
    $contactEmail = $_POST['email'];
    $contactSubject = $_POST['subject'];
    $contactMSG = $_POST['message'];


    if (empty($username) || empty($email) || empty($password)) {
        $error = "Fill in all fields";
    }
    //nts extra kollar sen

    if (empty($errormsg)) {
        $pdo = connection();
        $stmnt = $pdo->prepare('INSERT INTO contact(name, email, subject, message) VALUES (:name, :email, :subject, :message)');
        $stmnt->bindValue('name', $contactName);
        $stmnt->bindValue('email', $contactEmail);
        $stmnt->bindValue('subject', $contactSubject);
        $stmnt->bindValue('message', $contactMSG);
        $stmnt->execute();
        header("Location: ../index.php");
    } else {
        $error = "Something went wrong";
    }
}



/*

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
*/
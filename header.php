<?php
session_start();
$loggedinUser = $_SESSION['user']['username'];
$loggedInID = $_SESSION['user']['id'];


/*
if (!isset($loggedInUser)) {
    header("Location: index.php");
    exit;
}
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <meta name="author" content="Natalie Mezher">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Natalie's hemsida</title>
</head>

<body>
    <nav class="navmenu">
        <div class="header"><a href="index.php">Natalie's hemsida</a></div>
        <div class="ham">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <ul class="divul-pages">


            <li><a href="index.php"><span class="material-icons">home </span>Hem</a></li>
            <li><a href="page2.php"><span class="material-icons">article</span> Blog</a></li>

            <?php
            if (isset($loggedinUser)) {
            ?>
                <li> <a href="uploadpage.php"> + </a> </li>
            <?php } ?>




            <li><a href="page3.php"><span class="material-icons">collections</span>Galleria</a></li>
            <!-- <li><a href="page4.php"><span class="material-icons">account_circle</span> Om mig</a></li>-->
            <li><a href="page5.php"><span class="material-icons">call</span> Kontakt</a></li>


            <?php
            if (!isset($loggedinUser)) {
            ?>
                <li><a href='./loginpage.php'> Logga in </a></li>
            <?php } else { ?>
                <li> <a href="./includes/logoutcon.php"> Logga ut </a> </li>

            <?php } ?>





        </ul>
    </nav>
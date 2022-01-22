<?php
require("config.php");

$pdo = connection();

if (isset($_POST['hidepost'])) {
    $loggedInUser = $_SESSION['user']['id'];
    $

    $stmnt2 = $pdo->prepare('UPDATE blogposts SET visible = 1 ');
    $stmnt2->execute();

    header("location: ../index.php");
}

<?php

require("config.php");

$getid = $_GET['id'];
if (isset($_POST['draft'])) {
    $pdo = connection();
    $stmnt = $pdo->prepare('UPDATE blogposts SET visible = 0 WHERE postid = :id');
    $stmnt->execute(['id' => $getid]);

    header("Location: ../eachblogpost.php?id=$getid");
}

if (isset($_POST['undraft'])) {
    $pdo = connection();
    $stmnt = $pdo->prepare('UPDATE blogposts SET visible = 1 WHERE postid = :id');
    $stmnt->execute(['id' => $getid]);

    header("Location: ../eachblogpost.php?id=$getid");
}

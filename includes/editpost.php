<?php
require("functions-inc.php");

$getid = $_GET['id'];
if (isset($_POST['update'])) {
    $newtitle = $_POST['title'];
    $newDesc = $_POST['description'];
    $pdo = connection();
    $stmnt = $pdo->prepare('UPDATE blogposts SET title = :title, description = :description
     WHERE postid = :id');
    $stmnt->bindValue('title', $newtitle);
    $stmnt->bindValue('description', $newDesc);
    $stmnt->bindValue('id', $getid);
    $stmnt->execute();

    header("Location: ../eachblogpost.php?id=$getid");
}

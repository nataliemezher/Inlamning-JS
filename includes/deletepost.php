<?php
require("config.php");
$getid = $_GET['id'];
if (isset($_POST['deletepost'])) {
    $pdo = connection();
    $stmnt = $pdo->prepare('DELETE FROM blogposts WHERE postid = :id');
    $stmnt->execute(['id' => $getid]);
    header("Location:../page2.php ");
}

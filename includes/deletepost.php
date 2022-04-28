<?php
require("config.php");
$getid = $_GET['id'];
if (isset($_POST['edit'])) {
    $pdo = connection();
    $stmnt = $pdo->prepare('UPDATE * FROM blogposts WHERE title = :title AND description = :description');
    $stmnt->execute(['id' => $getid]);
    header("Location:../page2.php ");
}

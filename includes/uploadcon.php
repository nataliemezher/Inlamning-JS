<?php
include("./header.php");
include("config.php");
$loggedinUser = $_SESSION['user']['username'];
$loggedInID = $_SESSION['user']['id'];



$directory = dirname(__DIR__, 1) .  "/users/$loggedinUser/";
$fileName = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
$filePath = $directory . $fileName;

$title = $_POST['title'];
$desc = $_POST['description'];

$saveimageToDB = $loggedinUser . '/' . $fileName;

if (isset($_POST['submitupload'])) {
    var_dump($filePath);
    if (move_uploaded_file($tmp, $filePath)) {
        $pdo = connection();
        $stmnt = $pdo->prepare('INSERT INTO blogposts(image, title, userid, description) 
        VALUES (:image, :title, :userid, :description)');

        $stmnt->bindValue(':image', $saveimageToDB);
        $stmnt->bindValue(':title', $title);
        $stmnt->bindValue(':userid', $loggedInID);
        $stmnt->bindValue(':description', $desc);

        //session_start();
        //$_SESSION['blogposts'] = $blogposts;

        $stmnt->execute();

        header("Location: ../page2.php");
    } else {
        echo "ERROR";
    }
}

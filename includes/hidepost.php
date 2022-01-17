<?php
require("config.php");

$pdo = connection();

if (isset($_POST['hidepost'])) {
    $hideBlogPost = $_POST['hidepost'];
    $loggedInUser = $_SESSION['userid'];

    $stmnt2 = $pdo->prepare('UPDATE blogposts SET visible = 0 WHERE postid = $loggedinUser AND userid = $loggedInUser');
    $stmnt2->execute();
}

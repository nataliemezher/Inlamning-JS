<?php
require("config.php");



function getBlogFeed($userid)
{
    $pdo = connection();
    $stmt = $pdo->prepare('SELECT * FROM user INNER JOIN blogposts ON user.id = blogposts.userid WHERE user.id = :id');
    $stmt->bindValue(':id', $userid);
    $stmt->execute();

    $results =  $stmt->fetchAll(PDO::FETCH_ASSOC);


    foreach ($results as $blogposts) {

        echo "<div class=''>
        <div class=''>
           <h4>$blogposts->title</h4><p>$blogposts->time</p>
        </div>
        <div class=''>
           <img class='img-gallery' data-title='$blogposts->title' data-postid='$blogposts->postid' data-content='$blogposts->description' width='500' height='auto' src='" . $blogposts->image . "'>
        </div>
        <div>
           <p><b>$blogposts->username:</b> $blogposts->description<p>
        </div>
        </div>";
    }
}


/*
function isUserloggedIn()
{

    $loggedInUser = $_SESSION['username'];
    $loggedInID = $_SESSION['userid'];

    if (!isset($loggedInUser)) {
        header("Location: InlamningsprojektSEPT/loginpage.php");
    } else {
        header("InlamningsprojektSEPT/index.php");
    }
}
*/
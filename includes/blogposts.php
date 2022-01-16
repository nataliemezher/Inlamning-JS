<?php
require("config.php");

$pdo = connection();
$stmnt = $pdo->prepare('SELECT* from blogposts WHERE userid = :userid
ORDER BY time DESC');
$stmnt->bindValue('userid', $blogposter);
$results = $stmnt->fetchAll(PDO::FETCH_CLASS);

foreach ($results as $blogposts) {
    echo "<img class='bloggallery' data-postid='$blogposts->postid'  data-title='$blogposts->title' data-description='$blogposts->description' width='280' height='280' src='" . $blogposts->image . "'>";
}

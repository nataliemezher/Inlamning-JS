<?php
require("config.php");

$pdo = connection();
$stmnt = $pdo->prepare('SELECT* from blogposts WHERE userid = :userid
ORDER BY time DESC');
$stmnt->bindValue('userid', $blogposter);
$results = $stmnt->fetchAll(PDO::FETCH_CLASS);

$imagedir = "http://localhost/InlamningsprojektSEPT/users";

foreach ($results as $blogposts) {
    $path = $imagedir . $blogposts->image;
    echo "<img src='$path' class='bloggallery' data-postid='$blogposts->postid'  data-title='$blogposts->title' data-description='$blogposts->description' width='280' height='280' src='" . $blogposts->image . "'>";
}
/*
echo "<div>
<div>
   <h3>$blogposts->title</h3><p>$blogposts->time</p>
</div>
<div>
   <img class='img-gallery' data-title='$blogposts->title' data-postid='$blogposts->postid' data-content='$blogposts->description' width='500' height='auto' src='" . $blogposts->image . "'>
</div>
<div>
   <p><b>$blogposts->username:</b> $blogposts->description<p>
</div>
</div>";

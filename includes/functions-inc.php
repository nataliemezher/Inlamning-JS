<?php
require("config.php");



function getBlogFeed($userid)
{
    $pdo = connection();
    $stmnt = $pdo->prepare('SELECT * FROM blogposts WHERE userid = :userid 
    ORDER BY time DESC');
    //$stmnt = $pdo->prepare('SELECT * FROM user INNER JOIN blogposts ON user.id = blogposts.id WHERE user.id = :id');
    $stmnt->bindValue(':userid', $userid);
    $stmnt->execute();

    $results =  $stmnt->fetchAll(PDO::FETCH_OBJ);
    $imagedir = "http://localhost/InlamningsprojektSEPT/users/";

    foreach ($results as $blogposts) {

        $path = $imagedir . $blogposts->image;
        //echo "hej";

        echo "
        <div class='blogpost'>
             <div>
               <p class='blogtitle'> $blogposts->title </p>
             </div>
             <div>
               <img src='$path' class='blogpic'  width='500' height='600' src='" . $blogposts->image . "'>
             </div>
             <div>
               <p class='blogdesc'>$blogposts->description</p>
             </div>

             <div class='editpost'>
               

               <form action='./includes/hidepost.php' method='POST'> 
                  <input type='submit' name='hidepost' value='göm inlägg' >
                </form>

                <form action='./includes/editpost.php' method='POST'> 
                  <input type='submit' name='edit' value='Redigera inlägg' >
                </form>

             </div>
        </div>
        
        
        ";
    }
}

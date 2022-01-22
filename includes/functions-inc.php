<?php
require("config.php");

function isloggedin()
{
  if (isset($_SESSION['user'])) {
    return true;
  }
  return false;
}



function getBlogFeed()
{
  $pdo = connection();
  $stmnt = $pdo->prepare('SELECT * FROM blogposts  ORDER BY time DESC');
  $stmnt->execute();

  $results =  $stmnt->fetchAll(PDO::FETCH_OBJ);
  $imagedir = "http://localhost/InlamningsprojektSEPT/users/";


  foreach ($results as $blogposts) {

    $path = $imagedir . $blogposts->image;

    if (isloggedin()) {
      echo "
             <div>
               <p class='blogtitle'> $blogposts->title </p>
             </div>
             <div>
              <a href=eachblogpost.php?id=$blogposts->postid> <img src='$path'  class='blogpic'   width='500' height='600' ></a>
             </div>
             <div>
               <p class='blogdesc'>$blogposts->description</p>
             </div>
             <div class='postoptions'> 
             </div>
        ";
    } else if ($blogposts->visible == 1) {
      echo "
      <div>
        <p class='blogtitle'> $blogposts->title </p>
      </div>
      <div>
       <a href=eachblogpost.php?id=$blogposts->postid> <img src='$path'  class='blogpic'   width='500' height='600' ></a>
      </div>
      <div>
        <p class='blogdesc'>$blogposts->description</p>
      </div>
      <div class='postoptions'>       
      </div>

 ";
    }
  }
}


function getEachPost()
{

  $pdo = connection();
  $stmnt = $pdo->prepare('SELECT * FROM blogposts WHERE postid = :id');
  $stmnt->execute(['id' => $_GET['id']]);

  $results = $stmnt->fetch();
  $imagedir = "http://localhost/InlamningsprojektSEPT/users/";
  $path = $imagedir . $results['image'];

  echo "
  <div>
  <p class=blogtitle> $results[title] </p>
</div>
<div>
  <img  class=blogpic  width=500 height=600 src=$path>
</div>
<div>
  <p class=blogdesc>$results[description]</p>
</div>

<div class=postoptions>
 
</div>
";
}
function draftButton()
{
  $pdo = connection();
  $stmnt = $pdo->prepare('SELECT visible, postid FROM blogposts WHERE postid = :id');
  $stmnt->execute(['id' => $_GET['id']]);
  $results = $stmnt->fetch();
  if ($results['visible'] == 1) {
    echo "<form method=POST action=./includes/setdraft.php?id=$results[postid] ><input type=submit name=draft value=Utkast ></form>";
  } else {
    echo "<form method=POST action=./includes/setdraft.php?id=$results[postid] ><input type=submit name=undraft value='Lägg till' ></form>";
  }
}
function editButton()
{
  $pdo = connection();
  $stmnt = $pdo->prepare('SELECT * FROM blogposts WHERE postid = :id');
  $stmnt->execute(['id' => $_GET['id']]);
  $results = $stmnt->fetch();

  if (!isset($_POST['edit'])) {
    echo "<form method=POST action=./eachblogpost.php?id=$results[postid]  ><input type=submit name=edit value=Redigera> </form>";
  }
  if (isset($_POST['edit'])) {
    echo "   
    <div class='postdiv'>
    <form action='./includes/editpost.php?id=$results[postid]' method='POST' class='update-form' >
     
            <p>Redigera</p>
           <div>
           <span>Titel</span> <input type='text' placeholder='$results[title]' name='title'>
           </div>
           <div>
            <span>Text </span><textarea type='text' placeholder='$results[description]' name='description'> </textarea>
          </div>
           <div class='updatebtn'>
            <input  type='submit' name='update' value='Uppdatera'>
           </div>
    
    </form>
</div>";
  }
}

function deleteButton()
{

  $pdo = connection();
  $stmnt = $pdo->prepare('SELECT * FROM blogposts WHERE postid = :id');
  $stmnt->execute(['id' => $_GET['id']]);
  $results = $stmnt->fetch();
  echo "<form method=POST action=./includes/deletepost.php?id=$results[postid] ><input type=submit name=deletepost value='Ta bort' ></form>";
}

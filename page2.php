<?
require("header.php");
require("./includes/functions-inc.php");

$loggedinUser = $_SESSION['user']['username'];
$loggedInID = $_SESSION['user']['id'];



?>
<div class="blogpostspage">

    <?php
    getBlogFeed($loggedInID);
    if (isset($_POST['hidepost'])) {
        echo "<form action='./includes/editpost.php' method='POST'> 
        <input type='submit' name='edit' value='Redigera inlägg' >
      </form>";
    } else {
        echo "
        <form action='./includes/hidepost.php' method='POST'> 
           <input type='submit' name='hidepost' value='göm inlägg' >
         </form>";
    }


    ?>



    <h2>Blog artiklar</h2>



</div>

<? require("footer.php") ?>
<?
require("header.php");
require("./includes/functions-inc.php");

$loggedinUser = $_SESSION['user']['username'];
$loggedInID = $_SESSION['user']['id'];



?>
<div class="blogpostspage">

    <?php
    getBlogFeed($loggedInID);

    ?>



    <h2>Blog artiklar</h2>



</div>

<? require("footer.php") ?>
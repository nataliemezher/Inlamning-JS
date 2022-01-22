<?php
require("header.php");

require("./includes/functions-inc.php");
$loggedInUser = $_SESSION['user']['username'];
$loggedInID = $_SESSION['user']['userid'];
$postid = $_SESSION['blogposts']['postid'];
?>





<div class="eachpost">

    <?php
    echo $postid;
    getEachPost(); ?>

    <div class="postbuttons">
        <?php draftButton();
        editButton();
        deleteButton();

        ?>

    </div>



</div>









<?php require("./footer.php"); ?>
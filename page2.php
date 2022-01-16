<? session_start();
require("header.php");
require("includes/functions-inc.php");

$loggedinUser = $_SESSION['user']['username'];
$loggedInID = $_SESSION['user']['id'];

$blogposter = getBlogFeed($loggedinID);



?>
<div class="blogpostspage">
    <h2>Blog artiklar</h2>
    <?php require("includes/blogposts.php");
    ?>


</div>

<? require("footer.php") ?>
<?
require("header.php");
require("./includes/functions-inc.php");





?>
<div class="blogpostspage">
  <h2>Blog artiklar</h2>

  <div class='blogpost'>
    <?php
    getBlogFeed(); ?>

  </div>

</div>

<? require("footer.php") ?>
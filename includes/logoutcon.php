<?php

require("config.php");

unset($_SESSION['userid']);
session_unset();
session_destroy();

header("location: ../index.php");

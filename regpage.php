<?php
require("header.php");
include("includes/signupcon.php");

/*$statement = $pdo->prepare('select * from user');
$statement->execute();
var_dump($statement->fetchAll()); */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="reg-col">

        <h3>Registrera dig här</h3>

        <form action="includes/signupcon.php" method="POST">
            <div>
                <label>Username</label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label>E-mail</label>
                <input type="text" name="email" required>
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" name="reg-user" class="btn-reg">Bli ny medlem</button>

        </form>

    </div>

</body>

</html>


<?php require("footer.php"); ?>
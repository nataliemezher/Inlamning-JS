<?php

require("config.php");

$errorMsg = "";


if (isset($_POST['login-user'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; //sparar inputs i variablar

    if (empty($username) || empty($password)) {  //kollar så alla fields inte är tomma
        $errorMessage = "Make sure to fill in all fields!";
    }

    if (empty($errorMsg)) {  //om det inte finns några fel,gör detta
        $pdo = connection();
        $stmnt = $pdo->prepare('SELECT * FROM user WHERE username = :username');
        $stmnt->bindValue('username', $username);
        $stmnt->execute();
        $count = count($stmnt->fetchAll()); //kollar igenom alla usernames i detta fallet
        if ($count == 0) {  //om anv namn redan finns i db
            $errorMsg = "Username doesn't exist"; //skrivs ut endast om anv namn inte finns
        } else {
            $scndStmnt = $pdo->prepare('SELECT * FROM user WHERE username = :username');
            $scndStmnt->execute(['username' => $username]);
            $user = $scndStmnt->fetch();
            if (password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user'] = $user;
                header("Location: ../uploadpage.php ");
            } else {
                $errorMsg = "Wrong password"; //skrivs ut om pwd inte matchar i db
            }
        }
    }
}
/*

$pdo = connection();



$user = $stmnt->fetchAll();

if (password_verify($password, $user['password'])) {
    session_start();
    header("Location: ./uploadpage.php");
    echo "logged in";
} else {
    header("Location:  ./loginpage.php");
    echo "not logged in";
}


/*
$user = $stmnt->fetch();

if (!password_verify($password, $user['password'])) {
    header("Location: loginpage.php");
} else {
    header("Location: welcome.php");
}
*/
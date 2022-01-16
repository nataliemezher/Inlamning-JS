<?php
require("config.php");



$error = "";

$uploadDirectory = "/users/";
$currentDirectory = dirname(__DIR__, 1) . '/users/';

if (isset($_POST['reg-user'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $currentdir = $currentDirectory . $username;

    if (empty($username) || empty($email) || empty($password)) {
        $error = "Fill in all fields";
    } else if (strlen($username) <= 3 || (strlen($username) > 50)) {
        $error = "Too long or short username";
    }
    if (strlen($password) <= 3 || (strlen($password) > 100)) {
        $error = "Too long or short password";
    }

    if (empty($error)) {
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $pdo = connection();
        /*
        $stmt = $pdo->prepare('SELECT * FROM user WHERE username = :username');
        $stmt->bindValue('username', $username);
        $stmt->execute();
        */
        $stmt = $pdo->prepare('INSERT INTO user(username, email, password) VALUES (:username, :email, :password)');
        $stmt->bindValue('username', $username);
        $stmt->bindValue('email', $email);
        $stmt->bindValue('password', $hashed);
        $stmt->execute();
        mkdir($currentdir);
        header("Location: ../index.php ");
    } else {
        $errorMsg = "Something else went wrong";
    }
}




/*

$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

//spara data i session
$_SESSION['username'] = "{$username}";
$_SESSION['email'] = "{$email} ";
$_SESSION['password'] = "{$password}";

if (isset($_POST['reg-user'])) {
    $sql = "INSERT INTO user ('username', 'email',' password') VALUES ('$username, $email, $password')";
}
if ($connection->query($sql) === true) {
    echo "new user registered";
} else {
    echo "error";
}

header("Location: index.php");

*/

<?php

session_start();

function connection()
{
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=projektsept', 'root', 'root');
    } catch (PDOException $error) {
        echo "Something wrong with your connection: " . $error->getMessage();
    }
    return $pdo;
}

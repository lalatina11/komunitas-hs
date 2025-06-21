<?php
session_start();
require_once "../config/database.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $action = $mysqli->prepare("SELECT name, password FROM users WHERE email = ?");
    $action->bind_param("s", $email);
    $action->execute();
    $action->store_result();

    if($action->num_rows > 0){
        $action->bind_result($name, $hashedPass);
        $action->fetch();

        if(password_verify($password, $hashedPass)){
            $_SESSION["login"] = $email;

            $_SESSION["name"] = $name;
            header("Location: ../dashboard.php");
            exit;
        } else {
            echo "Password salah";
        }

        $action->close();
    }
}

$mysqli->close();
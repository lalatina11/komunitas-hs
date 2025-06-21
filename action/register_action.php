<?php
require_once "./config/database.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // get value from post
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // simple validation null
    if(empty($name) || empty($email) || empty($password)){
        echo "Data tidak boleh ada yang kosong";
    } else {
        // hash password
        $hashedPass = password_hash($password, PASSWORD_DEFAULT);

        // insert to database
        $action = $mysqli->prepare("INSERT INTO users (name, email, password, created_at) VALUES (?, ?, ?, NOW())");
        $action->bind_param("sss", $name, $email, $hashedPass);

        if($action->execute()){
            header("Location: login.php");
        } else {
            echo "Gagal mendaftar" . $action->error;
        }

        $action->close();
    }
}
$mysqli->close();
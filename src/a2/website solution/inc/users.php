<?php
    //author Oliver Munro
session_start();

$json = file_get_contents("users.json");
$users = json_decode($json, true);

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($users[$username])) {
    $storedHash = $users[$username]['password'];

    if (password_verify($password, $storedHash)) {
        $_SESSION['admin'] = $username;
        header("Location: home.php");
        exit;
    }
}

echo "Invalid login";
?>

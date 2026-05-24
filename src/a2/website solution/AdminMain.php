<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: admin.php");
    exit();
}

if (isset($GET['login']) && $_GET['login'] === 'success') {
    echo "<script>console.log('Login successful for user: " . $_SESSION['username'] . "');</script>";
}
?>

<?php
include 'inc/header.php';
?>

<?php
if (isset($_GET['login']) && $_GET['login'] === 'success') {
    $user = isset($_GET['user']) ? $_GET['user'] : 'unknown';
    echo "<script>console.log('Login successful for user: $user');</script>";
}
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Oliver Munro" description="AdminMain Page for [Website Name]">
    <title>AdminMain Page</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<?php
include 'inc/footer.php';
?>
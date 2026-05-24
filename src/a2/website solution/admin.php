<?php
include 'inc/header.php';
?>


<script src="users.js"></script>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Oliver Munro" description="Admin Page for [Website Name]">
    <title>Admin Page</title>
    <link rel="stylesheet" href="styles/style.css">
</head>


<form action="users.php" method="POST" onsubmit="return validateLogin()">
    <input type="text" name="username" id="username">
    <input type="password" name="password" id="password">
    <button type="submit">Login</button>
</form>


<?php
include 'inc/footer.php';
?>
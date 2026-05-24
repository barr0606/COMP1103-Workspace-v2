<?php
include 'inc/header.php';

$loginMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = $_POST['username'] ?? '';
    $p = $_POST['password'] ?? '';

    $json = file_get_contents("data/users.json");
    $users = json_decode($json, true);

    $validLogin = false;

    foreach ($users as $user) {
        if ($user['username'] === $u && md5($p) === $user['password']) {
            $validLogin = true;
            break;
        }

    }

    if ($validLogin) {
        $loginMessage = "<p style='color: green;'>Login successful!</p>";
    } else {
        $loginMessage = "<p style='color: red;'>Invalid username or password.</p>";
    }
}
?>


<script src="scripts/users.js"></script>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Oliver Munro" description="Admin Page for [Website Name]">
    <title>Admin Page</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<?php echo $loginMessage; ?>


<form action="admin.php" method="POST" onsubmit="return validateLogin()">
    <input type="text" name="username" id="username">
    <input type="text" name="password" id="password">
    <button type="submit">Login Here</button>
</form>


<?php
include 'inc/footer.php';
?>
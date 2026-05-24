<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: admin.php");
    exit();
}

// Log the username
if (isset($_GET['login']) && $_GET['login'] === 'success') {
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : 'unknown';
    echo "<script>console.log('Login successful for user: $username');</script>";
}

include 'inc/header.php';
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Oliver Munro" description="AdminMain Page for [Website Name]">
    <title>AdminMain Page</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<h2>Submitted Applications</h2>

<?php
$appFile = __DIR__ . "/data/applications.json";
echo "<p>Loading from: $appFile</p>";


if (file_exists($appFile)) {
    $json = file_get_contents($appFile);

    // DEBUG BLOCK
    // echo "<pre>";
    // echo "RAW FILE CONTENTS:\n";
    // echo $json;
    // echo "\n\nJSON ERROR:\n";
    // echo json_last_error_msg();
    // echo "</pre>";
    // END DEBUG BLOCK

    $apps = json_decode($json, true);

    foreach ($apps as $app) {
        echo "<div class='application'>";

    foreach ($app as $key => $value) {
        if (is_array($value)) {
            $value = implode(", ", $value);
        }
        echo "<p><strong>" . ucfirst($key) . ":</strong> " . htmlspecialchars($value) . "</p>";
    }

    echo "<hr>";
    echo "</div>";
}
} else {
    echo "<p>No applications yet.</p>";
}
?>



<?php
include 'inc/footerAdminMain.php';
?>
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
// echo "<p>Loading from: $appFile</p>";


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

    foreach ($apps as $index => $app) {

    echo "<div class='app-card'>";

    // Display all fields dynamically
    foreach ($app as $key => $value) {
        if (is_array($value)) {
            $value = implode(", ", $value);
        }

        echo "<div class='app-row'>
                <span class='app-label'>" . ucfirst($key) . ":</span>
                <span class='app-value'>" . htmlspecialchars($value) . "</span>
              </div>";
    }

    echo "
        <div class='app-actions'>
            <form method='POST' action='inc/markReviewedAdminMain.php' style='display:inline;'>
                <input type='hidden' name='index' value='$index'>
                <button class='review-btn'>Mark Reviewed</button>
            </form>

            <form method='POST' action='inc/deleteApplicationAdminMain.php' style='display:inline;'>
                <input type='hidden' name='index' value='$index'>
                <button class='delete-btn'>Delete</button>
            </form>
        </div>
    ";

    echo "</div>";
}

} else {
    echo "<p>No applications yet.</p>";
}
?>



<?php
include 'inc/footerAdminMain.php';
?>
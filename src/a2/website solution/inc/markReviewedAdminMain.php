<?php
    // author Oliver Munro
$file = __DIR__ . "/../data/applications.json";

$apps = json_decode(file_get_contents($file), true);

$index = $_POST['index'];

// Add reviewed flag
$apps[$index]['reviewed'] = true;

file_put_contents($file, json_encode($apps, JSON_PRETTY_PRINT));

header("Location: ../AdminMain.php");
exit();

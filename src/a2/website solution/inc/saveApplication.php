<?php
$data = json_decode(file_get_contents("php://input"), true);

$file = __DIR__ . "/../data/applications.json";

$existing = [];

if (file_exists($file)) {
    $existing = json_decode(file_get_contents($file), true);
}

$existing[] = $data;

file_put_contents($file, json_encode($existing, JSON_PRETTY_PRINT));

echo "OK";

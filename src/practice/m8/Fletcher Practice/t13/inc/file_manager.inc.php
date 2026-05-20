<?php
function get_data($filename) {
    $path = dirname(__DIR__) . "/data/" . $filename;

    if (!file_exists($path)) {
        return [];
    }

    $json_content = file_get_contents($path);

    return json_decode($json_content, true) ?? [];
}

function save_data($filename, $data) {
    $path = dirname(__DIR__) . "/data/" . $filename;
    $json_content = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($path, $json_content);
}
?>

function get_data($filename) {
    $path = __DIR__ . "./data/animals.json/" . $filename;

    if(!file_exists($path)) {
        return[];
    }

    $json_content = file_get_contents($path);

    return json_decode($json_content, true) ?? [];
}
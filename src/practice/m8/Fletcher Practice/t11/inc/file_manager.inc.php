function get_data($filename) {
    $path = dirname(__DIR__) . "/data/" . $filename;

    if(!file_exists($path)) {
        return[];
    }

    $json_content = file_get_contents($path);

    return json_decode($json_content, true) ?? [];
}
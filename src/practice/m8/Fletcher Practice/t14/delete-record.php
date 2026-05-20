<?php
require_once __DIR__ . "/inc/file_manager.inc.php";

if (isset($_GET['type']) && isset($_GET['id'])) {
    $type = $_GET['type'];
    $id = $_GET['id'];

    $filname = ($type ==='animal') ? 'animals.json' : 'applications.json';
    $data = get_data($filname);

    $filtered_data = array_filter($data, function ($item) use ($id) {
        return $item['id'] !== $id;
    });

    $reindexed_data = array_values($filtered_data);
    save_data($filname, $reindexed_data);

    header("Location: admin.php");
    exit();
}
?>
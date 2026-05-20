<?php
require_once 'inc/file_manager.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apps = get_data('applications.json');

    $new_app = [
        'first_name' => $_POST['firstname'] ?? '',
        'last_name' => $_POST['lastname'] ?? '',
        'email' => $_POST['email'] ?? '',
        'phone' => $_POST['phone'] ?? '',
        'housing' => $_POST['housing'] ?? '',
        'yard_type' => $_POST['yardType'] ?? '',
        'message' => $_POST['message'] ?? '',
        'date' => date('Y-m-d H:i:s')
    ];

    $apps[] = $new_app;
    save_data('applications.json', $apps);

    header('Location: index.php');
    exit();
}
?>
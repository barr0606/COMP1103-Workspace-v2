<?php
require_once 'inc/file_manager.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apps = get_data('applications.json');

    $new_app = [
        'id' => uniqid('APP-'),
        'first_name' => $_POST['firstname'] ?? '',
        'last_name' => $_POST['lastname'] ?? '',
        'email' => $_POST['email'] ?? '',
        'phone' => $_POST['phone'] ?? '',
        'housing' => $_POST['housing'] ?? '',
        'yard_type' => $_POST['yardType'] ?? '',
        'message' => $_POST['message'] ?? '',
        'status' => 'Pending',
        'date' => date('Y-m-d H:i:s'),
        'pet-id' => htmlspecialchars($_POST['pet-id'])
    ];

    $apps[] = $new_app;
    save_data('applications.json', $apps);

    header('Location: index.php');
    exit();
}
?>
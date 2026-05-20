<?php
require_once 'inc/file_manager.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $applications = get_data('applications.json');

    $new_application = [
        'first_name' => $_POST['firstname'] ?? '',
        'last_name' => $_POST['lastname'] ?? '',
        'email' => $_POST['email'] ?? '',
        'phone' => $_POST['phone'] ?? '',
        'animal_id' => $_POST['animal_id'] ?? '',
        'message' => $_POST['message'] ?? '',
    ];

    $applications[] = $new_application;
    save_data('applications.json', $applications);

    header('Location: confirmation.php');
    exit();
}
?>
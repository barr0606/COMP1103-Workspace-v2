<?php
require_once 'inc/file_manager.inc.php';

if (isset($_GET['app_id']) && isset($_GET['pet_id'])) {
    $app_id = trim($_GET['app_id']);
    $pet_id = trim($_GET['pet_id']);

    if ($app_id === '' || $pet_id === '') {
        header('Location: admin.php');
        exit();
    }

    $apps = get_data('applications.json');

    foreach ($apps as &$app) {
        if ($app['id'] === $app_id) {
            $app['status'] = 'approved';
            break;
        }
    }
    unset($app);
    save_data('applications.json', $apps);

    $animals = get_data('animals.json');
    foreach ($animals as &$animal) {
        if ($animal['id'] === $pet_id) {
            $animal['status'] = 'Adopted';
            break;
        }
    }
    save_data('animals.json', $animals);

    $log = get_data('adoptions-log.json');
    $log[] = [
        "date" => date('Y-m-d H:i:s'),
        "app_id" => $app_id,
        "pet_id" => $pet_id
    ];

    save_data('adoptions-log.json', $log);
}
header('Location: admin.php');
exit();

?>
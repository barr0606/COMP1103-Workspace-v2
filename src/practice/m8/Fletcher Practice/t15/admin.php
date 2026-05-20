<?php
include 'inc/header.php'; 
require_once __DIR__ . "/inc/file_manager.inc.php";
$animals = get_data('animals.json');
$apps = get_data('applications.json');
?>

<head>
    <meta charset="UTF-8">
    <meta author="Fletcher Barry" description="Happy Paws Animal Shelter Homepage">
    <script src="scripts/main.js" defer></script>
    <title>Happy Paws - Admin</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <main>
        <h2>
            Administration
        </h2>
        <div id="admin-view">
            <button class="page-select" onclick="showView('animal-view')">View Animals</button>
            <button class="page-select" onclick="showView('app-view')">View Applications</button>
        </div>
        <div id="animal-view" style="display: none;">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Breed</th>
                        <th>Status</th>
                        <th>Image Path</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($animals as $animal) : ?>
                        <tr>
                            <td><?= htmlspecialchars($animal['id']) ?></td>
                            <td><?= htmlspecialchars($animal['name']) ?></td>
                            <td><?= htmlspecialchars($animal['type']) ?></td>
                            <td><?= htmlspecialchars($animal['breed']) ?></td>
                            <td><?= htmlspecialchars($animal['status']) ?></td>
                            <td><?= htmlspecialchars($animal['image']) ?></td>
                            <td><a href="delete-record.php?type=animal&id=<?= urlencode($animal['id']) ?>" class="delete-btn">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div id="app-view" style="display: none;">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Pet ID</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($apps as $app) : ?>
                        <?php $applicationId = $app['id'] ?? ''; ?>
                        <?php $petId = $app['pet-id'] ?? ''; ?>
                        <tr>
                            <td><?= htmlspecialchars($applicationId) ?></td>
                            <td><?= htmlspecialchars($app['first_name'] ?? '') . ' ' . htmlspecialchars($app['last_name'] ?? '') ?></td>
                            <td><?= htmlspecialchars($app['email'] ?? '') ?></td>
                            <td><?= htmlspecialchars($app['phone'] ?? '') ?></td>
                            <td><?= htmlspecialchars($petId) ?></td>
                            <td>
                                <span style="color: <?= (strcasecmp($app['status'] ?? '', 'approved') === 0) ? 'green' : 'black' ?>;">
                                    <?= htmlspecialchars($app['status'] ?? '') ?>
                                </span>
                            </td>
                            <td><?= htmlspecialchars($app['date'] ?? '') ?></td>
                            <td>
                                <?php if ($applicationId && $petId) : ?>
                                    <a href="delete-record.php?type=application&id=<?= urlencode($applicationId) ?>" class="delete-btn">Delete</a>
                                    <a href="approve-adoption.php?type=app&app_id=<?= urlencode($applicationId) ?>&pet_id=<?= urlencode($petId) ?>" class="approve-btn">Approve</a>
                                <?php else : ?>
                                    <span class="error-text">Incomplete record</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

<?php include 'inc/footer.php'; ?>
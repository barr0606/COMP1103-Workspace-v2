<?php
include 'inc/header.php';
require_once __DIR__ . "/inc/file_manager.inc.php";
$animals = get_data('animals.json');
?>

<head>
    <meta charset="UTF-8">
    <meta author="Fletcher Barry" description="Happy Paws Animal Shelter Homepage">
    <script src="scripts/main.js" defer></script>
    <title>Happy Paws - Available for Adoption</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <main>
        <h2>
            Our Guests Available for Adoption
        </h2>
        <input type="text" placeholder="Search by name..." id="search-name"></input>
        <label>Filter by type</label>
        <select id="filter-type">
            <option value="ALL">All Types</option>
            <option value="Dog">Dogs</option>
            <option value="Cat">Cats</option>
        </select>
        <div id="animal-container">
            <?php
                foreach ($animals as $animal) {
                    echo "<div class=\"animal-card\">";
                    echo "<img src=\"" . htmlspecialchars($animal['image']) . "\" alt=\"Picture of " . htmlspecialchars($animal['name']) . "\">";
                    echo "<h3>" . htmlspecialchars($animal['name']) . "</h3>";
                    echo "<p>Type: " . htmlspecialchars($animal['type']) . "</p>";
                    echo "<p>Breed: " . htmlspecialchars($animal['breed']) . "</p>";
                    echo "<p>Status: " . htmlspecialchars($animal['status']) . "</p>";
                    echo "</div>";
                }
            ?>
        </div>
    </main>
</body>

<?php include 'inc/footer.php'; ?>
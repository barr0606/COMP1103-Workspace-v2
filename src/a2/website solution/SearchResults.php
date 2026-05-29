<?php
include 'inc/header.php';
require_once __DIR__ . "/inc/file_manager.inc.php";
$animals = get_data('animals.json');
?>


<head>
    <meta charset="UTF-8">
    <meta author="Fletcher Barry" description="Search Results Page for Pet Sanctuary">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        const animals = <?= json_encode($animals, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>;
    </script>
    <script src="scripts/script.js?v=2" defer></script>
    <title>Search Results</title>
    <link rel="stylesheet" href="styles/style.css?v=2">
</head>

<body>
    <main>
        <h2>Pets Available for Adoption</h2>
        <input type="text" placeholder="Search by name..." id="search-name"></input>
        <label>Filter by type</label>
        <select id="filter-type">
            <option value="ALL">All Types</option>
            <option value="Dog">Dogs</option>
            <option value="Cat">Cats</option>
            <option value="Bird">Birds</option>
            <option value="Fish">Fish</option>
        </select>
        <div id="animal-container">
            <?php
                foreach ($animals as $animal) {
                    echo "<div class=\"animal-card\">";
                    echo "<img src=\"" . htmlspecialchars($animal['image']) . "\" alt=\"Picture of " . htmlspecialchars($animal['name']) . "\">";
                    echo "<h3>" . htmlspecialchars($animal['name']) . "</h3>";
                    echo "<p>Type: " . htmlspecialchars($animal['type']) . "</p>";
                    echo "<p>Breed: " . htmlspecialchars($animal['breed']) . "</p>";
                    echo "<p>Age: " . htmlspecialchars($animal['age']) . "</p>";
                    echo "</div>";
                }
            ?>
        </div>
    </main>
</body>

<?php include 'inc/footer.php'; ?>
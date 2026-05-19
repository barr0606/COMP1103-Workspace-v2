<?php
    require_once "inc/file_manager.inc.php";
    $animals = get_data('animals.json');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta author="Fletcher Barry" description="Happy Paws Animal Shelter Homepage">
    <script src="scripts/main.js" defer></script>
    <title>Happy Paws - Available for Adoption</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <header>
        <h1>
            Happy Paws Animal Shelter
        </h1>
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="adoption.html">Adopt a Pet</a>
            </li>
            <li>
                <a href="application.html">Apply to Adopt</a>
            </li>
            <li>
                <a href="admin.html">Admin Page</a>
            </li>

        </ul>
    </nav>
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
                foreach($animals as $animal) {
                    echo "<div class=\"animal-card\">";
                    echo "<img src=\"" . htmlspecialchars($animal['image']) . "\" alt=\"Picture of " . htmlspecialchars($animal['name']) . "\">";
                }
            ?>
        </div>
    </main>
    <footer>
        <p>
            © 2026 Happy Paws Shelter
        </p>
    </footer>
</body>

</html>
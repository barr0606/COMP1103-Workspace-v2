<?php include 'inc/header.php'; 
require_once __DIR__ . "/inc/file_manager.inc.php";
$animals = get_data('animals.json');
?>

<head>
    <meta charset="UTF-8">
    <meta author="Fletcher Barry" description="Happy Paws Animal Shelter Homepage">
    <script src="scripts/main.js" defer></script>
    <title>Happy Paws - Apply to Adopt</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <main>
        <h2>
            Apply to Adopt
        </h2>
        <div id="error-messages"></div>
        <form method="POST" id="application-form" action="process-application.php">
            <fieldset>
                <legend>Your Details</legend>
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname">
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="you@example.com" required>
                <label for="phone">Telephone:</label>
                <input type="tel" id="phone" name="phone">
            </fieldset>
            <fieldset>
                <legend>Select a Pet</legend>
                <select id="pet-id" name="pet-id">
                    <?php foreach ($animals as $animal) : ?>
                        <option value="<?= htmlspecialchars($animal['id']) ?>">
                            <?= htmlspecialchars($animal['name']) ?> - <?= htmlspecialchars($animal['type']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </fieldset>
            <fieldset>
                <legend>Housing Details</legend>
                <label for="housing">Housing:</label>
                <select id="housing" name="housing">
                    <option value="House">House</option>
                    <option value="Apartment">Apartment</option>
                    <option value="SharedHouse">Shared House</option>
                </select>
                <p>
                    <b>
                        Type of Yard:
                    </b>
                    <br><input type="radio" id="smYard" name="yardType" value="small">Small Yard</input><br>
                    <input type="radio" id="medYard" name="yardType" value="medium">Medium Yard</input><br>
                    <input type="radio" id="lrgYard" name="yardType" value="large">Large Yard</input><br>
                    <label for="message">Previous Pet Experience:</label>
                    <textarea rows="5" id="message" name="message"></textarea>
                </p>
            </fieldset>
            <input type="submit" id="submit" name="submit"></input>
        </form>
    </main>
</body>

<?php include 'inc/footer.php'; ?>
<?php include 'inc/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta author="Fletcher Barry" description="Happy Paws Animal Shelter Homepage">
    <script src="scripts/main.js" defer></script>
    <title>Happy Paws - Apply to Adopt</title>
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
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="adoption.php">Adopt a Pet</a>
            </li>
            <li>
                <a href="application.php">Apply to Adopt</a>
            </li>
            <li>
                <a href="admin.php">Admin Page</a>
            </li>

        </ul>
    </nav>
    <main>
        <h2>
            Apply to Adopt
        </h2>
        <div id="error-messages"></div>
        <form methond="POST" id="application-form">
            <fieldset>
                <legend>Your Details</legend>
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname">
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="you@example.com" required>
                <label for="tel">Telephone:</label>
                <input type="tel" id="tel" name="tel">
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
                    <label for="Previouspetexperience">Previous Pet Experience:</label>
                    <textarea rows="5"></textarea>
                </p>
            </fieldset>
            <input type="submit" id="submit" name="submit"></input>
        </form>
    </main>
    <footer>
        <p>
            © 2026 Happy Paws Shelter
        </p>
    </footer>
</body>

</html>

<?php include 'inc/footer.php'; ?>
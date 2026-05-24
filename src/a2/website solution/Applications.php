<?php
include 'inc/header.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Oliver Munro" description="Applications Page for [Website Name]">
    <title>Applications Page</title>
    <link rel="stylesheet" href="styles/style.css">

    <!-- Link your JS file -->
    <script src="scripts/applications.js" defer></script>
</head>

<body>

<h2>Pet Adoption Application</h2>

<form id="applicationForm" class="application-form">

    <label for="name">Your Name</label>
    <input type="text" id="name" required>

    <label for="email">Your Email</label>
    <input type="email" id="email" required>

    <label for="pet">Pet You Want to Adopt</label>
    <input type="text" id="pet" required>

    <label for="message">Why do you want to adopt this pet?</label>
    <textarea id="message" required></textarea>

    <button type="submit">Submit Application</button>
</form>

<p id="status"></p>

<?php
include 'inc/footer.php';
?>
</body>
</html>

<script>
const params = new URLSearchParams(window.location.search);
if (params.has("animal")) {
    document.getElementById("animalId").value = params.get("animal");
}
</script>


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

    <label for="firstName">First Name</label>
    <input type="text" id="firstName" required>

    <label for="lastName">Last Name</label>
    <input type="text" id="lastName" required>

    <label for="phone">Phone Number</label>
    <input type="tel" id="phone" required>

    <label for="email">Email</label>
    <input type="email" id="email" required>

    <label for="yardSize">Yard Size</label>
    <select id="yardSize" required>
        <option value="">Select...</option>
        <option value="None">No Yard</option>
        <option value="Small">Small Yard</option>
        <option value="Medium">Medium Yard</option>
        <option value="Large">Large Yard</option>
    </select>

    <!-- This will be filled dynamically when user clicks "Apply" -->
    <!--<input type="hidden" id="animalId">-->

    <button type="submit">Submit Application</button>
</form>

<p id="status"></p>


<?php
include 'inc/footer.php';
?>
</body>
</html>

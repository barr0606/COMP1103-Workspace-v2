<?php include 'inc/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta author="Fletcher Barry" description="Happy Paws Animal Shelter Homepage">
    <script src="scripts/main.js" defer></script>
    <title>Happy Paws - Admin</title>
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
            Administration
        </h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Breed</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#">DOG-101</a></td>
                    <td>Luna</td>
                    <td>Dog</td>
                    <td>British Bulldog</td>
                    <td>Adopted</td>
                    <td>Edit</td>
                </tr>
                <tr>
                    <td><a href="#">DOG-102</a></td>
                    <td>Lady</td>
                    <td>Dog</td>
                    <td>Mixed Breed</td>
                    <td>Available</td>
                    <td>Edit</td>
                </tr>
                <tr>
                    <td><a href="#">CAT-101</a></td>
                    <td>Whiskers</td>
                    <td>Cat</td>
                    <td>Siamese</td>
                    <td>Available</td>
                    <td>Edit</td>
                </tr>
                <tr>
                    <td><a href="#">DOG-103</a></td>
                    <td>Max</td>
                    <td>Dog</td>
                    <td>Beagle</td>
                    <td>Adopted</td>
                    <td>Edit</td>
                </tr>
                <tr>
                    <td><a href="#">TUR-101</a></td>
                    <td>Gerald</td>
                    <td>Turtle</td>
                    <td>Easter Long Neck Turtle</td>
                    <td>Pending</td>
                    <td>Edit</td>
                </tr>
            </tbody>
        </table>
    </main>
    <footer>
        <p>
            © 2026 Happy Paws Shelter
        </p>
    </footer>
</body>

</html>

<?php include 'inc/footer.php'; ?>
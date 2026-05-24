<?php
// error messages
$nameErr = "";
$emailErr = "";
$messageErr = "";
$submitted = false;

// check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // check fields are not empty
    if (empty($name)) {
        $nameErr = "Please enter your name";
    }
    if (empty($email)) {
        $emailErr = "Please enter your email";
    } else if (strpos($email, '@') === false || strpos($email, '.') === false) {
        // check email has @ and .
        $emailErr = "Please enter a valid email address";
    }
    if (empty($message)) {
        $messageErr = "Please enter a message";
    }

    // if no errors save to file
    if ($nameErr == "" && $emailErr == "" && $messageErr == "") {
        $data = json_decode(file_get_contents('data/contacts.json'), true);
        $data[] = [
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'date' => date('Y-m-d H:i:s')
        ];
        file_put_contents('data/contacts.json', json_encode($data, JSON_PRETTY_PRINT));
        $submitted = true;
    }
}
?>
<?php include 'inc/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Joshua Hearne" description="Contact Page for [Website Name]">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <main>
        <h1>Contact Us</h1>
        <table style="text-align: center; margin: 0 auto; width: 60%;">
            <tr>
                <td>
                    <p>Have a question or want to get in touch? Reach out to any of our friendly team members
                     that are eager to help with your pawsome questions!
                    </p>
                </td>
            </tr>
        </table>

        <br>

        <!-- team member cards -->
        <div style="display: flex; gap: 24px; flex-wrap: wrap; justify-content: center;">

           <div style="border: 1px solid #ccc; border-radius: 8px; padding: 24px; width: 250px; text-align: center;">
                <img src="imgs/SARAH-504.jpg" alt="Sarah Johnsonstance" style="width: 150px; height: 150px; border-radius: 10px; object-fit: cover; display: block; margin: 0 auto;">
                <h3>Sarah Johnsonstance</h3>
                <p>Animal Care Coordinator</p>
                <p>📞 (04) 2345 6789</p>
                <p>Email: sarahjo@websitename.com</p>
            </div>

           <div style="border: 1px solid #ccc; border-radius: 8px; padding: 24px; width: 250px; text-align: center;">
                <img src="imgs/MARK-501.jpg" alt="Mark Davies" style="width: 150px; height: 150px; border-radius: 10px; object-fit: cover; display: block; margin: 0 auto;">
                <h3>Markyson Davies</h3>
                <p>Adoption Specialist</p>
                <p>📞 (04) 8119 1666</p>
                <p>Email: markda@websitename.com</p>
            </div>

           <div style="border: 1px solid #ccc; border-radius: 8px; padding: 24px; width: 250px; text-align: center;">
                <img src="imgs/EMILY-502.jpg" alt="Emily Chen" style="width: 150px; height: 150px; border-radius: 10px; object-fit: cover; display: block; margin: 0 auto;">
                <h3>Emily Chenise</h3>
                <p>Volunteer Coordinator</p>
                <p>📞 (04) 4567 8901</p>
                <p>Email: emilych@websitename.com</p>
            </div>

        </div>

        <br>

        <!-- contact form -->
        <div style="display: flex; flex-direction: column; align-items: center; text-align: center;">
            <h2>Send us a message</h2>

            <?php if ($submitted == true) { ?>
                <!-- show success message -->
                <p style="color: green;">Message sent!</p>
            <?php } else { ?>

            <form method="POST" action="Contact.php" style="width: 500px; background: white; border: 1px solid #ccc; border-radius: 8px; padding: 32px;">
                <label>Name:</label><br>
                <input type="text" name="name" placeholder="Your name" value="<?php echo $_POST['name'] ?? '' ?>" style="width: 100%; padding: 8px; margin-bottom: 16px; border: 1px solid #ccc; border-radius: 4px;"><br>
                <?php if ($nameErr != "") { ?>
                    <p style="color: red;"><?php echo $nameErr ?></p>
                <?php } ?>

                <label>Email:</label><br>
                <input type="text" name="email" placeholder="Your email" value="<?php echo $_POST['email'] ?? '' ?>" style="width: 100%; padding: 8px; margin-bottom: 16px; border: 1px solid #ccc; border-radius: 4px;"><br>
                <?php if ($emailErr != "") { ?>
                    <p style="color: red;"><?php echo $emailErr ?></p>
                <?php } ?>

                <label>Message:</label><br>
                <textarea name="message" placeholder="Your message" rows="5" style="width: 100%; padding: 8px; margin-bottom: 16px; border: 1px solid #ccc; border-radius: 4px;"><?php echo $_POST['message'] ?? '' ?></textarea><br>
                <?php if ($messageErr != "") { ?>
                    <p style="color: red;"><?php echo $messageErr ?></p>
                <?php } ?>

                <button type="submit">Send</button>
            </form>

            <?php } ?>
        </div>

        <br>
    </main>

<?php include 'inc/footer.php'; ?>
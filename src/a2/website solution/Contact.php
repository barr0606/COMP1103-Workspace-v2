<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('data/contacts.json'), true);
    $data[] = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'message' => $_POST['message'],
        'date' => date('Y-m-d H:i:s')
    ];
    file_put_contents('data/contacts.json', json_encode($data, JSON_PRETTY_PRINT));
}
?>
<?php include 'inc/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <main>
        <h1>Contact Us</h1>
        <table style="text-align: center; margin: 0 auto; width: 60%;">
            <tr>
                <td>
                    <p>Have a question or want to get in touch? Reach out to one of our team members below.<br>
                    We are always happy to help and will get back to you as soon as possible.
                    </p>
                </td>
            </tr>
        </table>

        <br>

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
                <h3>Mark Davies</h3>
                <p>Adoption Specialist</p>
                <p>📞 (04) 8119 1666</p>
                <p>Email: markda@websitename.com</p>
            </div>

           <div style="border: 1px solid #ccc; border-radius: 8px; padding: 24px; width: 250px; text-align: center;">
                <img src="imgs/EMILY-502.jpg" alt="Emily Chen" style="width: 150px; height: 150px; border-radius: 10px; object-fit: cover; display: block; margin: 0 auto;">
                <h3>Emily Chen</h3>
                <p>Volunteer Coordinator</p>
                <p>📞 (04) 4567 8901</p>
                <p>Email: emilych@websitename.com</p>
            </div> 
                <br>
        <div style="display: flex; flex-direction: column; align-items: center; text-align: center;">
            <h2>Send us a message</h2>
            <form method="POST" action="Contact.php" style="width: 500px; background: white; border: 1px solid #ccc; border-radius: 8px; padding: 32px;">
            <label>Name:</label><br>
            <input type="text" name="name" placeholder="Your name" style="width: 100%; padding: 8px; margin-bottom: 16px; border: 1px solid #ccc; border-radius: 4px;"><br>
            <label>Email:</label><br>
            <input type="text" name="email" placeholder="Your email" style="width: 100%; padding: 8px; margin-bottom: 16px; border: 1px solid #ccc; border-radius: 4px;"><br>
            <label>Message:</label><br>
            <textarea name="message" placeholder="Your message" rows="5" style="width: 100%; padding: 8px; margin-bottom: 16px; border: 1px solid #ccc; border-radius: 4px;"></textarea><br>
            <button type="submit">Send</button>
  

            
        </div>
        <br>
    </main>

<?php include 'inc/footer.php'; ?>
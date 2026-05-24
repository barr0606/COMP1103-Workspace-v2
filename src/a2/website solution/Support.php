<?php include 'inc/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Joshua Hearne" description="Support Page for [Website Name]">
    <title>Support</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <main>
        <h1>Support</h1>
        <table style="text-align: center; margin: 0 auto; width: 60%;">
            <tr>
                <td>
                    <p>Need help? Check out our frequently asked questions below or take a look at our support articles for more information.
                    </p>
                </td>
            </tr>
        </table>

        <br>

        <!-- faq dropdowns -->
        <div style="display: flex; flex-direction: column; align-items: center; gap: 12px;">

            <div style="background: white; border: 1px solid #ccc; border-radius: 8px; width: 600px;">
                <button onclick="toggleFaq(this)" style="width: 100%; text-align: left; padding: 16px 24px; background: none; border: none; font-size: 16px; cursor: pointer; font-weight: bold; color: black;">
                    How do I adopt an animal? ▼
                </button>
                <div style="display: none; padding: 0 24px 16px 24px;">
                    <p>Browse our available animals on the adoptions page and fill out an adoption form. One of our team members will get in touch with you within a few days to arrange a meet and greet.</p>
                </div>
            </div>

            <div style="background: white; border: 1px solid #ccc; border-radius: 8px; width: 600px;">
               <button onclick="toggleFaq(this)" style="width: 100%; text-align: left; padding: 16px 24px; background: none; border: none; font-size: 16px; cursor: pointer; font-weight: bold; color: black;">
                    What are your opening hours? ▼
                </button>
                <div style="display: none; padding: 0 24px 16px 24px;">
                    <p>We are open Monday to Friday 9am to 5pm and Saturday 10am to 3pm. We are closed on Sundays and public holidays.</p>
                </div>
            </div>

         

            <div style="background: white; border: 1px solid #ccc; border-radius: 8px; width: 600px;">
               <button onclick="toggleFaq(this)" style="width: 100%; text-align: left; padding: 16px 24px; background: none; border: none; font-size: 16px; cursor: pointer; font-weight: bold; color: black;">
                    Can I surrender an animal? ▼
                </button>
                <div style="display: none; padding: 0 24px 16px 24px;">
                    <p>Yes, we try our best to house surrendered animals but we might not always have avaliability.</p>
                </div>
            </div>

            <div style="background: white; border: 1px solid #ccc; border-radius: 8px; width: 600px;">
                <button onclick="toggleFaq(this)" style="width: 100%; text-align: left; padding: 16px 24px; background: none; border: none; font-size: 16px; cursor: pointer; font-weight: bold; color: black;">
                    How can I donate? ▼
                </button>
                <div style="display: none; padding: 0 24px 16px 24px;">
                    <p>Donations can be made through our website or in person at the shelter. All donations go directly towards the care of our animals. We also accept food, toys and bedding donations.</p>
                </div>
            </div>

        </div>

        <br>

        <!-- support articles -->
        <h2 style="text-align: center;">Support Articles</h2>
        <div style="display: flex; gap: 24px; justify-content: center; flex-wrap: wrap;">

            <div style="background: white; border: 1px solid #ccc; border-radius: 8px; padding: 32px; width: 280px;">
                <h3>Getting Started with Adoption</h3>
                <p>New to the adoption process? This article will explain to you a teach you how to adopt an animal.</p>
            </div>

            <div style="background: white; border: 1px solid #ccc; border-radius: 8px; padding: 32px; width: 280px;">
                <h3>Caring for Your New Pet</h3>
                <p>Adopting an Animal is a very large commitment this article covers how to adapt to the new experience.</p>
            </div>

        </div>

        <br>
    </main>

<script>
// toggle faq open and closed
function toggleFaq(button) {
    const answer = button.nextElementSibling;
    if (answer.style.display == "none") {
        answer.style.display = "block";
        button.innerHTML = button.innerHTML.replace("▼", "▲");
    } else {
        answer.style.display = "none";
        button.innerHTML = button.innerHTML.replace("▲", "▼");
    }
}
</script>

<?php include 'inc/footer.php'; ?>
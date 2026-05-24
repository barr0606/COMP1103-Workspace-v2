<?php include 'inc/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Joshua Hearne" description="Blog Page for [Website Name]">
    <title>Blog</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <main>
        <h1>Blog</h1>
        <div style="text-align: center; margin: 0 auto; width: 60%; background: white; border: 1px solid #ccc; border-radius: 8px; padding: 24px;">
            <p>Welcome to our blog! Here you will find the latest news, tips, and stories from our shelter.<br>
            Check back regularly for new posts.
            </p>
        </div>

        <br>

        <!-- sort dropdown -->
       <div style="position: absolute; top: 300px; left: 20px; background: white; border: 1px solid #ccc; border-radius: 8px; padding: 10px 16px;">
         <label for="sortOrder" style="display: block; margin-bottom: 8px;">Sort by:</label>
         <select id="sortOrder" onchange="sortPosts()" style="padding: 4px 8px; border-radius: 4px; border: 1px solid #ccc;">
           <option value="newest">Newest First</option>
           <option value="oldest">Oldest First</option>
         </select>
        </div>

        <!-- blog posts -->
        <div id="blogPosts" style="display: flex; flex-direction: column; align-items: center; gap: 24px;">

            <div class="blog-post" data-date="2026-01-15" style="background: white; border: 1px solid #ccc; border-radius: 8px; padding: 32px; width: 600px; cursor: pointer; transition: box-shadow 0.2s;"
                onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.15)'"
                onmouseout="this.style.boxShadow='none'">
                <h2>Meet Our Animal of the Month</h2>
                <p style="color: grey; font-size: 14px;">Posted on January 15, 2026</p>
                <p>This month we are shining a spotlight on some of our longest staying residents. 
                    If you count the longest staying by how long they remember living in our shelter Hudson
                    has got to be him. Hes only 3 months old but all of his memories reside in our shelter, is what 
                    urban knowledge would lead you to think but goldfish actually have decent memories that can last up to years
                .</p>
            </div>

            <div class="blog-post" data-date="2026-02-03" style="background: white; border: 1px solid #ccc; border-radius: 8px; padding: 32px; width: 600px; cursor: pointer; transition: box-shadow 0.2s;"
                onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.15)'"
                onmouseout="this.style.boxShadow='none'">
                <h2>Tips for First Time Pet Owners</h2>
                <p style="color: grey; font-size: 14px;">Posted on February 3, 2026</p>
                <p>Bringing a new pet home is an exciting experience,but can be overwhelming and challenging
                    for many new pet parents this blog post will dive into stratergies to cope with and understand
                    your new family member.</p>
            </div>

            <div class="blog-post" data-date="2026-03-10" style="background: white; border: 1px solid #ccc; border-radius: 8px; padding: 32px; width: 600px; cursor: pointer; transition: box-shadow 0.2s;"
                onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.15)'"
                onmouseout="this.style.boxShadow='none'">
                <h2>Success Story —Jeremiah Finds His Forever Home</h2>
                <p style="color: grey; font-size: 14px;">Posted on March 10, 2026</p>
                <p>We are thrilled to share that Jeremiah the 8 year old parakeet has found his forever home.
                    His friends in the shelter mostly being Fiona are sad to see him leave but also glad he's found his family
                </p>
            </div>

            <div class="blog-post" data-date="2026-04-22" style="background: white; border: 1px solid #ccc; border-radius: 8px; padding: 32px; width: 600px; cursor: pointer; transition: box-shadow 0.2s;"
                onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.15)'"
                onmouseout="this.style.boxShadow='none'">
                <h2>How to Prepare Your Home for a New Pet</h2>
                <p style="color: grey; font-size: 14px;">Posted on April 22, 2026</p>
                <p>Before bringing your new pet home, it is important to make sure your place is calm and inviting for them.
                    treat them like you would a new person moving into your home but even more delicate.This blog post will 
                    delve into methods that can help you with this struggle every pet parent experiences.
                </p>
            </div>

        </div>
        <br>
    </main>

<script>
// sort posts by date
function sortPosts() {
    const order = document.getElementById('sortOrder').value;
    const container = document.getElementById('blogPosts');
    const posts = Array.from(container.getElementsByClassName('blog-post'));

    // sort based on data-date attribute
    posts.sort((a, b) => {
        const dateA = new Date(a.getAttribute('data-date'));
        const dateB = new Date(b.getAttribute('data-date'));
        return order === 'newest' ? dateB - dateA : dateA - dateB;
    });

    // re-add posts in new order
    posts.forEach(post => container.appendChild(post));
}
</script>

<?php include 'inc/footer.php'; ?>
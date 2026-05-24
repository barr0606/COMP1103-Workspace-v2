// author Oliver Munro

console.log("applications.js loaded");

document.getElementById("applicationForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const data = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        pet: document.getElementById("pet").value,
        message: document.getElementById("message").value
    };

    fetch("saveApplication.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    })
    .then(res => res.text())
    .then(response => {
        document.getElementById("status").innerText = "Application submitted successfully!";
        document.getElementById("applicationForm").reset();
    });
});

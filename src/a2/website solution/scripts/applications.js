// author Oliver Munro

console.log("applications.js loaded");

document.getElementById("applicationForm").addEventListener("submit", async function(e) {
    e.preventDefault();

    const data = {
        firstName: document.getElementById("firstName").value,
        lastName: document.getElementById("lastName").value,
        phone: document.getElementById("phone").value,
        email: document.getElementById("email").value,
        yardSize: document.getElementById("yardSize").value,
        animalId: document.getElementById("animalId").value,
        submittedAt: new Date().toISOString()
    };

    const response = await fetch("inc/saveApplication.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    });

    if (response.ok) {
        document.getElementById("status").textContent = "Application submitted successfully!";
        document.getElementById("applicationForm").reset();
    } else {
        document.getElementById("status").textContent = "Error submitting application.";
    }
});

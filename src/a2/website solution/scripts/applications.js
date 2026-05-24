// author Oliver Munro

console.log("applications.js loaded");

let animalsData = [];

fetch("data/animals.json")
    .then(res => res.json())
    .then(data => {
        animalsData = data;
        console.log("Animals loaded:", animalsData);
    });


document.getElementById("animalType").addEventListener("change", function () {
    const type = this.value;
    const animalSelect = document.getElementById("animalSelect");

    animalSelect.innerHTML = "";
    animalSelect.disabled = true;

    if (!type) return;

    // Filter animals by type
    const filtered = animalsData.filter(a => a.type === type);

    // Populate dropdown
    filtered.forEach(animal => {
        const option = document.createElement("option");
        option.value = animal.id;
        option.textContent = `${animal.name} (${animal.breed})`;
        animalSelect.appendChild(option);
    });

    animalSelect.disabled = false;
});

document.getElementById("animalSelect").addEventListener("change", function () {
    document.getElementById("animalId").value = this.value;
});


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

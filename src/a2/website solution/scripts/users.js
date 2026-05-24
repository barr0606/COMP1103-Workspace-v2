console.log("users.js loaded");


function validateLogin() {
    const u = document.getElementById("username").value.trim();
    const p = document.getElementById("password").value.trim();


    if (u === "" || p === "") {
        console.log("Validation failed: empty fields");
        
        alert("Please fill in all fields");
        return false;
    }
    console.log("Validation passed");

    return true;

}

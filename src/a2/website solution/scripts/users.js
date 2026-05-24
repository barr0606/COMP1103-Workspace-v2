console.log("users.js loaded");


const u = document.getElementById("username").value.trim();
const p = document.getElementById("password").value.trim();

function validateLogin() {

    if (u === "" || p === "") {
        console.log("Validation failed: empty fields");
        
        alert("Please fill in all fields");
        return false;
    }
    console.log("Validation passed");

    return true;

}

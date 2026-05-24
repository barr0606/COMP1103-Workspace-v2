console.log("users.js loaded");


const u = document.getElementById("username").value.trim();
const p = document.getElementById("password").value.trim();

function validateLogin() {

    if (u === "" || p === "") {
        alert("Please fill in all fields");
        return false;
    }
    return true;

}

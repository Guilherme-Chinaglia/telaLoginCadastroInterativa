import { signup, login } from "./auth.js";

var btnSignin = document.querySelector("#signin");
var btnSignup = document.querySelector("#signup");

var body = document.querySelector("body");


btnSignin.addEventListener("click", function () {
    body.className = "sign-in-js";
});

btnSignup.addEventListener("click", function () {
    body.className = "sign-up-js";
})


document.getElementById("signupForm").addEventListener("submit", async function (e) {
    e.preventDefault();
    const name = document.getElementById("signupName").value;
    const email = document.getElementById("signupEmail").value;
    const password = document.getElementById("signupPassword").value;

    const result = await signup(email, password, name);
    if (result.success) {
        window.location.href = "dashboard.html";
    } else {
        alert(result.error);
    }
});

document.getElementById('loginForm').addEventListener('submit', async function (e) {
    e.preventDefault();
    const email = document.getElementById('loginEmail').value;
    const password = document.getElementById('loginPassword').value;

    const result = await login(email, password);
    if (result.success) {
        window.location.href = "dashboard.html";
    } else {
        alert(result.error);
    }
});
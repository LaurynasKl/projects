import "bootstrap";
console.log("main.js");

const signUpBtn = document.getElementById("signUp");
const signInBtn = document.getElementById("signIn");
const signUpform = document.getElementById("signUpForm");
const signInform = document.getElementById("signInForm");

signUpBtn.addEventListener("click", function() {
    signInform.style.display = "none";
    signUpform.style.display = "block";
});

signInBtn.addEventListener("click", function() {
    signInform.style.display = "block";
    signUpform.style.display = "none";
});
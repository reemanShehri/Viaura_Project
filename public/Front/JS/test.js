let signupButton = document.getElementById("signup");
let loginButton = document.getElementById("login");
let resetPasswordButton = document.querySelector(".forget");
let container = document.getElementById("container");

signupButton.onclick = function () {
    container.className = "active-signup";
};
loginButton.onclick = function () {
    container.className = "close-login";
};
resetPasswordButton.onclick = function (event) {
    event.preventDefault();  // لمنع الرابط من إعادة تحميل الصفحة
    container.className = "active-reset";  // تغيير الـ class أو أي تأثير آخر تريده
  };
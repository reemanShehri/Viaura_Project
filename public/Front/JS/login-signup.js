const signupButton = document.getElementById("signup");
const loginButton = document.getElementById("login");
const container = document.getElementById("container");

signupButton.onclick = function () {
    container.className = "active";
};
loginButton.onclick = function () {
    container.className = "close";
};



AOS.init({
    offset: 120,
    duration: 800,
    easing: 'ease',
    delay: 0,
    once: false,
});


let signUpButton = document.querySelector(".signup button");
let form = document.querySelector(".signup form");
let inputs = form.querySelectorAll(".signup input");
let selection = document.querySelector(".selection");
let loginSignup = document.querySelector(".login-signup");

signUpButton.addEventListener("click", (event) => {
    event.preventDefault();

    // التأكد من امتلاء كل الحقول
    let allFilled = true;
    inputs.forEach((input) => {
        if (input.value.trim() === "") {
            allFilled = false;
        }
    });

    // if (allFilled) {
    //     // إرسال البيانات للقاعدة
    //     const formData = new FormData(form);
    //     fetch("your-server-endpoint", {
    //         method: "POST",
    //         body: formData,
    //     })
    //         .then((response) => {
    //             if (response.ok) {
    //                 // بعد الإرسال، تحديث القيم
    //                 loginSignup.style.left = "-80%";
    //                 selection.style.left = "50%";
    //             } else {
    //                 alert("Failed to sign up.");
    //             }
    //         })
    //         .catch((error) => {
    //             console.error("Error:", error);
    //         });
    // } else {
    //     alert("Please fill all the fields.");
    // }

    // هاد الكود عشان اجرب اذا شغال الزر او لا بس لما تجي تسلمي لابراهيم هتضيف الكود الي فوق و تحذفي الي تحت 
    if (allFilled) {
        // حدثي القيم مباشرة للتجربة
        loginSignup.style.left = "-80%";
        selection.style.left = "50%";
      }
      // لحد هنا احذفي 
});


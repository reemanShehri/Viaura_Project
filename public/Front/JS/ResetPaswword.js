function showStep(step) {
    document.getElementById("step1").style.display = "block";
    document.getElementById("step2").style.display = "none";
    document.getElementById("step3").style.display = "none";

    document.getElementById(step).style.display = "block";
}

function sendCode() {
    let email = document.getElementById("email").value;

    if (!email) {
        alert("Please enter your email!");
        return;
    }

    document.getElementById("userEmail").innerText = email;
};
// إرسال الإيميل للباك (مثال باستخدام fetch)
fetch('/send-code', {
    method: "POST",
    body: JSON.stringify({ email }),
    headers: { "Content-Type": "application/json" }
}).then(response => response.json())
    .then(data => {
        if (data.success) {
            showStep("step2"); // عرض إدخال الكود
        } else {
            alert("Failed to send code!");
        }
    });


function verifyCode() {
    let code = document.getElementById("code").value;
    // التحقق من الكود
    fetch('/verify-code', {
        method: "POST",
        body: JSON.stringify({ code }),
        headers: { "Content-Type": "application/json" }
    }).then(response => response.json())
        .then(data => {
            if (data.success) {
                showStep("step3"); // عرض إدخال كلمة المرور الجديدة
            } else {
                alert("الكود غير صحيح!");
            }
        });
}

function resetPassword() {
    let password = document.getElementById("newPassword").value;
    let confirmPassword = document.getElementById("confirmPassword").value;

    if (password !== confirmPassword) {
        alert("Invalid Code !");
        return;
    }

    // إرسال كلمة المرور الجديدة
    fetch('/reset-password', {
        method: "POST",
        body: JSON.stringify({ password }),
        headers: { "Content-Type": "application/json" }
    }).then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Password set successfully ");
                showStep("step1"); // الرجوع لأول خطوة
            } else {
                alert("Something went wrong!");
            }
        });
}



AOS.init({
    offset: 120,
    duration: 800,
    easing: 'ease',
    delay: 0,
    once: false,
});

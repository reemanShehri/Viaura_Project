/* Splash Screen */
// document.addEventListener("DOMContentLoaded", function() {
//     setTimeout(() => {
//         document.querySelector(".splash").style.opacity = "0";
//         setTimeout(() => {
//             document.querySelector(".splash").style.display = "none";
//             document.querySelector("main").style.display = "block";
//         }, 500); 
//     }, 1000); 
// });




/****Navbar*****/
let links = document.querySelectorAll("a.nav-link");

links.forEach(link => {
  link.addEventListener("click", () => {
    let activeLink = document.querySelector("a.nav-link.active");
    if (activeLink) activeLink.classList.remove("active");
    link.classList.add("active");
  });
});

/***Animation***/
AOS.init({
  offset: 120,
  duration: 500,
  easing: 'ease',
  delay: 0,
  once: false,
});

/****Back top btn****/
let back_top = document.querySelector('.back-top');
window.onscroll = () => {
  console.log(window.pageYOffset);
  if (window.pageYOffset > 100) {
    back_top.classList.add('active')
  }
  else {
    back_top.classList.remove('active')
  }
}
back_top.onclick = () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

/***********Contact*********/

document.getElementById('contactForm').addEventListener('submit', function (e) {
  e.preventDefault();

  // Clear all errors
  const errors = document.querySelectorAll('.error');
  errors.forEach(error => (error.style.display = 'none'));

  let valid = true;

  // Validate name
  const name = document.getElementById('name');
  if (!name.value.trim()) {
    document.getElementById('nameError').style.display = 'block';
    valid = false;
  }

  // Validate email (simple regex)
  const email = document.getElementById('email');
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email.value.trim())) {
    document.getElementById('emailError').style.display = 'block';
    valid = false;
  }

  // Validate phone (allow + and digits, 7-15 length)
  const phone = document.getElementById('phone');
  const phonePattern = /^\+?\d{7,15}$/;
  if (!phonePattern.test(phone.value.trim())) {
    document.getElementById('phoneError').style.display = 'block';
    valid = false;
  }

  // Validate message
  const message = document.getElementById('message');
  if (!message.value.trim()) {
    document.getElementById('messageError').style.display = 'block';
    valid = false;
  }

  if (valid) {
    // Form is valid - submit it
    this.submit();
  }
});



/*******footer*********/
// Footer will only load correctly when running on a local server (e.g., Live Server or deployed site) 

fetch("footer.html")
  .then(response => response.text())
  .then(data => {
    document.getElementById("footer").innerHTML = data;
  });
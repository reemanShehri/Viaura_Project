
  /****Navbar*****/
  let sections = document.querySelectorAll("section");
  let navLinks = document.querySelectorAll("a.nav-link");
  
  window.addEventListener("scroll", () => {
      let scrollPosition = window.scrollY + 100; // تعويض لمسافة الناف بار
  
      let lastLink = navLinks[navLinks.length - 1]; // آخر لينك (Contact)
      let reachedBottom = window.innerHeight + window.scrollY >= document.body.offsetHeight;
  
      if (reachedBottom) {
          navLinks.forEach(link => link.classList.remove("active"));
          lastLink.classList.add("active");
          return; // نخرج من السكرول ونوقف باقي العمليات
      }
  
      sections.forEach(section => {
          if (scrollPosition >= section.offsetTop && scrollPosition < section.offsetTop + section.offsetHeight) {
              let id = section.getAttribute("id");
              navLinks.forEach(link => {
                  link.classList.remove("active");
                  if (link.getAttribute("href") === `#${id}`) {
                      link.classList.add("active");
                  }
              });
          }
      });
  });
  
/***Animation***/
   AOS.init({
    offset: 120, 
    duration: 800, 
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

/*******footer*********/
fetch("footer.html")
    .then(response => response.text())
    .then(data => {
        document.getElementById("footer").innerHTML = data;
    });
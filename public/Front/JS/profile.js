let nav_items = document.querySelectorAll('.nav-link');

nav_items.forEach(nav_item => {
    nav_item.onclick = () => {
        document.querySelector('.nav-link.active').classList.remove('active');
        nav_item.classList.add('active');
    };
});


/*******PopUp********/

let edit = document.querySelector('button.edit-btn');
edit.onclick = () => {
    document.querySelector('.popup').classList.add('show');
}

let close = document.querySelector('button.close');
close.onclick = () =>{
    document.querySelector('.popup').classList.remove('show');

}

/***Animation***/
AOS.init({
    offset: 120,
    duration: 800,
    easing: 'ease',
    delay: 0,
    once: false,
    mirror: true,
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
let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    loginForm.classList.remove('active');
}


let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    searchForm.classList.remove('active');
}


window.onscroll = () =>{
    loginForm.classList.remove('active');
    searchForm.classList.remove('active');
}

let slides = document.querySelectorAll('.home .slides-container .slide');
let index = 0;

function next(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prev(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}

let bio = document.querySelector('.bio');

function bioText() {
    bio.oldText = bio.innerText;
    bio.innerText = bio.innerText.substring(0, 100) + "...";
    bio.innerHTML += "&nbsp;" + `<span onclick='addLength()' id ='see-more-bio'> See More</span>`;
}
bioText();

function addLength() {
    bio.innerHTML = bio.oldText;
    // bio.innerHTML = "&nbsp;" + `<span onclick='bioText()' id ='see-less-bio'> See Less</span>`;
}

$('nav ul li').click(function(){
    $(this).addClass("active").siblings().removeClass('active')
})

const tabBtn = document.querySelectorAll('.nav ul li');

function tabs(panelIndex) {
    
    const tab = document.querySelectorAll('.tab');

    tab.forEach(function(node) {
        node.style.display = 'none';
    });
    tab[panelIndex].style.display = 'block';

}
tabs(0);

$('.post-wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
});
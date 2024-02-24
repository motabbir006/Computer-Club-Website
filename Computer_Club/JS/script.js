//menubar
const bar= document.getElementById('bar');
const nav= document.getElementById('navbar')
const close= document.getElementById('close')
if(bar){
    bar.addEventListener('click',() =>{
nav.classList.add('active');
    })
}
if(close){
    close.addEventListener('click',() =>{
nav.classList.remove('active');
    })
}


//readmore btn
/*const parentContainer =  document.querySelector('.read-more-container');

parentContainer.addEventListener('click', event=>{

    const current = event.target;

    const isReadMoreBtn = current.className.includes('read-more-btn');

    if(!isReadMoreBtn) return;

    const currentText = event.target.parentNode.querySelector('.read-more-text');

    currentText.classList.toggle('read-more-text--show');

    current.textContent = current.textContent.includes('Read More') ? "Read Less..." : "Read More...";

})
*/

//Slider
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n){
    showSlides(slideIndex += n);
}

function currentSlides(n){
    showSlides(slideIndex = n);
}

function showSlides(n){
    var i;
    var slides= document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if(n>slides.length){slideIndex = 1 };
    if(n<1){ slideIndex = slides.length}
    for(i=0; i<slides.length; i++){
        slides[i].style.display ="none";
    }

    for(i =0; i < dots.length; i++){
        dots[i].className = dots[i].className.replace(" active","");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex -1 ].className += " active"
} 


/*
//auto slider
var slideIndex = 0;
showSlides();

function showSlides(){
    var i;
    var slides= document.getElementsByClassName("mySlides");
    for(i=0; i< slides.length; i++){
        slides[i].style.display= "none";
    }
    slideIndex++;
    if(slideIndex>slides.length){
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display= "block";
    setTimeout(showSlides,5000);
}*/
document.addEventListener("DOMContentLoaded", function () {
    window.onscroll = function () {
        scrollFunction();
    };

    // Get references to the buttons
    var feedbackButton = document.querySelector('.feedback-button');
    var userAccountButton = document.querySelector('.user-account-button');

    feedbackButton.addEventListener('click', function () {
        window.location.href = 'feedback.php'; 
    });

    userAccountButton.addEventListener('click', function () {
        window.location.href = 'profile.php'; 
    });
});

function scrollFunction() {
    var feedbackButton = document.querySelector('.feedback-button');
    var userAccountButton = document.querySelector('.user-account-button');

    if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
        feedbackButton.style.display = 'block';
        userAccountButton.style.display = 'block';
    } else {
        feedbackButton.style.display = 'none';
        userAccountButton.style.display = 'none';
    }
}





    let navBar = document.querySelector('#header')

    document.addEventListener('scroll',()=>{
    let scrolltop = window.scrollY

    if(scrolltop > 0){
        navBar.classList.add('rolar')
    } else{
        navBar.classList.remove('rolar')
    }
})

let btnMenuMob = document.querySelector('#btn-menu-mob')
let line1 = document.querySelector('.line-menumob-1')
let line2 = document.querySelector('.line-menumob-2')
let menuMobile = document.querySelector('#menu-mobile')

let body = document.querySelector('body')

btnMenuMob.addEventListener("click",()=>{
    line1.classList.toggle('ativo1')
    line2.classList.toggle('ativo2')
    menuMobile.classList.toggle('abrir')

    body.classList.toggle('no-overflow')
})







const slider = document.querySelectorAll('.slider');

const btnPrev = document.getElementById('prev-button');

const btnNext = document.getElementById('next-button');

let currentSlide = 0;

function hideSlider() {
    slider.forEach(item => item.classList.remove('on'))
}

function showSlider() {
    slider[currentSlide].classList.add('on')
}

function nextSlider() {
    hideSlider()
    if(currentSlide === slider.length -1) {
        currentSlide = 0
    } else {
        currentSlide++
    }
    showSlider()
}

function prevSlider() {
    hideSlider()
    if(currentSlide === 0) {
        currentSlide = slider.length -1
    } else {
        currentSlide--
    }
    showSlider()
}

btnNext.addEventListener('click', nextSlider)
btnPrev.addEventListener('click', prevSlider)

console.log(slider)
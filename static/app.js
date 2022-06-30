
let elementsArray = document.querySelectorAll(".tile");
console.log(elementsArray);
window.addEventListener('scroll', fadeIn ); 
function fadeIn() {
    for (var i = 0; i < elementsArray.length; i++) {
        var elem = elementsArray[i]
        var distInView = elem.getBoundingClientRect().top - window.innerHeight + 20;
        if (distInView < 0) {
            elem.classList.add("inView");
        } else {
            elem.classList.remove("inView");
        }
    }
}
fadeIn();

//typing animation script
var typed = new Typed(".typing", {
  strings: ["Design", "Code",  "Develop"],
  typeSpeed: 100,
  backSpeed: 60,
  loop: true
});


let header = document.getElementById('header');
window.addEventListener('scroll', function(){
  let value = window.scrollY;
  header.style.top = value * 0.35 + 'px';
})

const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar__menu');
const navLogo = document.querySelector('img');
// Display Mobile Menu
const mobileMenu = () => {
  menu.classList.toggle('is-active');
  menuLinks.classList.toggle('active');
};

menu.addEventListener('click', mobileMenu);

// Show active menu when scrolling
const highlightMenu = () => {
  const elem = document.querySelector('.highlight');
  const homeMenu = document.querySelector('#home-page');
  const aboutMenu = document.querySelector('#about-page');
  const servicesMenu = document.querySelector('#services-page');
  const contactMenu = document.querySelector('#contact-page');
  let scrollPos = window.scrollY;
  console.log(scrollPos);

  // adds 'highlight' class to my menu items
  if (window.innerWidth > 960 && scrollPos < 600) {
    homeMenu.classList.add('highlight');
    aboutMenu.classList.remove('highlight');
    return;
  } else if (window.innerWidth > 960 && scrollPos < 1400) {
    aboutMenu.classList.add('highlight');
    homeMenu.classList.remove('highlight');
    servicesMenu.classList.remove('highlight');
    return;
  } else if (window.innerWidth > 960 && scrollPos < 2245) {
    servicesMenu.classList.add('highlight');
    aboutMenu.classList.remove('highlight');
    contactMenu.classList.remove('highlight');
    return;
  } else if (window.innerWidth > 960 && scrollPos < 3000) {
    contactMenu.classList.add('highlight');
    servicesMenu.classList.remove('highlight');
    return;
  }

  if ((elem && window.innerWIdth < 960 && scrollPos < 600) || elem) {
    elem.classList.remove('highlight');
  }
};

window.addEventListener('scroll', highlightMenu);
window.addEventListener('click', highlightMenu);

//  Close mobile Menu when clicking on a menu item
const hideMobileMenu = () => {
  const menuBars = document.querySelector('.is-active');
  if (window.innerWidth <= 1300 && menuBars) {
    menu.classList.toggle('is-active');
    menuLinks.classList.remove('active');
  }
};

menuLinks.addEventListener('click', hideMobileMenu);
navLogo.addEventListener('click', hideMobileMenu);

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (currentScrollPos === 0) {
    document.getElementById("nav").style.background = "none";
  } else if(prevScrollpos < currentScrollPos){
    document.getElementById("nav").style.background = "#000000";
  }else if(prevScrollpos > currentScrollPos){
    document.getElementById("nav").style.background = "#000000";
    
  }
  prevScrollpos = currentScrollPos;
}

window.addEventListener("load", function(){
  document.getElementById("loader").style.display = "none";
  
})

// $(window).on('load',function(){
// 	setTimeout(function(){ // allowing 3 secs to fade out loader
// 	$('.page-loader').fadeOut('slow');
// 	},3500);
// });

// setTimeout(function() {
//   $('body')
//     .removeClass('loading')
//     .addClass('loaded');
// }, 3000);
function showElementAnimation() {

  var element = document.getElementsByClassName('js-animation');
  if(!element) return; 
  
  var showTiming = window.innerHeight > 768 ? 200 : 40; 
  var scrollY = window.pageYOffset;
  var windowH = window.innerHeight;
  
  for(var i=0;i<element.length;i++) { var elemClientRect = element[i].getBoundingClientRect(); var elemY = scrollY + elemClientRect.top; if(scrollY + windowH - showTiming > elemY) {
      element[i].classList.add('is-show');
    } else if(scrollY + windowH < elemY) {
      element[i].classList.remove('is-show');
    }
  }
  }
  showElementAnimation();
  window.addEventListener('scroll', showElementAnimation);

 
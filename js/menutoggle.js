var navMain = document.querySelector('.main-nav');
var navToggle = document.querySelector('.main-nav__toggle');
var statsSection = document.querySelector('.stats');

navMain.classList.remove('main-nav--nojs');

navToggle.addEventListener("click", function(event) {
  event.preventDefault();
    if (navMain.classList.contains('main-nav--closed')){
      navMain.classList.remove('main-nav--closed');
      navMain.classList.add('main-nav--opened');
      statsSection.classList.remove('stats--closed');
      statsSection.classList.add('stats--opened');
      } else {
          navMain.classList.add('main-nav--closed');
          navMain.classList.remove('main-nav--opened');
          statsSection.classList.add('stats--closed');
          statsSection.classList.remove('stats--opened');
        }
  });

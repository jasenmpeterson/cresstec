const Flickity = require('flickity');

const flkty = new Flickity('.staff--carousel', {
  prevNextButtons: false,
  pageDots: false,
  wrapAround: true,
});

const previousButton = document.querySelector('.staff .previous--button');
const nextButton = document.querySelector('.staff .next--button');

previousButton.addEventListener('click', function() {
  flkty.previous();
});

nextButton.addEventListener('click', function() {
  flkty.next();
});

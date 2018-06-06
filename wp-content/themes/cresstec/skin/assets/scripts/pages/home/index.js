import {TweenMax, TimelineMax, Power2} from 'gsap';
import '../../vendors/DrawSVGPlugin';

const ScrollMagic = require('scrollmagic');
require('animation.gsap');
require('debug.addIndicators');

// Hero Animation
function heroAnimation() {
  const headerTimeline = new TimelineMax({id: 'HomeHeaderTimeline'});
  const circleLarge = document.querySelector('.home--page.hero .circle--large');
  const circleSmall = document.querySelector('.home--page.hero .circle--small');
  const circuitA = document.querySelector('.home--page.hero .circuit--a');
  const circuitB = document.querySelector('.home--page.hero .circuit--b');
  const titleBar = document.querySelector('.home--page.hero .title--bar');
  const header = document.querySelector('.home--page.hero h1');
  const segmentedCircle = document.querySelector('.home--page .segmented--circle');

  // Circle Large
  headerTimeline.add(TweenMax.fromTo(circleLarge, 1, {
    scale: 0,
    opacity: 0,
    x: '-200px',
  }, {
    opacity: 1,
    x: 0,
    scale: 1,
    ease: Power2.easeOut,
  }));

  // Circle Small
  headerTimeline.add(TweenMax.fromTo(circleSmall, 1, {
    opacity: 0,
    x: '-200px',
  }, {
    opacity: 0.5,
    x: 0,
    ease: Power2.easeOut,
  }), '-=0.5');

  // Circuit B
  headerTimeline.add(TweenMax.fromTo(circuitB, 1, {
    opacity: 0,
    x: '-400px',
  }, {
    opacity: 1,
    x: 0,
    ease: Power2.easeOut,
  }), '-=0.5');

  // Circuit A
  headerTimeline.add(TweenMax.fromTo(circuitA, 1, {
    opacity: 0,
    x: '-400px',
  }, {
    opacity: 1,
    x: 0,
    ease: Power2.easeOut,
  }), '-=0.6');

  // Title Bar
  headerTimeline.add(TweenMax.fromTo(titleBar, 1, {
    opacity: 0,
    y: '50px',
  }, {
    opacity: 1,
    y: 0,
    ease: Power2.easeOut,
  }), '-=2');

  // Header
  headerTimeline.add(TweenMax.fromTo(header, 1, {
    opacity: 0,
    y: '50px',
  }, {
    opacity: 1,
    y: 0,
    ease: Power2.easeOut,
  }), '-=1.9');

  // Segmented Circle
  headerTimeline.add(TweenMax.fromTo(segmentedCircle, 1, {
    opacity: 0,
    x: '50px',
  }, {
    opacity: 1,
    x: 0,
    ease: Power2.easeOut,
  }), '-=1.5');
}

// About Section Animations
const aboutSectionTimeline = new TimelineMax();
aboutSectionTimeline.pause();
function aboutSectionAnimations() {
  const circuitB = document.querySelector('.home--page.about--section .circuit--b');
  const smallCircuits = document.querySelectorAll('.home--page.about--section .small--circuit');
  const headerOne = document.querySelector('.home--page.about--section .title--bar');
  const headerTwo = document.querySelector('.home--page.about--section .content--wrap .title--bar');
  const paragraphs = document.querySelectorAll('.home--page.about--section .content--wrap p');
  const modules = document.querySelectorAll('.module');
  const moduleIcons = document.querySelectorAll('.module .icon');
  const moduleHeaders = document.querySelectorAll('.module h3');
  const moduleParagraphs = document.querySelectorAll('.module p');

  // Circuit B
  aboutSectionTimeline.add(TweenMax.fromTo(circuitB, 1.5, {
    x: '-200px',
    opacity: 0,
  }, {
    x: 0,
    opacity: 1,
    ease: Power2.easeOut,
  }));

  // Header One
  aboutSectionTimeline.add(TweenMax.fromTo(headerOne, 1.5, {
    x: '-200px',
    opacity: 0,
  }, {
    x: 0,
    opacity: 1,
    ease: Power2.easeOut,
  }), '-=1');

  // Small Circuits
  aboutSectionTimeline.add(TweenMax.staggerFromTo(smallCircuits, 1, {
    y: '50px',
    opacity: 0,
  }, {
    y: 0,
    opacity: 1,
    ease: Power2.easeOut,
  }, 0.5), '-=0.8');

  // Header Two
  aboutSectionTimeline.add(TweenMax.fromTo(headerTwo, 1.5, {
    x: '200px',
    opacity: 0,
  }, {
    x: 0,
    opacity: 1,
    ease: Power2.easeOut,
  }), '-=2');

  // Paragraphs
  aboutSectionTimeline.add(TweenMax.staggerFromTo(paragraphs, 1, {
    x: '50px',
    opacity: 0,
  }, {
    x: 0,
    opacity: 1,
    ease: Power2.easeOut,
  }, 0.5), '-=2.2');

  // Modules
  aboutSectionTimeline.add(TweenMax.staggerFromTo(modules, 1, {
    scale: 0,
    opacity: 0,
  }, {
    scale: 1,
    opacity: 1,
    ease: Power2.easeOut,
  }, 0.2), '-=1.5');

  // Modules Icon
  aboutSectionTimeline.add(TweenMax.staggerFromTo(moduleIcons, 1, {
    y: 50,
    opacity: 0,
  }, {
    y: 0,
    opacity: 1,
    ease: Power2.easeOut,
  }, 0.2), '-=1.2');

  // Modules Paragraphs
  aboutSectionTimeline.add(TweenMax.staggerFromTo(moduleHeaders, 1, {
    y: 50,
    opacity: 0,
  }, {
    y: 0,
    opacity: 1,
    ease: Power2.easeOut,
  }, 0.2), '-=0.8');

  // Modules Paragraphs
  aboutSectionTimeline.add(TweenMax.staggerFromTo(moduleParagraphs, 1, {
    y: 50,
    opacity: 0,
  }, {
    y: 0,
    opacity: 1,
    ease: Power2.easeOut,
  }, 0.2), '-=0.8');

}

// About Section Animations
const productsSectionTimeline = new TimelineMax();
productsSectionTimeline.pause();
function productionsSectionAnimations() {
  const circles = document.querySelectorAll('.products--section .circles circle');
  const circuitBoard = document.querySelector('.products--section .circuit--board');
  const header = document.querySelector('.products--section h1');
  const paragraphs = document.querySelectorAll('.products--section p');
  const button = document.querySelector('.products--section .button');

  // Circles
  productsSectionTimeline.add(TweenMax.staggerFromTo(circles, 0.5, {
    drawSVG: 0,
    strokeOpacity: 0,
    opacity: 0,
  }, {
    drawSVG: '100%',
    opacity: 1,
    strokeOpacity: 1,
    ease: Power2.easeOut,
  }, 0.2));

  // Circuit Board
  productsSectionTimeline.add(TweenMax.fromTo(circuitBoard, 2, {
    y: '200px',
    opacity: 0,
  }, {
    y: 0,
    opacity: 1,
    ease: Power2.easeOut,
  }), '-=3.5');

  // Header
  productsSectionTimeline.add(TweenMax.fromTo(header, 1.5, {
    x: '200px',
    opacity: 0,
  }, {
    x: 0,
    opacity: 1,
    ease: Power2.easeOut,
  }), '-=2.8');

  // Paragraphs
  productsSectionTimeline.add(TweenMax.staggerFromTo(paragraphs, 1, {
    x: '50px',
    opacity: 0,
  }, {
    x: 0,
    opacity: 1,
    ease: Power2.easeOut,
  }, 0.5), '-=2.5');

  // Button
  productsSectionTimeline.add(TweenMax.fromTo(button, 1.5, {
    x: '200px',
    opacity: 0,
  }, {
    x: 0,
    opacity: 1,
    ease: Power2.easeOut,
  }), '-=2.8');

}


if ($('body').hasClass('home')) {

  heroAnimation();
  aboutSectionAnimations();
  productionsSectionAnimations();

  const homeController = new ScrollMagic.Controller();

  // About Section
  let aboutSectionScene = new ScrollMagic.Scene({
    triggerElement: '.home--page.about--section',
    reverse: false,
  }).addTo(homeController).addIndicators()
    .on('enter', function() {
      aboutSectionTimeline.play();
    });

  // Products Section
  let productsSectionScene = new ScrollMagic.Scene({
    triggerElement: '.home--page.products--section',
    reverse: false,
  }).addTo(homeController).addIndicators()
    .on('enter', function() {
      productsSectionTimeline.play();
    });
}

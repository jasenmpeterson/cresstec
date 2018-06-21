import {TweenMax, TimelineMax, Power2} from 'gsap';
import '../../vendors/DrawSVGPlugin';

const ScrollMagic = require('scrollmagic');
require('animation.gsap');
require('debug.addIndicators');

function aboutPageAnimation() {

  const section = document.querySelector('.about--page');
  if (typeof(section) !== 'undefined' && section !== null) {

    // Intro Section

    const aboutPageTimelineIntro = new TimelineMax();
    const aboutPageTimelineIntroHeader = document.querySelector('.about--page.hero h1');
    const aboutPageTimelineIntroParagraph = document.querySelectorAll('.about--page.hero p');
    const aboutPageTimelineIntroHeaderAnimation = TweenMax.to(aboutPageTimelineIntroHeader, 1, {
      opacity: 1,
      y: 0,
      ease: Power2.easeOut,
    });
    const aboutPageTimelineIntroParagraphAnimation = TweenMax.to(aboutPageTimelineIntroParagraph, 1, {
      opacity: 1,
      y: 0,
      ease: Power2.easeOut,
      delay: 0.2,
    });
    aboutPageTimelineIntro.add([aboutPageTimelineIntroHeaderAnimation, aboutPageTimelineIntroParagraphAnimation]);

    const aboutController = new ScrollMagic.Controller();

    let aboutPageIntroScene = new ScrollMagic.Scene({
      triggerElement: '.about--page.hero',
      reverse: false,
    }).addTo(aboutController)
      .on('enter', function() {
        aboutPageTimelineIntro.play();
      });

    // About Section

    const aboutPageTimelineAboutSection = new TimelineMax();
    aboutPageTimelineAboutSection.pause();
    const sixtyYearsCircles = document.querySelectorAll('.sixty--years--circles ellipse');
    const sixtyYearsSegmentedCircle = document.querySelector('.sixty--years--segmented--circle');
    const sixtyYearsText = document.querySelector('.sixty--years--text');
    const aboutSectionParagraph = document.querySelectorAll('.about--page.about p');

    const sixtyYearsCirclesAnimation = TweenMax.staggerTo(sixtyYearsCircles, 1, {
      opacity: 1,
      attr: {
        cy: '-50',
      },
      ease: Power2.easeOut,
    }, '0.2');
    const sixtyYearsSegmentedCircleAnimation = TweenMax.to(sixtyYearsSegmentedCircle, 1, {
      opacity: 1,
      y: 0,
      ease: Power2.easeOut,
    });
    const sixtyYearsTextAnimation = TweenMax.to(sixtyYearsText, 1.3, {
      opacity: 1,
      x: 0,
      ease: Power2.easeOut,
      delay: 0.2,
    });
    const aboutSectionParagraphAnimation = TweenMax.to(aboutSectionParagraph, 1.3, {
      opacity: 1,
      x: 0,
      ease: Power2.easeOut,
      delay: 0.2,
    });

    aboutPageTimelineAboutSection.add([sixtyYearsCirclesAnimation, sixtyYearsSegmentedCircleAnimation, sixtyYearsTextAnimation, aboutSectionParagraphAnimation]);

    let aboutPageAboutSectionScene = new ScrollMagic.Scene({
      triggerElement: '.about--page.about',
      reverse: false,
    }).addTo(aboutController)
      .on('enter', function() {
        aboutPageTimelineAboutSection.play();
      });

    // NWBOC

    const aboutPageTimelineNWBOCSection = new TimelineMax();
    aboutPageTimelineNWBOCSection.pause();
    const nwbocCirclesCircles = document.querySelectorAll('.about--page.nwboc .circles');
    const nwbocCirclesEllipse = document.querySelectorAll('.about--page.nwboc ellipse');
    const nwbocImage = document.querySelector('.nwboc--image');
    const nwbocGradient = document.querySelector('.nwboc .gradient--background');
    const nwbocModule = document.querySelector('.nwboc .module');
    const nwbocModuleIcon = document.querySelector('.nwboc .module .cresstec--icon');
    const nwbocModuleParagraph = document.querySelector('.nwboc .module p');

    const nwbocCirclesAnimation = TweenMax.staggerTo(nwbocCirclesCircles, 1, {
      y: 0,
      ease: Power2.easeOut,
    }, '0.5');

    const nwbocCirclesEllipseAnimation = TweenMax.staggerTo(nwbocCirclesEllipse, 1, {
      opacity: 1,
      ease: Power2.easeOut,
    }, '0.5');

    const nwbocImageAnimation = TweenMax.to(nwbocImage, 1.5, {
      y: 0,
      opacity: 1,
      ease: Power2.easeOut,
    });

    const nwbocGradientAnimation = TweenMax.to(nwbocGradient, 1, {
      x: 0,
      opacity: 1,
      delay: 0.5,
      ease: Power2.easeOut,
    });

    const nwbocModuleAnimation = TweenMax.to(nwbocModule, 1, {
      x: 0,
      opacity: 1,
      delay: 1,
      ease: Power2.easeOut,
    });

    const nwbocModuleIconAnimation = TweenMax.to(nwbocModuleIcon, 1, {
      scale: 1,
      opacity: 1,
      delay: 1.2,
      ease: Power2.easeOut,
    });

    const nwbocModuleParagraphAnimation = TweenMax.to(nwbocModuleParagraph, 1, {
      x: 0,
      opacity: 1,
      delay: 1.4,
      ease: Power2.easeOut,
    });

    aboutPageTimelineNWBOCSection.add([
      nwbocCirclesAnimation,
      nwbocImageAnimation,
      nwbocCirclesEllipseAnimation,
      nwbocGradientAnimation,
      nwbocModuleAnimation,
      nwbocModuleIconAnimation,
      nwbocModuleParagraphAnimation,
    ]);

    let aboutPageNWBOCScene = new ScrollMagic.Scene({
      triggerElement: '.about--page.nwboc',
      reverse: false,
    }).addTo(aboutController)
      .on('enter', function() {
        aboutPageTimelineNWBOCSection.play();
      });

    // Staff
    const aboutPageTimelineStaffSection = new TimelineMax();
    aboutPageTimelineStaffSection.pause().timeScale(1.2);
    const staffSegmentedCircle = document.querySelector('.about--page.staff .segmented--circle.one');
    const staffImage = document.querySelector('.about--page.staff .image--one');
    const staffHeader = document.querySelector('.about--page.staff h1.one');
    const staffHeaderThree = document.querySelector('.about--page.staff h3.one');
    const staffParagraph = document.querySelector('.about--page.staff p.one');
    const staffSegmentedCircleAnimation = TweenMax.to(staffSegmentedCircle, 1, {
      x: 0,
      opacity: 1,
      ease: Power2.easeOut,
    });
    const staffImageAnimation = TweenMax.to(staffImage, 1, {
      x: 0,
      opacity: 1,
      delay: 0.5,
      ease: Power2.easeOut,
    });
    const staffHeaderAnimation = TweenMax.to(staffHeader, 1, {
      y: 0,
      opacity: 1,
      delay: 0.5,
      ease: Power2.easeOut,
    });
    const staffHeaderThreeAnimation = TweenMax.to(staffHeaderThree, 1, {
      y: 0,
      opacity: 1,
      delay: 0.8,
      ease: Power2.easeOut,
    });
    const staffParagraphAnimation = TweenMax.to(staffParagraph, 1, {
      y: 0,
      opacity: 1,
      delay: 1.2,
      ease: Power2.easeOut,
    });

    aboutPageTimelineStaffSection.add([
      staffSegmentedCircleAnimation,
      staffImageAnimation,
      staffHeaderAnimation,
      staffHeaderThreeAnimation,
      staffParagraphAnimation
    ]);

    let aboutPageStaffScene = new ScrollMagic.Scene({
      triggerElement: '.about--page.staff',
      reverse: false,
    }).addTo(aboutController)
      .on('enter', function() {
        aboutPageTimelineStaffSection.play();
      });

  }
}

aboutPageAnimation();

function flkty() {
  const section = document.querySelector('.staff--carousel');
  if (typeof(section) !== 'undefined' && section !== null) {
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
  }
}
flkty();

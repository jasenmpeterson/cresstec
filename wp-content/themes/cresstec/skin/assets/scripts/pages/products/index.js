import {TweenMax, TimelineMax, Power2, Elastic} from 'gsap';

const ScrollMagic = require('scrollmagic');

function productsPageAnimation() {
  const section = document.querySelector('.products--search');
  if (typeof(section) !== 'undefined' && section !== null) {

    const productPageTimeline = new TimelineMax();
    const productPageIcon = document.querySelector('.search--icon--wrap');
    const productPageHeader = document.querySelector('h2');
    const productPageParagraph = document.querySelectorAll('p');
    const productPageSpanInput = document.querySelectorAll('.screen-reader-text span');
    const productPageSpanCategories = document.querySelectorAll('.product--children span');
    const productPageSearchInput = document.querySelectorAll('.search--input');
    const productPageCategoryButtons = document.querySelectorAll('.product--children .button');
    const productPageIconAnimation = TweenMax.to(productPageIcon, 0.5, {
      opacity: 1,
      scale: 1,
      ease: Power2.easeOut,
    });
    const productPageHeaderAnimation = TweenMax.to(productPageHeader, 1, {
      opacity: 1,
      y: 0,
      delay: 0.2,
      ease: Power2.easeOut,
    });
    const productPagePargraphAnimation = TweenMax.to(productPageParagraph, 1, {
      opacity: 1,
      y: 0,
      delay: 0.5,
      ease: Power2.easeOut,
    });
    const productPageSpanAnimation = TweenMax.staggerTo(productPageSpanInput, 2, {
      opacity: 1,
      y: 0,
      delay: 0.8,
      ease: Elastic.easeOut,
    }, 0.2);
    const productPageSearchInputAnimation = TweenMax.to(productPageSearchInput, 3, {
      opacity: 1,
      y: 0,
      delay: 1.2,
      ease: Elastic.easeOut,
    });
    const productPageSpanCategoriesAnimation = TweenMax.staggerTo(productPageSpanCategories, 2, {
      opacity: 1,
      y: 0,
      delay: 1.5,
      ease: Elastic.easeOut,
    }, 0.2);
    const productPageButtonAnimations = TweenMax.staggerTo(productPageCategoryButtons, 1.5, {
      opacity: 1,
      x: 0,
      delay: 1.5,
      ease: Power2.easeOut,
    }, 0.2);

    productPageTimeline.add([
      productPageIconAnimation,
      productPageHeaderAnimation,
      productPagePargraphAnimation,
      productPageSpanAnimation,
      productPageSearchInputAnimation,
      productPageSpanCategoriesAnimation,
      productPageButtonAnimations,
    ]);

  }
}
productsPageAnimation();

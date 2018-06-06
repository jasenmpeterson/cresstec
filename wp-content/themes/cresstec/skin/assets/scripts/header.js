$(window).scroll(function() {
  const scroll = $(window).scrollTop();
  if (scroll >= 200) {
    $('.header').addClass('scrolled');
  } else {
    $('.header').removeClass('scrolled');
  }
});

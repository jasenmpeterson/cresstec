$(function() {
  const mobileMenuButton = $('.mobile--menu--button');
  const menuWrap = $('.mobile--menu--wrap');
  mobileMenuButton.click(function() {
    menuWrap.toggleClass('active');
  });
});

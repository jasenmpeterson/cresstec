$(function() {
  const trigger = $('.request--a--quote--button .button');
  const form = $('.request--a--quote--button .quote--form');
  trigger.click(function() {
    $(this).toggleClass('active');
    $(form).toggleClass('active');
  });
});

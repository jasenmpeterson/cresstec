$(function() {
  const trigger = $('.collapsible-trigger');
  trigger.click(function() {
    $(this).toggleClass('active-collapsible-trigger');
    const activeCollapsible = $(this).find('.collapsible-menu');
    activeCollapsible.toggleClass('active');
  });
});

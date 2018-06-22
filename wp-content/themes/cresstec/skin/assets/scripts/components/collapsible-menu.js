
$(function() {
  const trigger = $('.collapsible-trigger');
  if (typeof(trigger) !== 'undefined' && trigger !== null) {
    trigger.click(function() {
      $(this).toggleClass('active-collapsible-trigger');
      const activeCollapsible = $(this).find('.collapsible-menu');
      activeCollapsible.toggleClass('active');
    });
  }
});

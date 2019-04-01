jQuery(document).ready(function(){


jQuery('.Show').click(function() {
    jQuery('#target').show(800);
    jQuery('.Show').hide(0);
    jQuery('.Hide').show(0);
  });
  jQuery('.Hide').click(function() {
    jQuery('#target').hide(800);
    jQuery('.Show').show(0);
    jQuery('.Hide').hide(0);
  });


});

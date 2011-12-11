$(document).ready(function() {
  $('#pocatello').click(function() {
    $('#pocatello ul').show('fast', function() {
      // Animation complete.
    });
  });
  $('#idahoFalls').click(function() {
    $('#idahoFalls ul').show('fast', function() {
      // Animation complete.
    });
  });
  $('#twinFalls').click(function() {
    $('#twinFalls ul').show('fast', function() {
      // Animation complete.
    });
  });
  $('.nav').mouseleave(function() {
    $('.nav ul').fadeOut("fast");
  });
});
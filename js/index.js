$(document).ready(function() {
  $('#pocatello').click(function() {
    $('#pocatello ul').show('fast', function() {
      // Animation complete.
      return false
    });
  });
  $('#idahoFalls').click(function() {
    $('#idahoFalls ul').show('fast', function() {
      // Animation complete.
      return false
    });
  });
  $('#twinFalls').click(function() {
    $('#twinFalls ul').show('fast', function() {
      // Animation complete.
      return false
    });
  });
  $('#rexburg').click(function() {
    $('#rexburg ul').show('fast', function() {
      // Animation complete.
      return false
    });
  });
  $('#burley').click(function() {
    $('#burley ul').show('fast', function() {
      // Animation complete.
      return false
    });
  });
  $('.nav').mouseleave(function() {
    $('.nav ul').fadeOut("fast");
  });
});
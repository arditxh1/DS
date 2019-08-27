$(function() {
  $('a').hover(function() {
    $('#b').css('background-color', 'yellow');
  }, function() {
    // on mouseout, reset the background colour
    $('#b').css('background-color', '');
  });
});
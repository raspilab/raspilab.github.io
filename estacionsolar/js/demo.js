/**
 * Particleground demo
 * @author Jonathan Nicol - @mrjnicol
 */

document.addEventListener('DOMContentLoaded', function () {
  particleground(document.getElementById('particles'), {
    dotColor: '#000',
    lineColor: '#000'
  });
  var home = document.getElementById('particles');
  var intro = document.getElementById('intro');
  intro.style.marginTop = - home.offsetHeight / 2 + 'px';
}, false);


/*
// jQuery plugin example:
$(document).ready(function() {
  $('#particles').particleground({
    dotColor: '#000',
    lineColor: '#000'
  });
  $('.intro').css({
    'margin-top': -($('.intro').height() / 2)
  });
});
*/
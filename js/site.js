$(document).ready(function() {
  $(".fitvids").fitVids({ customSelector: "iframe[src*='fast.wistia.net']"});
  $("#giga").fitText(0.6);

  var date  = new Date(Date.UTC(2014, 0, 13, 12, 0, 0));
  var now   = new Date();
  var diff  = date.getTime()/1000 - now.getTime()/1000;

  var clock = $('.countdown-js').FlipClock(diff, {
      clockFace: 'DailyCounter',
      countdown: true
    });

  $('.countdown-js').on("click", "a", function(event) { 
    event.preventDefault();
  });
});
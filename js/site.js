$(document).ready(function() {
  $(".fitvids").fitVids();
  $("#giga").fitText(0.5);

  var date  = new Date(Date.UTC(2014, 0, 13, 12, 0, 0));
  var now   = new Date();
  var diff  = date.getTime()/1000 - now.getTime()/1000;

  var clock = $('.countdown').FlipClock(diff, {
      clockFace: 'DailyCounter',
      countdown: true
    });
});
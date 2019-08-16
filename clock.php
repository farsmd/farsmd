<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <script src="jquery-3.4.1.min.js"></script>
    <meta charset="utf-8">
    <title>PercentClock</title>
    <script type="text/javascript">
            // 24 hour clock
    setInterval(function() {
      var currentTime = new Date();
      var hours = currentTime.getHours();
      var minutes = currentTime.getMinutes();
      var seconds = currentTime.getSeconds();
      // Add leading zeros
      pr1 = hours * 4.6666666666666666666666666666667;
      pr2 = minutes /3*5;
      pr3 = seconds /3*5;
      pr11 = Math.round(pr1*10000)/10000;
      pr12 = Math.round(pr2*100)/10000;
      pr13 = Math.round(pr3*10)/100000;
      pr = pr11 + pr12 +pr13 ;
      pr = Math.round(pr*10000)/10000;
      // Compose the string for display
      $(".clock1").html(pr);
      $(".clock2").html(pr11);
      $(".clock3").html(pr12);
      $(".clock4").html(pr13);
      $(".clock5").html(pr0);
});
// Enter num from and to
$({countNum: $('#counter').text()}).animate({countNum + 5}, {
  duration: 5000/3,
  easing:'linear',
  step: function() {
    $('#counter').text(Math.floor(this.countNum));
  },
  complete: function() {
    $('#counter').text(this.countNum);
  }
});
  </script>
  <style>
  #ck{
    text-align: center;
  }
  </style>
  </head>
  <body>
    <div id="ck" class="clock1"></div></br>
    <div id="ck" class="clock2"></div></br>
    <div id="ck" class="clock3"></div></br>
    <div id="ck" class="clock4"></div></br>
    <div id="ck" class="clock5"></div></br>
    <div id="counter">1</div>
  </body>
</html>

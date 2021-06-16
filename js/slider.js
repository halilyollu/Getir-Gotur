window.onload = function() {
    slide();
}
function slide() {
    var num = 0, order = 0; slides = document.getElementById('slider').children;
    window.setInterval(function () {
      for (i=0; i<slides.length; i++) {
        slides[i].className = "";
      }
      if (order == 0) {
        num = (num + 1) % 4;
        order = ( num == 3 ? 1 : 0 );
      }
      else if (order == 1) {
        num = (num - 1) % 4;
        order = ( num == 0 ? 0 : 1 );
      }
      slides[num].className = "active";
    }, 3000);
}
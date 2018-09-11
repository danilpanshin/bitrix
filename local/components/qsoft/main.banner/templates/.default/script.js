$(document).ready(function () {
  if (($(".bxslider li").length > 1)) {
    var slider = $('.bxslider').bxSlider({
      auto: true,
      pause: 3000,
      onSlideAfter: function () {
        slider.stopAuto();
        slider.startAuto();
      }
    });
  }
})

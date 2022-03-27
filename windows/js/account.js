$(document).ready(function() {
    function checkWidth() {
      var windowWidth = $('body').innerWidth(),
          elem = $(".fullname");
          elemTwo = $(".fullname-text");
          elemThree = $(".date");
          elemFour = $(".date-text");
          elemFive = $(".institut");
          elemSix = $(".institut-text");
          elemSeven = $(".college");
          elemEight = $(".college-text");
          elemNine = $(".avatar-class");

      if(windowWidth < 1170){
        elem.addClass('text-center');
        elemTwo.addClass('mx-auto text-center');
        elemThree.addClass('text-center');
        elemFour.addClass('mx-auto text-center');
        elemFive.addClass('text-center');
        elemSix.addClass('mx-auto text-center');
        elemSeven.addClass('text-center');
        elemEight.addClass('mx-auto text-center');
        elemNine.addClass('mx-auto d-block');
      }
      else{
        elem.removeClass('text-center');
        elemTwo.removeClass('mx-auto text-center');
        elemThree.removeClass('text-center');
        elemFour.removeClass('mx-auto text-center');
        elemFive.removeClass('text-center');
        elemSix.removeClass('mx-auto text-center');
        elemSeven.removeClass('text-center');
        elemEight.removeClass('mx-auto text-center');
        elemNine.removeClass('mx-auto d-block');
      }
    }
  
    checkWidth(); 
  
    $(window).resize(function(){
      checkWidth();
    });
  });
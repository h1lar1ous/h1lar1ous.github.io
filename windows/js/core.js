let collapse = document.querySelector('.navbar-collapse');
let toggler = document.querySelector('.navbar-toggler');

toggler.onclick = () => {

}

$(document).ready(function() {
    function checkWidth() {
      var windowWidth = $('body').innerWidth(),
          elem = $(".container-fluid")
          elemTwo = $(".main");

      if(windowWidth > 992){
        elem.removeClass('mobile');
        elemTwo.removeClass('mobile-main');
      }
      else{
        elem.addClass('mobile');
      }
    }
  
    checkWidth(); 
  
    $(window).resize(function(){
      checkWidth();
    });
  });


$(document).ready(function() {
    function checkWidth() {
      var windowWidth = $('body').innerWidth(),
          elem = $(".register-btn");
          elemTwo = $(".login-btn");

      if(windowWidth < 992){
        elem.addClass('mx-auto d-block');
        elemTwo.addClass('mx-auto d-block');
      }
      else{
        elem.removeClass('mx-auto d-block');
        elemTwo.removeClass('mx-auto d-block');
      }
    }
  
    checkWidth(); 
  
    $(window).resize(function(){
      checkWidth();
    });
  });




$(document).ready(function() {
  function checkWidth() {
    var windowWidth = $('body').innerWidth(),
        elem = $(".first-info")
        elemTwo = $(".second-info");
        elemThree = $(".third-info");

    if(windowWidth < 1201){
      elem.addClass('mx-auto d-block');
      elemTwo.addClass('mx-auto d-block');
      elemThree.addClass('mx-auto d-block');
    }
    else{
      elem.removeClass('mx-auto d-block');
      elemTwo.removeClass('mx-auto d-block');
      elemThree.removeClass('mx-auto d-block');
    }
  }

  checkWidth(); 

  $(window).resize(function(){
    checkWidth();
  });
});


$(".contacts").on('click', '[href*="#contacts-anchor"]', function(e){
  var fixed_offset = 100;
  $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 4000);
  e.preventDefault();
});



$(document).ready(function() {
  function checkWidth() {
    var windowWidth = $('body').innerWidth(),
        elem = $(".soc-buttons")

    if(windowWidth < 1221){
      elem.removeClass('me-auto');
    }
    else {
      elem.addClass('me-auto');
    }
  }

  checkWidth(); 

  $(window).resize(function(){
    checkWidth();
  });
});
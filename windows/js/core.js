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
          elem = $(".line-one");

      if(windowWidth < 684){
        elem.addClass('mx-auto d-block');
      }
      else{
        elem.removeClass('mx-auto d-block');
      }
    }
  
    checkWidth(); 
  
    $(window).resize(function(){
      checkWidth();
    });
});

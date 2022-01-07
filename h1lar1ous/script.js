$(document).ready(function() {
    function checkWidth() {
      var windowWidth = $('body').innerWidth(),
          elem = $(".devices"); // лучше сохранять объект в переменную, многократно чтобы не насиловать 
                                      // страницу для поиска нужного элемента
      if(windowWidth < 861){
        elem.addClass('mx-auto d-block');
      }
      else{
        elem.removeClass('mx-auto d-block');
      }
    }
  
    checkWidth(); // проверит при загрузке страницы
  
    $(window).resize(function(){
      checkWidth(); // проверит при изменении размера окна клиента
    });
  });

  $(document).ready(function() {
    function checkWidth() {
      var windowWidth = $('body').innerWidth(),
          elem = $(".mobile-arrow"); // лучше сохранять объект в переменную, многократно чтобы не насиловать 
                                      // страницу для поиска нужного элемента
      if(windowWidth < 861){
        elem.addClass('mx-auto d-block');
      }
      else{
        elem.removeClass('mx-auto d-block');
      }
    }
  
    checkWidth(); // проверит при загрузке страницы
  
    $(window).resize(function(){
      checkWidth(); // проверит при изменении размера окна клиента
    });
  });


  $(document).ready(function() {
    function checkWidth() {
      var windowWidth = $('body').innerWidth(),
          elem = $(".check-boxes"); // лучше сохранять объект в переменную, многократно чтобы не насиловать 
                                      // страницу для поиска нужного элемента
      if(windowWidth < 1199){
        elem.addClass('mx-auto d-block');
      }
      else{
        elem.removeClass('mx-auto d-block');
      }
    }
  
    checkWidth(); // проверит при загрузке страницы
  
    $(window).resize(function(){
      checkWidth(); // проверит при изменении размера окна клиента
    });
  });



  $(document).ready(function() {
    function checkWidth() {
      var windowWidth = $('body').innerWidth(),
          elem = $(".in-develop-2"); // лучше сохранять объект в переменную, многократно чтобы не насиловать 
                                      // страницу для поиска нужного элемента
      if(windowWidth < 812){
        elem.addClass('mx-auto d-block');
      }
      else{
        elem.removeClass('mx-auto d-block');
      }
    }
  
    checkWidth(); // проверит при загрузке страницы
  
    $(window).resize(function(){
      checkWidth(); // проверит при изменении размера окна клиента
    });
  });

  




  $(document).ready(function() {
    function checkWidth() {
      var windowWidth = $('body').innerWidth(),
          elem = $(".homeboys"); // лучше сохранять объект в переменную, многократно чтобы не насиловать 
                                      // страницу для поиска нужного элемента
      if(windowWidth < 534){
        elem.addClass('mx-auto d-block');
      }
      else{
        elem.removeClass('mx-auto d-block');
      }
    }
  
    checkWidth(); // проверит при загрузке страницы
  
    $(window).resize(function(){
      checkWidth(); // проверит при изменении размера окна клиента
    });
  });


function develop() {
    alert('В разработке!');
}
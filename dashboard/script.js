$(document).ready(function() {
    function checkWidth() {
      var windowWidth = $('body').innerWidth(),
          elem = $(".nav-item");
          elemTwo = $(".btn-outline-success") // лучше сохранять объект в переменную, многократно чтобы не насиловать 
                                      // страницу для поиска нужного элемента
      if(windowWidth < 992){
        elem.addClass('ms-auto');
        elemTwo.addClass('ms-auto');
      }
      else{
        elem.removeClass('ms-auto');
        elemTwo.removeClass('ms-auto');
      }
    }
  
    checkWidth(); // проверит при загрузке страницы
  
    $(window).resize(function(){
      checkWidth(); // проверит при изменении размера окна клиента
    });
  });


let date = new Date('Feb 3 2022 15:00:00');

function timer() {
  let now = new Date();
  gap = date - now;
  console.log(gap);

  let hours = Math.floor(gap / 1000 / 60 / 60) % 24;
  let minutes = Math.floor(gap / 1000 / 60) % 60;
  let seconds = Math.floor(gap / 1000) % 60;
  console.log(hours);

  document.querySelector('.hours').textContent = hours + 'H';
  document.querySelector('.minutes').textContent = minutes + 'M';
  document.querySelector('.seconds').textContent = seconds + 'S';
}

timer();

setInterval(timer, 1000);


$(document).ready(function() {
  function checkWidth() {
    var windowWidth = $('body').innerWidth(),
        elem = $(".pers");
        elemTwo = $('.explore-btn');
        elemThree = $('.connect-btn');
        
    if(windowWidth < 991){
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

  checkWidth(); // проверит при загрузке страницы

  $(window).resize(function(){
    checkWidth(); // проверит при изменении размера окна клиента
  });
});

$(document).ready(function() {
  function checkWidth() {
    var windowWidth = $('body').innerWidth(),
        elem = $(".bid-btn");
        
    if(windowWidth < 418){
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
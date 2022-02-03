$(document).ready(function() {
    function checkWidth() {
      var windowWidth = $('body').innerWidth(),
          elem = $(".nav-item");
          elemTwo = $('.cart-btn');
          elemThree = $('.search-btn');
          elemFour = $('.camera-body');
          elemFifth = $('.buy-btn');

      if(windowWidth < 992){
        elem.addClass('ms-auto');
        elemTwo.addClass('ms-auto');
        elemThree.addClass('me-auto');
        elemFour.addClass('mx-auto');
        elemFifth.addClass('d-block mx-auto');
      }
      else{
        elem.removeClass('ms-auto');
        elemTwo.removeClass('ms-auto');
        elemThree.removeClass('me-auto');
        elemFour.removeClass('mx-auto');
        elemFifth.removeClass('d-block mx-auto');
      }
    }
  
    checkWidth(); 
  
    $(window).resize(function(){
      checkWidth();
    });
  });


let firstView = document.querySelector('.camera-first-view');
let secondView = document.querySelector('.camera-second-view');
let thirdView = document.querySelector('.camera-third-view');

let cameraOne = document.querySelector('.camera-one');
let cameraTwo = document.querySelector('.camera-two');
let cameraThree = document.querySelector('.camera-three');

let cameraBody = document.querySelector('.camera-body');

function secondViewChange() {
    firstView.classList.remove('selected');
    thirdView.classList.remove('selected');
    secondView.classList.add('selected');

    cameraBody.classList.remove('camera-one');
    cameraBody.classList.remove('camera-three');
    cameraBody.classList.add('camera-two');
}

secondView.onclick = secondViewChange;


function firstViewChange() {
  secondView.classList.remove('selected');
  thirdView.classList.remove('selected');
  firstView.classList.add('selected');

  cameraBody.classList.remove('camera-two');
  cameraBody.classList.remove('camera-three');
  cameraBody.classList.add('camera-one');
}

firstView.onclick = firstViewChange;


function thirdViewChange() {
  secondView.classList.remove('selected');
  firstView.classList.remove('selected');
  thirdView.classList.add('selected');

  cameraBody.classList.remove('camera-one');
  cameraBody.classList.remove('camera-two');
  cameraBody.classList.add('camera-three');
}

thirdView.onclick = thirdViewChange;

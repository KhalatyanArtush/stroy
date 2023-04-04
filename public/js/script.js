$(document).ready(function(){
    $(window).scroll(function() {
        if ($(this).scrollTop()>100)
        {
        $('#header').fadeOut();
        }
        else
        {
        $('#header').fadeIn();
        }
    });
    $(window).scroll(function() {
        clearTimeout($.data(this, 'scrollTimer'));
        $.data(this, 'scrollTimer', setTimeout(function() {
        $('#header').fadeIn();
        }, 250));
    });

    $(".next_releases_btn").click(function(){
        $(".releases_section_albom:first").hide("low");
     });


});



// menu open close
function menuOpen(){
    setTimeout(function(){
      document.getElementById("menu_burger").classList.add("menu_burger_active")
      document.getElementById("body").classList.add("overflow")
   },10);
  };
  function menuClose(){
    document.getElementById("menu_burger").classList.remove("menu_burger_active")
    document.getElementById("body").classList.remove("overflow")
  };




//
//
// var timeOut = 0;
// var slideIndex = 0;
// var autoOn = true;
//
// var prevArrow = document.querySelector('.prev');
// var showArrow = document.querySelector('.next');
//
// autoSlides();
//
// function autoSlides() {
//     timeOut = timeOut - 20;
//     if (autoOn == true && timeOut < 0) {
//         showSlides();
//     }
//     setTimeout(autoSlides, 20);
// }
//
// function prevSlide() {
//
//     timeOut = 5000;
//
//     var slides = document.querySelectorAll(".slide");
//
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     slideIndex--;
//
//     if (slideIndex > slides.length) {
//         slideIndex = 1
//     }
//     if (slideIndex == 0) {
//         slideIndex = 3
//     }
//     slides[slideIndex - 1].style.display = "block";
// }
//
// function showSlides() {
//
//     timeOut = 5000;
//
//     var slides = document.querySelectorAll(".slide");
//
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     slideIndex++;
//
//     if (slideIndex > slides.length) {
//         slideIndex = 1
//     }
//     slides[slideIndex - 1].style.display = "block";
// }
//
// prevArrow.addEventListener('click', ()=> {
//     prevSlide();
// })
//
// showArrow.addEventListener('click', ()=> {
//     showSlides();
// })


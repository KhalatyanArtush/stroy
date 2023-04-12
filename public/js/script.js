// $(document).ready(function(){
//     $(window).scroll(function() {
//         if ($(this).scrollTop()>100)
//         {
//         $('#header').fadeOut();
//         }
//         else
//         {
//         $('#header').fadeIn();
//         }
//     });
//     $(window).scroll(function() {
//         clearTimeout($.data(this, 'scrollTimer'));
//         $.data(this, 'scrollTimer', setTimeout(function() {
//         $('#header').fadeIn();
//         }, 250));
//     });
//
//     $(".next_releases_btn").click(function(){
//         $(".releases_section_albom:first").hide("low");
//      });
//
//
// });



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


document.addEventListener("DOMContentLoaded", function() {
    var elements = document.getElementsByTagName("INPUT");
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    for (var i = 0; i < elements.length; i++) {
        // console.log(elements['email']);
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("Это обязательное поле");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
})



function myFunction() {
    $('.comments').css('display','block');
    $('#make-comment').css('display','none');
}

// $( "#make-comment" ).click(function() {
//     $('.comments').css('display','block');
//     $('#make-comment').css('display','none');
// });

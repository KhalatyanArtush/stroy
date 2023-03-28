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






// carusel 
function moveToSelected(element) {
    if (element == "next") {
      var selected = $(".selected").next();
    } else if (element == "prev") {
      var selected = $(".selected").prev();
    } else {
      var selected = element;
    }
    var next = $(selected).next();
    var prev = $(selected).prev();
    var prevSecond = $(prev).prev();
    var nextSecond = $(next).next();
    $(selected).removeClass().addClass("selected");
    $(prev).removeClass().addClass("prev");
    $(next).removeClass().addClass("next");
    $(nextSecond).removeClass().addClass("nextRightSecond");
    $(prevSecond).removeClass().addClass("prevLeftSecond");
    $(nextSecond).nextAll().removeClass().addClass('hideRight');
    $(prevSecond).prevAll().removeClass().addClass('hideLeft');
  }
  // Eventos teclado
  $(document).keydown(function(e) {
      switch(e.which) {
          case 37: // left
          moveToSelected('prev');
          break;
  
          case 39: // right
          moveToSelected('next');
          break;
  
          default: return;
      }
      e.preventDefault();
  });
  $('#carousel div').click(function() {
    moveToSelected($(this));
  });
  $('#prev').click(function() {
    moveToSelected('prev');
  });
  $('#next').click(function() {
    moveToSelected('next');
  });
  
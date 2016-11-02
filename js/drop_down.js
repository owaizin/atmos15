var dd_is_show = true;
jQuery(function($) {
  $(document).ready(function() {
    $("#dd_menu_hamburger").click(function(){return runFunction();});
    $("#lines_main").click(function(){return runFunction();});
    
    $(".dd_menu_4").click(function () {
       $('html, body').animate({
           scrollTop: $('#menu-4').offset().top
       }, 'slow');
   });
    $(".dd_menu_5").click(function () {
       $('html, body').animate({
           scrollTop: $('#menu-5').offset().top
       }, 'slow');
   });
   $(".dd_menu_2").click(function () {
      $('html, body').animate({
          scrollTop: $('#menu-2').offset().top
      }, 'slow');
  });

  $(".dd_menu_1").click(function () {
     $('html, body').animate({
         scrollTop: $('#menu-1').offset().top
     }, 'slow');
  });

    $(".dd_menu_3").click(function () {
       $('html, body').animate({
           scrollTop: $('#menu-3').offset().top
       }, 'slow');
    });

  });
});


function runFunction(){
    if (dd_is_show){ //show div
        dd_is_show = false;
           $("#dropdownalerts").addClass('animated_dd bounceInDown');
           $("#lines_main").addClass('close_lines');
      
    }
    else{ //hide div
        dd_is_show = true;
           $("#dropdownalerts").removeClass('animated_dd bounceInDown');
            $("#lines_main").removeClass('close_lines');

    }
    return false;
}

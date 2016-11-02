jQuery(function($) {
  $(document).ready(function() {
    $(".economics_scroll").click(function () {
       $('html, body').animate({
           scrollTop: $('#economics_scroll_point').offset().top
       }, 'slow');
   });
    $(".maths_scroll").click(function () {
       $('html, body').animate({
           scrollTop: $('#maths_scroll_point').offset().top-80
       }, 'slow');
   });
    $(".chemistry_scroll").click(function () {
       $('html, body').animate({
           scrollTop: $('#chemistry_scroll_point').offset().top-80
       }, 'slow');
   });
    $(".bio_and_pharma_scroll").click(function () {
       $('html, body').animate({
           scrollTop: $('#bio_and_pharma_scroll_point').offset().top-80
       }, 'slow');
   });
    $(".physics_scroll").click(function () {
       $('html, body').animate({
           scrollTop: $('#physics_scroll_point').offset().top-80
       }, 'slow');
   });
      $(".computer_scroll").click(function () {
       $('html, body').animate({
           scrollTop: $('#computer_science_scroll_point').offset().top-80
       }, 'slow');
   });
       $(".electrical_scroll").click(function () {
       $('html, body').animate({
           scrollTop: $('#electrical_scroll_point').offset().top-80
       }, 'slow');
   });
        $(".mechanical_scroll").click(function () {
       $('html, body').animate({
           scrollTop: $('#mechanical_scroll_point').offset().top-80
       }, 'slow');
   });
         $(".civil_scroll").click(function () {
       $('html, body').animate({
           scrollTop: $('#civil_scroll_point').offset().top-80
       }, 'slow');
   });
          $(".chemical_scroll").click(function () {
       $('html, body').animate({
           scrollTop: $('#chemical_scroll_point').offset().top-80
       }, 'slow');
   });



    

  });
});
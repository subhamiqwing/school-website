$(document).ready(function() {
    $('#navbarDropdown-1').mouseenter(function() {
      $('.dropdown-menu-1').slideToggle(300, "linear");
    });
    
    
    $('.dropdown-menu-1').mouseleave(function() {
      $(this).slideToggle(300, "linear");
    });

    $('#navbarDropdown-2').mouseenter(function() {
        $('.dropdown-menu-2').slideToggle(300, "linear");
      });
      
      
      $('.dropdown-menu-2').mouseleave(function() {
        $(this).slideToggle(300, "linear");
      });

      $('#navbarDropdown-3').mouseenter(function() {
        $('.dropdown-menu-3').slideToggle(300, "linear");
      });
      
      
      $('.dropdown-menu-3').mouseleave(function() {
        $(this).slideToggle(300, "linear");
      });
  });
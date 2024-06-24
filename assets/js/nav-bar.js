$(document).ready(function() {
  
  // Dropdown menu and arrow image
  $(".dropdown").each(function () {
    var dropdown = $(this);
    var dropdownToggle = dropdown.find(".dropdown-toggle");
    var dropdownMenu = dropdown.find(".dropdown-menu");
    var arrow = dropdownToggle.find("svg");

    function addClasses() {
      dropdownMenu.stop(true, true).delay(200).slideDown(200);
      arrow.addClass("rotating-image");
    }
    function removeClasses() {
      dropdownMenu.stop(true, true).delay(200).slideUp(200);
      arrow.removeClass("rotating-image");
    }
    function toggleClasses() {
      dropdownMenu.stop(true, true).delay(200).slideToggle(200);
      arrow.toggleClass("rotating-image");
    }

    dropdownToggle.mouseenter(function() {
      addClasses();
    });
    dropdownMenu.mouseenter(function() {
      addClasses();
    });
  
    dropdownToggle.mouseleave(function() {
      removeClasses();
    });
    dropdownMenu.mouseleave(function() {
      removeClasses();
    });

    // Mobile menu
    dropdownToggle.click(function () {
      toggleClasses();
    });
    dropdownMenu.click(function () {
      toggleClasses();
    });
  });

  // Burger menu
  $(".navbar-toggler").click(function () {
    $(".navbar-collapse").stop(true, true).delay(200).slideToggle(200);
  });
});
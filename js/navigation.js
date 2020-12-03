jQuery(document).ready(function ($) {
  const menu = $(".phoneMenu").hide();

  let btn = $(".linkBtn");

  btn.mouseover(function () {
    if ($(this).data("index") === 0) {
      $(this).text("Tomo Mai");
    } else if ($(this).data("index") === 1) {
      $(this).text("Tā mātou Kaupapa");
    } else if ($(this).data("index") === 2) {
      $(this).text("Māra");
    } else if ($(this).data("index") === 3) {
      $(this).text("Tā mātou hinonga");
    } else {
      $(this).text("Whakapā Mai");
    }
  });

  btn.mouseout(function () {
    if ($(this).data("index") === 0) {
      $(this).text("Home");
    } else if ($(this).data("index") === 1) {
      $(this).text("About Us");
    } else if ($(this).data("index") === 2) {
      $(this).text("Find Gardens");
    } else if ($(this).data("index") === 3) {
      $(this).text("Our Projects");
    } else {
      $(this).text("Contact Us");
    }
  });

  $(".navButton").click(() => {
    menu.slideToggle("slow");
  });
});

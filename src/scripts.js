jQuery(function ($) {
  /**
   * Scroll events
   */
  AOS.init();

  /**
   * Smooth scroll
   */

  $('a[href*="#"]').on("click", function (e) {
    e.preventDefault();

    $("#menu, .hamburger").removeClass("is-active");

    $("html, body").animate(
      {
        scrollTop: $($(this).attr("href")).offset().top - 100,
      },
      500,
      "linear"
    );
  });

  /**
   * Hamburger menu
   */
  $(".hamburger").on("click", function () {
    $(this).toggleClass("is-active");
    $("#menu").toggleClass("is-active");
  });

  /**
   * Menu shrink on scroll
   */
  $(window).on("scroll", function () {
    if ($(document).scrollTop() > 50) {
      $("nav").addClass("shrink");
    } else {
      $("nav").removeClass("shrink");
    }
  });

  /**
   * Flexslider
   */
  $(window).on("load", function () {
    $(".flexslider").flexslider({
      animation: "slide",
      controlNav: false,
      smoothHeight: true,
    });
  });

  /**
   * Fancybox
   */
  function updateCaptions() {
    const slides = document.getElementsByClassName("slides")[0].children;
    for (let i = 0; i < slides.length; i++) {
      slides[i].children[0].dataset.caption = slides[i].innerText;
    }
  }
  updateCaptions();

  /**
   * Request form
   */

  $("#request-btn").on("click", function () {
    $("#order-arrival-date").val($("#arrival-date").val());
    $("#order-departure-date").val($("#departure-date").val());
    $("#order-persons").val($("#persons").val());

    $("html, body").animate(
      {
        scrollTop: $("#order-form").offset().top,
      },
      2000
    );
  });

  /**
   * LANGUAGES
   */

  //Init load translation
  let searchParams = new URLSearchParams(window.location.search);
  if (searchParams.has("en")) {
    $("#language-switcher").data("lang", "en");
    setLanguage();
    translate();
  }

  //On click translation
  $("#language-switcher").on("click", function () {
    $(".sub-menu").toggle();
  });

  $("#set-language").on("click", function () {
    let lang = $("#language-switcher").data("lang") === "en" ? "sk" : "en";
    $("#language-switcher").data("lang", lang);
    setLanguage();
    translate();
  });

  async function getTranslation(lang) {
    let response = await fetch("/languages/" + lang + ".json");
    let data = await response.json();
    return data;
  }

  async function translate() {
    let translation = await getTranslation(
      $("#language-switcher").data("lang")
    );
    $(".main-desc").html(translation.desc);
  }

  function setLanguage() {
    if ($("#language-switcher").data("lang") === "en") {
      $("#language-switcher").text("English");
      $("#set-language").text("Slovenčina");
    } else {
      $("#language-switcher").text("Slovenčina");
      $("#set-language").text("English");
    }
  }

  /**
   * Send email
   */

  $("#send-email").on("click", function (e) {
    e.preventDefault();
    $.ajax({
      url: "email.php",
      type: "POST",
      data: {
        email: "email@example.com",
        message: "hello world!",
      },
      success: function (msg) {
        alert(msg);
      },
    });
  });
});

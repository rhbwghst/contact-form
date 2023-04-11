$(function () {
  "use strict";
  var usererrors = true;
  var emailerors = true;
  var msgerors = true;

  $(".username").blur(function () {
    if ($(this).val().length < 4) {
      $(this).css("border", "1px solid #f00");
      $(this).parent().find(".custom-alert").fadeIn(200);
      $(this).parent().find(".asterisx").fadeIn(100);

      usererrors === true;
    } else {
      $(this).css("border", "1px solid #080");
      $(this).parent().find(".custom-alert").fadeOut(200);
      $(this).parent().find(".asterisx").fadeOut(100);
      usererrors === false;
    }
  });
  $(".email").blur(function () {
    if ($(this).val().length < 1) {
      $(this).css("border", "1px solid #f00");
      $(this).parent().find(".custom-alert").fadeIn(200);
      $(this).parent().find(".asterisx").fadeIn(100);
      emailerors === true;
    } else {
      $(this).css("border", "1px solid #080");
      $(this).parent().find(".custom-alert").fadeOut(200);
      $(this).parent().find(".asterisx").fadeOut(100);
      emailerors === false;
    }
  });
  $(".msg").blur(function () {
    if ($(this).val().length < 11) {
      $(this).css("border", "1px solid #f00");
      $(this).parent().find(".custom-alert").fadeIn(200);
      $(this).parent().find(".asterisx").fadeIn(100);
      msgerors === true;
    } else {
      $(this).css("border", "1px solid #080");
      $(this).parent().find(".custom-alert").fadeOut(200);
      $(this).parent().find(".asterisx").fadeOut(100);
      msgerors === false;
    }
  });
  /*
  $(".contact-form").submit(function (e) {
    if (usererrors === true || emailerors === true || msgerors === true) {
      e.preventDefault();
      $(".username , .email , .msg").blur();
    }
  });
  */
});

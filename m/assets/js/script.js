$(document).ready(function () {
  $(document).on("click", ".collapse>.collapse-head", function () {
    $(this).parent().find(".collapse-body").slideToggle(300);
  });
  $(".tabs>li>a").on("click", function () {
    $(this).closest(".tabs").find("li").removeClass("active");
    $(this).parent().addClass("active");
  });
  $(document).on("click", "#coupon-amount>button.add", function () {
    let val = parseInt($(this).parent().find("input").val()) || 0;
    $(this)
      .parent()
      .find("input")
      .val(++val);
  });
  $(document).on("click", "#coupon-amount>button.remove", function () {
    let val = parseInt($(this).parent().find("input").val()) || 0;
    if (val > 0) {
      $(this)
        .parent()
        .find("input")
        .val(--val);
    }
  });
});

function opensidebar() {
  $("#sidenav-overlay").fadeIn(100);
  $("#left-menu").css("transform", "translateX(0%)");
}
function openuserbar() {
  $("#sidenav-overlay").fadeIn(100);
  $("#user-menu").css("transform", "translateX(0%)");
}
function closesidebar() {
  $("#sidenav-overlay").fadeOut(100);
  $("#left-menu").css("transform", "translateX(-100%)");
  $("#user-menu").css("transform", "translateX(100%)");
}

function openmenu(value) {
  $(".backdrop").remove();
  $(".sidebar").removeClass("active");
  let overlay = document.createElement("div");
  overlay.classList.add("backdrop");
  overlay.setAttribute("onclick", "closemenu()");
  document.body.append(overlay);
  if (value == "left") {
    $("#sidebar").addClass("active").css("transition", ".4s");
  } else if (value == "right") {
    $("#user-sidebar").addClass("active").css("transition", ".4s");
  }
}

function closemenu() {
  $(".backdrop").remove();
  $(".sidebar").removeClass("active");
}

function openmodal(value) {
  $(".backdrop").remove();
  $(".modal").removeClass("active");
  let overlay = document.createElement("div");
  overlay.classList.add("backdrop");
  overlay.setAttribute("onclick", "closemodal()");
  document.body.append(overlay);
  $("body").addClass("scroll-lock");
  $("#" + value)
    .addClass("active")
    .css("transition", ".3s");
}

function closemodal() {
  $(".backdrop").remove();
  $("body").removeClass("scroll-lock");
  $(".modal").removeClass("active");
}

function togglecoupon() {
  $("#coupon").toggleClass("active");
  $("body").toggleClass("scroll-lock");
}

async function getapi(type) {
  return await $.ajax({
    type: "GET",
    url: "api/" + type,
    success: (e) => {
      return e;
    },
  });
}

function ramd(num) {
  return (Math.random() * (num - 1) + 1).toFixed(2);
}

function nobalance() {
  swal.fire("Yetersiz Bakiye!", "", "error");
}

$.fn.randomize = function (selector) {
  var $elems = selector ? $(this).find(selector) : $(this).children(),
    $parents = $elems.parent();

  $parents.each(function () {
    $(this)
      .children(selector)
      .sort(function () {
        return Math.round(Math.random()) - 0.5;
        // }). remove().appendTo(this); // 2014-05-24: Removed `random` but leaving for reference. See notes under 'ANOTHER EDIT'
      })
      .detach()
      .appendTo(this);
  });

  return this;
};
$(document).on("click", "#randomtabs>li", function () {
  $("#listrandomorder").randomize();
});
$(document).on("click", '[href="#"]', (e) => e.preventDefault());
$(document).on("submit", '[action="#"]', (e) => e.preventDefault());
let betslip = 0;
$(document).on("click", ".bet-btn", function () {
  if ($(this).hasClass("active")) {
    betslip--;
  } else {
    betslip++;
  }
  $(this).toggleClass("active");
  if (betslip == 0) {
    $("#bslpb").html('<i aria-hidden="true" class="fa fa-plus"></i>');
  } else {
    $("#bslpb").html(
      '<span class="count-wrapper"><!----><small class="count">' +
        betslip +
        "</small></span>"
    );
  }
});

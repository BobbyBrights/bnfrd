<!-- JS -->
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script type='text/javascript' src='/js/main.js'></script>

<script>

$(document).ready(function() {
  document.getElementsByTagName("html")[0].style.visibility = "visible";
  $(".basic-toast").css("bottom","-" + toastHeight + "px");
  $(".bottom-sheet").css("bottom","-" + bottomSheetHeight + "px");
  $(".top-sheet").css("top","-" + topSheetHeight + "px");
  $(".deli-ticket-container").css("top","-" + deliTicketHeight + "px");
  console.log(topSheetHeight);
});

// Global Variables
var toastHeight = $(".basic-toast").outerHeight();
var bottomSheetHeight = $(".bottom-sheet").outerHeight();
var frapDistance = toastHeight + 32
var deliTicketHeight = $(".deli-ticket-container").outerHeight();
var topSheetHeight = $(".top-sheet").outerHeight(true);


/* ----------------------------------------
-------------------------------------------
---------------Reward Buttons--------------
-------------------------------------------
---------------------------------------- */

$('.toggle-reward').on('click', function() {
  console.log(frapDistance);
  $(this).toggleClass('ghost-button');
  $(".toggle-reward").not(this).removeClass("ghost-button");
  var rewardAction = $(this).find('.reward-text');
  var rewardText = rewardAction.text();

  var otherRewardAction = $(".toggle-reward").not(this).find('.reward-text');
  var otherRewardText = otherRewardAction.text();

  var rewardMessage = $(this).attr('id').concat("-message");
  var messageDiv = $('#' + rewardMessage);

  var rewardHelp = $(this).attr('id').concat("-help")
  var helpDiv = $('#' + rewardHelp);

  var rewardDiscount = $(this).attr('id').concat("-total");
  var rewardDiscountDiv = $('#' + rewardDiscount);

  if (rewardText === "Use" || otherRewardText === "Remove") {
    rewardAction.text("Remove");
    otherRewardAction.text("Use");
    $('#' + rewardMessage).addClass("flex");
    $('#' + rewardDiscount).addClass("flex");
    $('#' + rewardHelp).addClass("flex");
    $(".reward-message").not(messageDiv).removeClass("flex");
    $(".reward-discount").not(rewardDiscountDiv).removeClass("flex");
    $(".reward-help").not(helpDiv).removeClass("flex");
    showToast();
    moveFrap();
    } else {
    rewardAction.text("Use");
    $(messageDiv).removeClass("flex");
    $(rewardDiscountDiv).removeClass("flex");
    $(helpDiv).removeClass("flex");

  }

  if (rewardMessage === "25-reward-message") {
    $(".basic-toast p").html("25<span class='colorTextGold'>★</span> applied to Latte Macchiato");
  }

  if (rewardMessage === "birthday-reward-message") {
    $(".basic-toast p").html("Birthday Reward applied to order");
  }

  if (rewardMessage === "50-reward-message") {
    $(".basic-toast p").html("50<span class='colorTextGold'>★</span> applied to Blonde Roast");
  }

  if (rewardMessage === "125-reward-message") {
    $(".basic-toast p").html("125<span class='colorTextGold'>★</span> applied to Latte Macchiato");
  }

  if (rewardMessage === "150-reward-message") {
    $(".basic-toast p").html("150<span class='colorTextGold'>★</span> applied to Latte Macchiato");
  }

  if (rewardMessage === "200-reward-message") {
    $(".basic-toast p").html("200<span class='colorTextGold'>★</span> applied to Double-Smoked Bacon, Cheddar & Egg Sandwich");
  }

  if (rewardMessage === "400-reward-message") {
    $(".basic-toast p").html("400<span class='colorTextGold'>★</span> applied to Chai Créme Frappuccino®");
  }

});

$.fn.extend({
 qcss: function(css) {
    return $(this).queue(function(next) {
       $(this).css(css);
       next();
    });
 }
});

/* ----------------------------------------
-------------------------------------------
-------------------Toast-------------------
-------------------------------------------
---------------------------------------- */


function showToast () {
$(".basic-toast")
  .qcss({ display: 'flex' })
  .delay(2)
  .qcss({ transition: 'all .2s ease' })
  .qcss({ bottom: '0' })
  .delay(2000)
  .qcss({ bottom:"-" + toastHeight + "px" })
  .delay(200)
  .qcss({ display: 'none' })
};

$(".initiate-toast").on("click", function() {
showToast();
moveFrap();
});

/* ----------------------------------------
-------------------------------------------
-----------------Top Sheet-----------------
-------------------------------------------
---------------------------------------- */

function showTopSheet () {
$(".top-sheet")
  .qcss({ display: 'block' })
  .delay(2)
  .qcss({ transition: 'top .2s ease' })
  .qcss({ top: '0' })
};

function dismissTopSheet () {
$(".top-sheet")
  .qcss({ top:"-" + topSheetHeight + "px" })
  .delay(200)
  .qcss({ display: 'none' })
};

$(".initiate-top-sheet").on("click", function() {
showTopSheet();
});

$(".dismiss-top-sheet").on("click", function() {
dismissTopSheet();
});


/* ----------------------------------------
-------------------------------------------
---------------Bottom Sheet----------------
-------------------------------------------
---------------------------------------- */

function showBottomSheet () {
$(".bottom-sheet")
  .qcss({ display: 'flex' })
  .delay(2)
  .qcss({ transition: 'bottom .2s ease' })
  .qcss({ bottom: '0' })
};

function dismissBottomSheet () {
$(".bottom-sheet")
  .qcss({ bottom:"-" + bottomSheetHeight + "px" })
  .delay(200)
  .qcss({ display: 'none' })
};

function moveFrap () {
  $(".frap-container")
    .qcss({ transition: 'all .2s ease' })
    .qcss({ bottom: frapDistance + "px" })
    .delay(2000)
    .qcss({ bottom: "32px" })
};

$(".initiate-bottom-sheet").on("click", function() {
showBottomSheet();
showMask();
});

$(".dismiss-bottom-sheet, .mask").on("click", function() {
dismissBottomSheet();
hideMask();
});

/* ----------------------------------------
-------------------------------------------
----------------Deli Ticket----------------
-------------------------------------------
---------------------------------------- */

function showDeliTicketContainer () {
$(".deli-ticket-container")
  .qcss({ display: 'fixed' })
  .delay(2)
  .qcss({ transition: 'top .2s ease' })
  .qcss({ top: '0' })
};

function showDeliTicket () {
$(".deli-ticket")
    .qcss({ transition: 'opacity .2s ease' })
    .qcss({ opacity: '1' })
};

function dismissDeliTicketContainer () {
$(".deli-ticket-container")
  .qcss({ transition: 'top .2s ease' })
  .qcss({ top:"-" + deliTicketHeight + "px" })
};

function dismissDeliTicket () {
$(".deli-ticket")
    .qcss({ transition: 'opacity .2s ease' })
    .qcss({ opacity: '0' })
};

$(".initiate-deli-ticket").on("click", function() {
showDeliTicketContainer();
showDeliTicket();
});

$(".dismiss-deli-ticket").on("click", function() {
dismissDeliTicketContainer();
dismissDeliTicket();
});
/* ----------------------------------------
-------------------------------------------
------------------Overlay------------------
-------------------------------------------
---------------------------------------- */

function showOverlayContainer () {
$(".overlay-container, .modular-overlay-container")
  .qcss({ display: 'flex' })
};
//

//
function dismissOverlayContainer () {
$(".overlay-container, .modular-overlay-container")
  .delay(200)
  .qcss({ display: 'none' })
};

$(".initiate-overlay").on("click", function() {
  showOverlayContainer();
  showMask();
  setTimeout(function(){
     $(".modular-overlay, .overlay").addClass("show");

  }, 1);
});

$(".dismiss-overlay").on("click", function() {
  dismissOverlayContainer();
  hideMask();
  $(".modular-overlay, .overlay").removeClass("show");
});

/* ----------------------------------------
-------------------------------------------
--------------------Mask-------------------
-------------------------------------------
---------------------------------------- */

function showMask () {
$(".mask")
  .qcss({ display: 'block' })
  .delay(2)
  .qcss({ opacity: '1' })
};

function hideMask () {
$(".mask")
  .qcss({ opacity: '0' })
  .delay(200)
  .qcss({ display: 'none' })
};


/* -----------------------------------*/

$('#paypal').on('click', function() {
  $(this).toggleClass('transformed');
});



/* Nav for Future Page */

$(".drop-down-container").hover(
  function() {
    $(".nav-list .menu").toggleClass('active');
  }, function() {
    $(".nav-list .menu").toggleClass('active');
  }
);


function showNav () {
$(".drop-down-container")
  .qcss({ display: 'block' })
  .delay(2)
  .qcss({ opacity: '1' })
};

function hideNav () {
$(".drop-down-container")
  .qcss({ opacity: '0' })
  .delay(200)
  .qcss({ display: 'none' })
};

// $(".drop-down-container").hover(
//   function() {
//
//   }, function() {
//     hideNav();
//   }
// );

$(".drop-down-container").mouseleave(function() {
  hideNav();
});

$(".menu").on("mouseover", function() {
showNav();
});
//
$(".drop-down-container").on("mouseleave", function() {
hideNav();
});

$(".nav-list li").not(".menu").on("mouseover", function() {
hideNav();
});

$(".sb-navbar-siren").on("mouseover", function() {
hideNav();
});

$("page-content").on("mouseover", function() {
hideNav();
});





</script>
</body>
</html>

<!-- JS -->
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script type='text/javascript' src='/js/main.js'></script>

<script>

$(document).ready(function() {
  document.getElementsByTagName("html")[0].style.visibility = "visible";
  $(".basic-toast").css("bottom","-" + toastHeight + "px");

});

// Global Variables
var toastHeight = $(".basic-toast").outerHeight();


/* ----------------------------------------
-------------------------------------------
---------------Reward Buttons--------------
-------------------------------------------
---------------------------------------- */

$('.toggle-reward').on('click', function() {
$(this).toggleClass('ghost-button');
$(".toggle-reward").not(this).removeClass("ghost-button");
var rewardAction = $(this).find('.reward-text');
var rewardText = rewardAction.text();
var otherRewardAction = $(".toggle-reward").not(this).find('.reward-text');
var otherRewardText = otherRewardAction.text();
if (rewardText === "Use" || otherRewardText === "Remove") {
  rewardAction.text("Remove");
  otherRewardAction.text("Use");
  showToast();
  } else {
  rewardAction.text("Use");
}
});


$('#25-reward').on('click', function() {
  var rewardAction = $(this).find('.reward-text');
  var rewardText = rewardAction.text();
  // var span = $().find('img');
  if (rewardText === "Remove") {
    $(".reward-message").not(".reward-message#25-option").removeClass("show-flex");
    $(".reward-message#25-option").addClass("show-flex");
    $(".basic-toast p").html("25<span class='colorTextGold'>★</span> applied to Latte Macchiato");
    } else {
    $(".reward-message").removeClass("show-flex");
  }
});

$('#50-reward').on('click', function() {
  var rewardAction = $(this).find('.reward-text');
  var rewardText = rewardAction.text();
  if (rewardText === "Remove") {
    $(".reward-message").not(".reward-message#50-option").removeClass("show-flex");
    $(".reward-message#50-option").addClass("show-flex");
    $(".basic-toast p").html("50<span class='colorTextGold'>★</span> applied to Blonde Roast");
    } else {
    $(".reward-message").removeClass("show-flex");
  }
});

$('#125-reward').on('click', function() {
  var rewardAction = $(this).find('.reward-text');
  var rewardText = rewardAction.text();
  if (rewardText === "Remove") {
    $(".reward-message").not(".reward-message#125-option").removeClass("show-flex");
    $(".reward-message#125-option").addClass("show-flex");
    $(".basic-toast p").html("125<span class='colorTextGold'>★</span> applied to Latte Macchiato");
    } else {
    $(".reward-message").removeClass("show-flex");
  }
});

$('#150-reward').on('click', function() {
  var rewardAction = $(this).find('.reward-text');
  var rewardText = rewardAction.text();
  if (rewardText === "Remove") {
    $(".reward-message").not(".reward-message#150-option").removeClass("show-flex");
    $(".reward-message#150-option").addClass("show-flex");
    $(".basic-toast p").html("150<span class='colorTextGold'>★</span> applied to Latte Macchiato");
    } else {
    $(".reward-message").removeClass("show-flex");
  }
});

$('#200-reward').on('click', function() {
  var rewardAction = $(this).find('.reward-text');
  var rewardText = rewardAction.text();
  if (rewardText === "Remove") {
    $(".reward-message").not(".reward-message#200-option").removeClass("show-flex");
    $(".reward-message#200-option").addClass("show-flex");
    $(".basic-toast p").html("200<span class='colorTextGold'>★</span> applied to Double-Smoked Bacon, Cheddar & Egg Sandwich");
    } else {
    $(".reward-message").removeClass("show-flex");
  }
});

$('#400-reward').on('click', function() {
  var rewardAction = $(this).find('.reward-text');
  var rewardText = rewardAction.text();
  if (rewardText === "Remove") {
    $(".reward-message").not(".reward-message#400-option").removeClass("show-flex");
    $(".reward-message#400-option").addClass("show-flex");
    $(".basic-toast p").html("400<span class='colorTextGold'>★</span> applied to Chai Créme Frappuccino®");
    } else {
    $(".reward-message").removeClass("show-flex");
  }
});


/* ----------------------------------------
-------------------------------------------
-------------------Toast-------------------
-------------------------------------------
---------------------------------------- */

$.fn.extend({
 qcss: function(css) {
    return $(this).queue(function(next) {
       $(this).css(css);
       next();
    });
 }
});

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
}

$(".initiate-toast").on("click", function() {
showToast();
});


/* -----------------------------------*/

$('#paypal').on('click', function() {
  $(this).toggleClass('transformed');
});

</script>
</body>
</html>

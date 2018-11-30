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
  var rewardMessage = $(this).attr('id').concat("-message");
  var messageDiv = $('#' + rewardMessage);
  var rewardDiscount = $(this).attr('id').concat("-total");
  var rewardDiscountDiv = $('#' + rewardDiscount);
  if (rewardText === "Use" || otherRewardText === "Remove") {
    rewardAction.text("Remove");
    otherRewardAction.text("Use");
    $('#' + rewardMessage).addClass("show-flex");
    $('#' + rewardDiscount).addClass("show-flex")
    $(".reward-message").not(messageDiv).removeClass("show-flex");
    $(".reward-discount").not(rewardDiscountDiv).removeClass("show-flex");
    showToast();
    } else {
    rewardAction.text("Use");
    $(messageDiv).removeClass("show-flex");
    $(rewardDiscountDiv).removeClass("show-flex");

  }

  if (rewardMessage === "25-reward-message") {
    $(".basic-toast p").html("25<span class='colorTextGold'>★</span> applied to Latte Macchiato");
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

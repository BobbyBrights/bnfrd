<!DOCTYPE HTML>
<html>
<?php include 'header.php';?>
<body>

<!-- Left Crate -->
  <div class="container">
    <div class="sb-headerCrate colorBlackWarmer">
      <div class="sb-navbar">
          <div class="sb-navbar-siren vcenter"></div>
      </div>
      <div class="greeting sb-heading sb-heading--large text-bold colorTextWhite">Review order</div>
    </div>

		<!-- Right Crate -->
		<div class="sb-contentCrate">
			<div class="sb-contentCrateContainer">
        <div class="wide-row">
          <div class="basic-card mt3 pt3 px3 pb5 sm-pt5 sm-pr10 sm-pb7 md-pt4 md-pr9 md-pb6 md-pl4 lg-pr13">
            <div class="title row nowrap c12 middle">
              <div class="product-img latte-macchiato circle-div">
              </div>
              <div class="row c12 middle nowrap">
                <h2 class="title-2 pl4">
                  Latte Macchiato
                </h2>
                <h3 class="subhead-2 ml-auto vend">
                  $4.25
                </h3>
              </div>
            </div>
            <div class="product-details pl11 md-pl15">
              <h3 class="body-1 pl3 md-pl3">
                Tall
              </h3>
              <h3 class="body-1 pt1 pl3 md-pl3">
                3 shots
              </h3>
              <h3 class="body-1 pt1 pl3 md-pl3">
                125<span class="colorTextGold text-bold">☆</span> item
              </h3>
              <div class="row pl1">
                <div class="icon-button heart"></div>
                <div class="icon-button add"></div>
                <div class="icon-button minus"></div>
              </div>
            </div>
          </div>
          <div class="basic-card mt3 pt3 px3 pb5 sm-pt5 sm-pr10 sm-pb7 md-pt4 md-pr9 md-pb6 md-pl4 lg-pr13">
            <div class="title row nowrap c12 middle">
              <div class="product-img double-smoked-bacon circle-div">
              </div>
              <div class="row c12 middle nowrap">
                <h2 class="title-2 pl4">
                  Double-Smoked Bacon, Cheddar & Egg Sandwich
                </h2>
                <h3 class="subhead-2 ml-auto vend">
                  $4.25
                </h3>
              </div>
            </div>
            <div class="product-details pl11 md-pl15">
              <h3 class="body-1 pl3 md-pl3">
                Tall
              </h3>
              <h3 class="body-1 pt1 pl3 md-pl3">
                3 shots
              </h3>
              <h3 class="body-1 pt1 pl3 md-pl3">
                125<span class="colorTextGold text-bold">☆</span> item
              </h3>
              <div class="row pl1">
                <div class="icon-button heart"></div>
                <div class="icon-button add"></div>
                <div class="icon-button minus"></div>
              </div>
            </div>
          </div>
          <div class="basic-card mt3 pt3 px3 pb5 sm-pt5 sm-pr10 sm-pb7 md-pt4 md-pr9 md-pb6 md-pl4 lg-pr13">
            <div class="title row nowrap c12 middle">
              <div class="product-img blonde-roast circle-div">
              </div>
              <div class="row c12 middle nowrap">
                <h2 class="title-2 pl4">
                  Blonde Roast
                </h2>
                <h3 class="subhead-2 ml-auto vend">
                  $4.25
                </h3>
              </div>
            </div>
            <div class="product-details pl11 md-pl15">
              <h3 class="body-1 pl3 md-pl3">
                Tall
              </h3>
              <h3 class="body-1 pt1 pl3 md-pl3">
                3 shots
              </h3>
              <h3 class="body-1 pt1 pl3 md-pl3">
                125<span class="colorTextGold text-bold">☆</span> item
              </h3>
              <div class="row pl1">
                <div class="icon-button heart"></div>
                <div class="icon-button add"></div>
                <div class="icon-button minus"></div>
              </div>
            </div>
          </div>
          <div class="basic-card mt3 pt3 px3 pb5 sm-pt5 sm-pr10 sm-pb7 md-pt4 md-pr9 md-pb6 md-pl4 lg-pr13">
            <div class="title row nowrap c12 middle">
              <div class="product-img chai-creme-frap circle-div">
              </div>
              <div class="row c12 middle nowrap">
                <h2 class="title-2 pl4">
                  Chai Créme Frappuccino®
                </h2>
                <h3 class="subhead-2 ml-auto vend">
                  $4.25
                </h3>
              </div>
            </div>
            <div class="product-details pl11 md-pl15">
              <h3 class="body-1 pl3 md-pl3">
                Tall
              </h3>
              <h3 class="body-1 pt1 pl3 md-pl3">
                3 shots
              </h3>
              <h3 class="body-1 pt1 pl3 md-pl3">
                125<span class="colorTextGold text-bold">☆</span> item
              </h3>
              <div class="row pl1">
                <div class="icon-button heart"></div>
                <div class="icon-button add"></div>
                <div class="icon-button minus"></div>
              </div>
            </div>
          </div>
          <div class="basic-card mb4 mt3 py3 px3 md-pl4">
            <div class="filled-button-black initiate-toast">
              <span class="reward-action">Use</span> 125 <span class="colorTextGold">★</span>
            </div>
          </div>
        </div>
        <div class="basic-toast middle">
          <p>125<span class="colorTextGold">★</span> applied to Latte Macchiato</p>
          <div class="ghost-button-white ml-auto">Undo</div>
        </div>
			</div>
		</div>
  </div>

  <!-- JS -->
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
  <script type='text/javascript' src='/js/main.js'></script>

  <script>

  $(document).ready(function() {
    document.getElementsByTagName("html")[0].style.visibility = "visible";
  });

  $('.filled-button-black').on('click', function() {
    $(this).toggleClass('ghost-button-black');

    var rewardText = $(this).find('.reward-action').text();
    if (rewardText === "Use") {
        $(this).find('.reward-action').text("Remove");
    } else {
        $(this).find('.reward-action').text("Use");
    }
});

var minus = "-";
var toastHeight = $(".basic-toast").outerHeight();
var toastDistance = minus.concat(toastHeight);

$( document ).ready(function() {
  $(".basic-toast").css("bottom", toastDistance + "px");
});

$.fn.extend({
   qcss: function(css) {
      return $(this).queue(function(next) {
         $(this).css(css);
         next();
      });
   }
});

$(".initiate-toast").on("click", function() {
  $(".basic-toast")
  .qcss({ display: 'flex' })
  .delay(2)
  .qcss({ transition: 'all .2s ease' })
  .qcss({ bottom: '0' })
  .delay(2000)
  .qcss({ bottom: toastDistance + "px" })
  .delay(200)
  .qcss({ display: 'none' })
});

// $(".heart").on("click", function() {
//   $(".basic-toast").css("bottom","0")
// });

  </script>



  </body>
  </html>

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
          <div class="product-card px3 pt3 pb4 sm-p5 md-mt3 md-pr13">
            <div class="title row nowrap c12 middle">
              <div class="product-img latte-macchiato circle-div">
              </div>
              <div class="row c12 middle nowrap">
                <h2 class="title-2 pl4">
                  Latte Macchiato
                </h2>
                <h3 class="subhead-2 pb1 ml-auto vend">
                  $4.25
                </h3>
              </div>
            </div>
            <div class="product-details c12 pl11 md-pl15">
              <h3 class="body-1 pl3 md-pl3">
                Tall
              </h3>
              <h3 class="body-1 pl3 md-pl3">
                3 shots
              </h3>
              <div class="row pl1">
                <div class="icon-button heart"></div>
                <div class="icon-button add"></div>
                <div class="icon-button minus"></div>
              </div>
              <div class="pl3 row nowrap reward-message hide" id="125-reward-message">
                <p class="colorTextGreen button-text">It’s on us! 125 Star Reward applied</p>
                <p class="button-text colorTextBlack ml-auto pl3">-125<span class="colorTextGold">☆</p>
              </div>
            </div>
          </div>
          <div class="product-card px3 pt3 pb4 sm-p5 md-mt3 md-pr13">
            <div class="title row nowrap c12 middle">
              <div class="product-img double-smoked-bacon circle-div">
              </div>
              <div class="row c12 middle nowrap">
                <h2 class="title-2 pl4">
                  Double-Smoked Bacon, Cheddar & Egg Sandwich
                </h2>
                <h3 class="subhead-2 pb1 ml-auto vend">
                  $4.25
                </h3>
              </div>
            </div>
            <div class="product-details pl11 md-pl15">
              <h3 class="body-1 pl3 md-pl3">
                Tall
              </h3>
              <h3 class="body-1 pl3 md-pl3">
                3 shots
              </h3>
              <div class="row pl1">
                <div class="icon-button heart"></div>
                <div class="icon-button add"></div>
                <div class="icon-button minus"></div>
              </div>
            </div>
          </div>
          <div class="product-card px3 pt3 pb4 sm-p5 md-mt3 md-pr13">
            <div class="title row nowrap c12 middle">
              <div class="product-img blonde-roast circle-div">
              </div>
              <div class="row c12 middle nowrap">
                <h2 class="title-2 pl4">
                  Blonde Roast
                </h2>
                <h3 class="subhead-2 pb1 ml-auto vend">
                  $4.25
                </h3>
              </div>
            </div>
            <div class="product-details pl11 md-pl15">
              <h3 class="body-1 pl3 md-pl3">
                Tall
              </h3>
              <h3 class="body-1 pl3 md-pl3">
                3 shots
              </h3>
              <div class="row pl1">
                <div class="icon-button heart"></div>
                <div class="icon-button add"></div>
                <div class="icon-button minus"></div>
              </div>
            </div>
          </div>
          <div class="product-card px3 pt3 pb4 sm-p5 md-mt3 md-pr13">
            <div class="title row nowrap c12 middle">
              <div class="product-img chai-creme-frap circle-div">
              </div>
              <div class="row c12 middle nowrap">
                <h2 class="title-2 pl4">
                  Chai Créme Frappuccino®
                </h2>
                <h3 class="subhead-2 pb1 ml-auto vend">
                  $4.25
                </h3>
              </div>
            </div>
            <div class="product-details pl11 md-pl15">
              <h3 class="body-1 pl3 md-pl3">
                Tall
              </h3>
              <h3 class="body-1 pl3 md-pl3">
                3 shots
              </h3>
              <div class="row pl1">
                <div class="icon-button heart"></div>
                <div class="icon-button add"></div>
                <div class="icon-button minus"></div>
              </div>
            </div>
          </div>
          <div class="caption-2 colorTextBlackSoft mt4 mb1 ml3 sm-mt4 sm-ml5 md-ml0 md-mt5 c12">
            Would you like to use a Reward?
          </div>
          <div class="product-card mb16 p3 pb4 sm-p4 sm-pl5 sm-pt3 md-py3 md-mt2 md-pl4">
            <div class="filled-button black toggle-reward" id="125-reward">
              <span class="reward-text">Use</span> 125 <span class="colorTextGold">★</span>
            </div>
          </div>
        </div>
        <div class="basic-toast middle">
          <p class="pr3">125<span class="colorTextGold">★</span> applied to Latte Macchiato</p>
          <div class="ghost-button white ml-auto">Undo</div>
        </div>
			</div>
		</div>
  </div>

  <?php include 'component-logic.php';?>

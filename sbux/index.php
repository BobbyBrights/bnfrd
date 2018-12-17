<!DOCTYPE HTML>
<html>
<?php include 'header.php';?>
<body>

<!-- Left Crate -->
  <div class="container">
    <div class="sb-headerCrate colorWhite">
      <div class="sb-navbar">
          <div class="sb-navbar-siren vcenter"></div>
          <nav class="row vcenter between c12">
            <ul class="row vcenter text-noUnderline text-upper text-bold text-xxs">
              <li class="py2 m1 pl2">Order</li>
              <li class="py2 m1 pl2">Cards</li>
              <li class="py2 m1 pl2">Gift</li>
              <li class="py2 m1 pl2">Stores</li>
            </ul>
            <button class="icon-button hamburger ml-auto"></button>
        </nav>
      </div>
      <div class="greeting sb-heading sb-heading--large text-bold">Components</div>
    </div>

		<!-- Right Crate -->
		<div class="sb-contentCrate">
			<div class="sb-contentCrateContainer">
        <div class="wide-row">
          <div class="basic-card middle mt3 p2">
            <div class="ghost-button black m2">More details</div>
            <div class="ghost-button green m2">More details</div>
            <div class="filled-button black m2">More details</div>
            <div class="filled-button green m2">More details</div>
            <div class="filled-button gold m2">More details</div>
            <div class="text-button green m2">More details</div>
          </div>
          <div class="basic-card middle mt3 p2">
            <div class="field">
              <div class="field__inputWrapper flex">
                <label class="floatLabel color-textBlackSoft" for="postalCode">Zip code</label>
                <input type="tel" aria-required="true" class="fieldInput" id="postalCode" name="postalCode" value="" required="" maxlength="10" autocomplete="postal-code" data-e2e="postalCode">
              </div>
            </div>
          </div>
          <div class="basic-card middle mt3 p2 colorBlackWarm">
            <div class="ghost-button white m2">More details</div>
            <div class="filled-button white m2">More details</div>
          </div>
          <div class="basic-card middle mt3 p2">
            <div class="icon-button heart"></div>
            <div class="icon-button add"></div>
            <div class="icon-button minus"></div>
            <div class="icon-button close"></div>
            <div class="icon-button hamburger"></div>
            <div class="icon-button mail"></div>
            <div class="icon-button right-chevron"></div>
          </div>
          <div class="basic-card p4 mt3">
            This is a basic card.
          </div>
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
              <h3 class="body-1 pl3">
                Tall
              </h3>
              <h3 class="body-1 pl3">
                3 shots
              </h3>
              <h3 class="body-1 pl3">
                125<span class="colorTextGold text-bold">☆</span> item
              </h3>
              <div class="row pl1">
                <div class="icon-button heart"></div>
                <div class="icon-button add"></div>
                <div class="icon-button minus"></div>
              </div>
              <div class="pl3 row nowrap reward-message hide" id="25-reward-message">
                <p class="colorTextGreen button-text">25 Star Reward applied toward your drink customizations</p>
                <p class="button-text colorTextBlack ml-auto pl3">-25<span class="colorTextGold">☆</p>
              </div>
              <div class="pl3 row nowrap reward-message hide" id="150-reward-message">
                <p class="colorTextGreen button-text">It’s on us! 150 Star Reward applied</p>
                <p class="button-text colorTextBlack ml-auto pl3">-150<span class="colorTextGold">☆</p>
              </div>
            </div>
          </div>

            <div class="frap-container">
              <div class="frap secondary">
                Start Order
              </div>
              <div class="frap mt3 initiate-bottom-sheet">
                Start Order
              </div>
            </div>
        </div>
			</div>
		</div>
  </div>
  <div class="mask"></div>
  <div class="bottom-sheet">
    <div class="icon-button close dismiss-bottom-sheet absolute t1 ml1 lg-ml0 lg-r2 lg-t2 z-100"></div>
    <div class="wide-row mb16 ml8 mr3 md-mx13 lg-m-auto">
      <h1 class="bottom-sheet-title colorTextBlackSoft md-ml0 lg-pr5 row subhead-1">
          Add money to Starbucks Card
      </h1>
      <article class="title-1 mt6">
        This is some example content, see how it stays within the wide grid bounds at any thing.
      </article>
    </div>
  </div>

<?php include 'component-logic.php';?>

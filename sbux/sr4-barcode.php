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
              <li class="py2 m1 dismiss-overlay pl2">Order</li>
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
        <div class="frap-container">
          <div class="frap mt3 initiate-overlay">
            Show overlay
          </div>
        </div>
      </div>
		</div>
	</div>

  <div class="overlay-container">
    <div class="overlay">
      <div class="row colorWhite middle fixed p2 m1 l0 r0 z-1 lg-l-40p lg-m0 lg-p4 lg-m1">
        <div class="icon-button close dismiss-overlay sm-ml-auto sm-last z-1"></div>
        <button class="pl2 row middle ml-auto sm-ml0 sm-first initiate-top-sheet">
          <div class="subhead-2">174</div>
          <div class="icon small-star ml-neg2"></div>
        </button>
      </div>

      <!-- Default Content -->
      <div class="row column middle mt12 sm-mt13 lg-mt14">
        <div class="display-1">Jason Stoff</div>
        <div class="body-1 colorTextBlackSoft mt2">Rewards member since 2012</div>
        <div class="row sm-relative hcenter px5 mb5 mt3">
          <div class="filled-button z-100 m2 black initiate-top-sheet z-0"> Rewards & offers <span class="colorTextGold">★</span></div>
          <div class="ghost-button z-100 m2 green z-0"> Add money</div>
        </div>
      </div>

      <div class="row column middle fixed b0">
        <div class="width-100 lg-width-60 py5 hcenter row column middle colorWhite border-top">
          <div class="barcode"></div>
          <div class="body-1 centered-text mt2">3354 5456 6676 3456</div>
        </div>
      </div>
    </div>
    <div class="mask dismiss-overlay dismiss-top-sheet"></div>
  </div>

  <div class="top-sheet">
    <div class="row colorWhite no-wrap middle between fixed p2 m1 l0 r0 z-1 lg-l-40p lg-m0 lg-p4 lg-m1">
      <div class="icon-button close dismiss-top-sheet first sm-last z-1"></div>
      <div class="subhead-2 centered-text vcenter ml6 sm-ml0 sm-mr6">Rewards & offers</div>
      <div class="pl2 row middle last sm-first">
        <div class="subhead-2 sm-ml0">174</div>
        <div class="icon small-star ml-neg2"></div>
      </div>
    </div>
    <div class="row column lg-mt0 wide-row mt10 sm-mt12 lg-mt14">
      <div class="colorCeramic p3 border-radius-6 mx3 md-mx0 row">
        <div class="title-1 mb4">
          Tell your barista you’d like to use a Reward or offer.
        </div>
        <div class="grid grid-row-gap-16">
          <div class="grid-column-1 subhead-2">
            25<span class="colorTextGold ml1">★</span>
          </div>
          <div class="grid-column-2 body-1 ml3">
            Customize your drink (espresso shot, dairy substitute, syrup and more)
          </div>
          <div class="grid-column-1 subhead-2">
            50<span class="colorTextGold ml1">★</span>
          </div>
          <div class="grid-column-2 body-1 ml3">
            Brewed hot coffee, bakery item or hot tea
          </div>
          <div class="grid-column-1 subhead-2">
            150<span class="colorTextGold ml1">★</span>
          </div>
          <div class="grid-column-2 body-1 ml3">
            Handcrafted drink, hot breakfast or parfait
          </div>
          <div class="grid-column-1 subhead-2">
            200<span class="colorTextGold ml1">★</span>
          </div>
          <div class="grid-column-2 body-1 ml3">
            Lunch sandwich, protein box or salad
          </div>
          <div class="grid-column-1 subhead-2">
            400<span class="colorTextGold ml1">★</span>
          </div>
          <div class="grid-column-2 body-1 ml3">
            Select merchandise or at-home coffee
          </div>
        </div>
      </div>
      <div class="colorCeramic p3 border-radius-6 mx3 md-mx0 mt2 row no-wrap top">
        <div class="colorBlackWarmer p4 pl5 pt5"></div>
        <div class="ml3">
          <div class="subhead-2">Birthday Reward</div>
          <div class="body-1 mt1">Lorem ipsum dolor sit amet, omnis utinam laudem cum eu, docendi.</div>
        </div>
      </div>
      <div class="filled-button black inline-block mt4 vcenter dismiss-top-sheet mb4">
        Done
      </div>
    </div>
  </div>



<?php include 'component-logic.php';?>

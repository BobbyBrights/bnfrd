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
      <div class="row between">
        <div class="icon-button close fixed dismiss-overlay"></div>
        <div class="row middle ml-auto">
          <div class="title-2">174</div>
          <div class="icon star"></div>
        </div>
      </div>
      <div class="row column middle mt7 sm-mt3">
        <div class="display-1">Jason Stoff</div>
        <div class="body-1">Rewards member since 2012</div>
        <div class="row sm-relative hcenter px5 mb5 mt3">
          <div class="filled-button z-100 m2 black dismiss-overlay"> Rewards & offers</div>
          <div class="ghost-button z-100 m2 green dismiss-overlay"> Add money</div>
        </div>
        <div class="fixed b7 sm-b-unset sm-mb6 hcenter sm-relative">
          <div class="barcode"></div>
          <div class="body-1 centered-text mt2">3354 5456 6676 3456</div>
        </div>
      </div>
    </div>
    <div class="mask dismiss-overlay"></div>
  </div>



<?php include 'component-logic.php';?>

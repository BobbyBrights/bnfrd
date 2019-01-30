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
      <div class="row sm-hend">
        <div class="icon-button close fixed dismiss-overlay"></div>
      </div>
      <div class="graphic"></div>
      <article class="px6 pb6">
        <div class="title-2 pt5">Welcome to the new Starbucks Rewards™</div>
        <div class="body-1 colorTextBlackSoft mt3">You’ll earn Stars towards even more Rewards on everything you order. Special perks and surprises meet you on the way.</div>
      </article>
      <div class="row button-container fixed sm-relative hcenter px5 mb5">
        <div class="text-button z-100 m2 green dismiss-overlay"> Not now</div>
        <div class="filled-button z-100 m2 green dismiss-overlay"> See what's new</div>
      </div>
    </div>
    <div class="mask dismiss-overlay"></div>
  </div>

<?php include 'component-logic.php';?>

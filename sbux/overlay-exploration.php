<!DOCTYPE HTML>
<html>
<?php include 'header.php';?>
<body>

<!-- Left Crate -->
  <div class="container">
    <div class="sb-headerCrate colorWhite">
      <div class="sb-navbar">
          <div class="sb-navbar-siren vcenter initiate-overlay"></div>
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
            <div class="frap-container">
              <div class="frap mt3 initiate-overlay">
                Show overlay
              </div>
            </div>
        </div>
			</div>
		</div>
  </div>
  <div class="deli-ticket-container">
    <div class="deli-ticket">
      <div class="icon-button z-100 close absolute lg-r0 dismiss-deli-ticket"></div>
      <div class="wide-row pt1 md-ml8 mt2 mr4 lg-m-auto lg-pr7">
        <div class="subhead-2 mt1 ml7 md-ml0 c12">
          Something went wrong on our end
        </div>
        <div class="body-1 mt1 ml7 md-ml0 c12">
          Things should be back to normal soon. Try again later.
        </div>
      </div>
      <div class="text-button green m2 inline-block float-right dismiss-deli-ticket">Got it</div>
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
    <div class="mask"></div>
  </div>

<?php include 'component-logic.php';?>

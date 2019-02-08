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
          <div class="caption-2 mt6 mb2 ml3 md-ml0">Basic buttons</div>
          <div class="basic-card middle p2">
            <div class="ghost-button black m2">More details</div>
            <div class="ghost-button green m2">More details</div>
            <div class="filled-button black m2">More details</div>
            <div class="filled-button green m2">More details</div>
            <div class="filled-button gold m2">More details</div>
            <div class="text-button green m2">More details</div>
          </div>
          <div class="basic-card middle mt3 p2 colorBlackWarm">
            <div class="ghost-button white m2">More details</div>
            <div class="filled-button white m2">More details</div>
          </div>
          <div class="caption-2 mt6 mb2 ml3 md-ml0">Icon buttons</div>
          <div class="basic-card middle p2">
            <div class="icon-button heart"></div>
            <div class="icon-button add"></div>
            <div class="icon-button minus"></div>
            <div class="icon-button minus-alt"></div>
            <div class="icon-button close"></div>
            <div class="icon-button close-alt"></div>
            <div class="icon-button hamburger"></div>
            <div class="icon-button right-chevron"></div>
            <div class="icon-button down-chevron"></div>
            <div class="icon-button down-chevron-alt"></div>
            <div class="icon-button edit"></div>
            <div class="icon-button help"></div>
            <div class="icon-button info"></div>
            <div class="icon-button refresh"></div>
            <div class="icon-button search"></div>
            <div class="icon-button share"></div>
            <div class="icon-button settings"></div>
            <div class="icon-button show-password-on"></div>
            <div class="icon-button show-password-off"></div>
            <div class="icon-button signed-in"></div>
            <div class="icon-button signed-out"></div>
            <div class="icon-button transfer-balance"></div>
            <div class="icon-button trash"></div>
          </div>

            <div class="frap-container">
              <div class="frap secondary initiate-deli-ticket">
                Show deli ticket
              </div>
              <div class="frap mt3 initiate-bottom-sheet">
                Show bottom sheet
              </div>
            </div>
        </div>
			</div>
		</div>
  </div>
  <div class="mask"></div>
  <div class="bottom-sheet">
    <div class="icon-button close dismiss-bottom-sheet absolute sm-ml0 sm-r1 sm-t1 z-100"></div>
    <div class="wide-row mb16 ml8 mr3 sm-mr8 sm-ml3 md-mx13 lg-m-auto">
      <h1 class="mt3 colorTextBlackSoft md-ml0 lg-mr5 subhead-1">
          Add money to Starbucks Card.
      </h1>
      <article class="title-1 mt6 lg-mr5">
        This is some example content, see how it stays within the wide grid bounds at any thing.
      </article>
    </div>
  </div>
  <div class="deli-ticket-container">
    <div class="deli-ticket">
      <div class="icon-button z-100 close absolute sm-r0 dismiss-deli-ticket"></div>
      <div class="wide-row pt1 mt2 mr4 ml7 sm-ml4 sm-mr7 lg-m-auto lg-pr7">
        <div class="subhead-2 mt1 md-ml0 c12">
          Something went wrong on our end
        </div>
        <div class="body-1 mt1 md-ml0 c12">
          Things should be back to normal soon. Try again later.
        </div>
      </div>
      <div class="text-button green m2 inline-block float-right dismiss-deli-ticket">Got it</div>
    </div>
  </div>

<?php include 'component-logic.php';?>

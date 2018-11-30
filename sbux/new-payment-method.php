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
            <div class="icon-button hamburger ml-auto"></div>
        </nav>
      </div>
      <div class="greeting sb-heading sb-heading--large text-bold">Add payment</div>
    </div>

		<!-- Right Crate -->
		<div class="sb-contentCrate">
			<div class="sb-contentCrateContainer">
        <div class="wide-row hstart">
          <div class="flat-card pl3 py2 pr2 middle vstart mt3 lg-mt12">
            <div class="card-icon credit-card"></div>
            <div class="subhead-1 pl3">Credit/debit card</div>
            <div class="icon right-chevron ml-auto"></div>
          </div>
          <div class="flat-card pl3 py2 pr2 middle vstart mt2">
            <div class="card-icon visa-checkout"></div>
            <div class="subhead-1 pl3">Visa Checkout</div>
            <div class="icon right-chevron ml-auto"></div>
          </div>
          <div class="flat-card pl3 py2 pr2 middle vstart mt2">
            <div class="card-icon chase-pay"></div>
            <div class="subhead-1 pl3">Chase Pay®</div>
            <div class="icon right-chevron ml-auto"></div>
          </div>
          <div class="flat-card pl3 py2 pr2 middle vstart mt2">
            <div class="card-icon paypal"></div>
            <div class="subhead-1 pl3">Paypal</div>
            <div class="icon right-chevron ml-auto"></div>
          </div>
          <div class="flat-card pl3 py2 pr2 middle vstart mt2">
            <div class="card-icon apple-pay"></div>
            <div class="subhead-1 pl3">Apple Pay</div>
            <div class="icon right-chevron ml-auto"></div>
          </div>
          <div class="flat-card pl3 py2 pr2 middle vstart mt2">
            <div class="card-icon google-pay"></div>
            <div class="subhead-1 pl3">Google Pay</div>
            <div class="icon right-chevron ml-auto"></div>
          </div>
        </div>
			</div>
		</div>
  </div>

<?php include 'component-logic.php';?>

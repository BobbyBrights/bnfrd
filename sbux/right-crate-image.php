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
    <div class="greeting sb-heading sb-heading--large text-bold">Good Morning, Karen ✌🏼</div>
  </div>

		<!-- Right Crate -->
		<div class="sb-contentCrate">
			<div class="sb-contentCrateContainer">
        <div class="right-crate-hero"></div>
        <div class="frap-container">
          <div class="frap">
            Start an order
          </div>
        </div>
			</div>
		</div>
  </div>



  <?php include 'component-logic.php';?>

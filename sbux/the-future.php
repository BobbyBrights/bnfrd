<!DOCTYPE HTML>
<html>
<?php include 'header.php';?>
<body>

  <div class="nav-container colorWhite width-100 z-3 fixed">
    <nav class="nav px3 flex">
      <div class="flex c12">

        <div class="icon-button hamburger vcenter phone-content"></div>
        <div class="sb-navbar-siren vcenter"></div>

        <ul class="nav-list row vcenter text-noUnderline text-sm colorTextBlackSoft ml3">
          <!-- <li class="py5 px3">Drinks</li>
          <li class="py5 px3">Food</li>
          <li class="py5 px3">At Home Coffee</li> -->
          <li class="py5 menu px3 full-content">Menu</li>
          <li class="py5 px3 full-content">Card</li>
          <li class="py5 px3 full-content">Gift</li>
          <li class="py5 px3 full-content">Stores</li>
        </ul>

        <div class="text-sm colorTextBlackSoft vcenter mr8 full-content ml-auto">
          Pickup at <span class="text-bold colorTextBlack">Secure Access Sodo 8</span>
        </div>

        <div class="account-content flex vcenter mr5 full-content-flex">
          <div class="account-img vcenter mr2"></div>
          <div class="text-sm colorTextBlackSoft vcenter mr-neg2">Hi, Andrew</div>
          <div class="icon down-chevron"></div>
        </div>

        <div class="icon bag-full vcenter"></div>

      </div>

    </nav>
  </div>

  <div class="drop-down-container colorWhite z-2 fixed shadow" id="drop-down-id">
    <div class="drop-down">
      <div class="drop-down-content flex pt4 pb5">
        <ul class="menu-list">
          <li class="text-sm colorTextBlack p3">Drinks</li>
          <li class="text-sm colorTextBlackSoft p3">Hot Coffees</li>
          <li class="text-sm colorTextBlackSoft p3">Hot Teas</li>
          <li class="text-sm colorTextBlackSoft p3">Hot Drinks</li>
          <li class="text-sm colorTextBlackSoft p3">Frappuccino®</li>
          <li class="text-sm colorTextBlackSoft p3">Cold Coffees</li>
          <li class="text-sm colorTextBlackSoft p3">Iced Teas</li>
          <li class="text-sm colorTextBlackSoft p3">Cold Drinks</li>
        </ul>
        <ul class="menu-list ml4">
          <li class="text-sm colorTextBlack p3">Food</li>
          <li class="text-sm colorTextBlackSoft p3">Hot Breakfast</li>
          <li class="text-sm colorTextBlackSoft p3">Bakery</li>
          <li class="text-sm colorTextBlackSoft p3">Lunch</li>
          <li class="text-sm colorTextBlackSoft p3">Snacks & Sweets</li>
          <li class="text-sm colorTextBlackSoft p3">Yogurts & Custards</li>
        </ul>
        <ul class="menu-list ml4">
          <li class="text-sm colorTextBlack p3">At Home Coffee</li>
          <li class="text-sm colorTextBlackSoft p3">Whole Bean</li>
          <li class="text-sm colorTextBlackSoft p3">Verismo® Pods</li>
          <li class="text-sm colorTextBlackSoft p3">Via® Instant</li>
        </ul>

      </div>
    </div>
  </div>

  <div class="page-content relative">

    <div class="left-crate-container flex z-1">
      <div class="left-card colorWhite m3 border-radius-6 shadow relative flex hcenter">
        <div class="carousel-dots absolute flex mar">
          <div class="dot circle-div colorBlack40"></div>
          <div class="dot circle-div unselected"></div>
          <div class="dot circle-div unselected"></div>
          <div class="dot circle-div unselected"></div>
        </div>
      </div>
    </div>

    <div class="right-crate-container p3 lg-pl0 z-neg1 absolute">
      <div class="card-no-shadow py12"></div>
      <div class="card-no-shadow mt3 py12"></div>
      <div class="card-no-shadow mt3 py12"></div>
      <div class="card-no-shadow mt3 py12"></div>
      <div class="card-no-shadow mt3 py12"></div>
      <div class="card-no-shadow mt3 py12"></div>
      <div class="card-no-shadow mt3 py12"></div>
      <div class="card-no-shadow mt3 py12"></div>
    </div>

  </div>




<?php include 'component-logic.php';?>

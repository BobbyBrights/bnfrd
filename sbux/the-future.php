<!DOCTYPE HTML>
<html>
<?php include 'header.php';?>
<body>

  <div class="nav-container colorWhite width-100 shadow z-2 fixed">
    <nav class="nav px3 flex">
      <div class="left-content flex c12">

        <div class="icon-button hamburger vcenter phone-content"></div>
        <div class="sb-navbar-siren vcenter"></div>

        <ul class="row vcenter text-noUnderline text-sm colorTextBlackSoft ml3">
          <!-- <li class="py5 px3">Drinks</li>
          <li class="py5 px3">Food</li>
          <li class="py5 px3">At Home Coffee</li> -->
          <li class="py5 px3 full-content">Menu</li>
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
      <div class="card py12"></div>
      <div class="card mt3 py12"></div>
      <div class="card mt3 py12"></div>
      <div class="card mt3 py12"></div>
      <div class="card mt3 py12"></div>
      <div class="card mt3 py12"></div>
      <div class="card mt3 py12"></div>
    </div>

  </div>




<?php include 'component-logic.php';?>

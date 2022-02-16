<?php require("libs/fetch_data.php");?>
<?php include("include/header.php"); ?>
<!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="monaNav">

          <!-- Background Curve -->
          <div class="bg-curve" style="background-image: url(./img/core-img/curveit.png);"></div>

          <!-- Logo -->
          <div style="">
             <a class="nav-brand" href="index.html" style="width:400px"><img src="./img/core-img/newname.png" alt="">
            </a>
          </div>
         

          <!-- Navbar Toggler -->
          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>
          <!-- Menu -->
          <div class="classy-menu">
            <!-- Menu Close Button -->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <!-- Nav Start -->
            <div class="classynav">
              <ul id="nav">
                <li><a href="./">Home</a></li>
                <li class="current-item"><a href="./blog">Blog</a></li>
                <li><a href="./cat">Categories</a></li>
                <li><a href="./about">About</a></li>
                <li><a href="./contact">Contact</a></li>
              </ul>

              <!-- Search Icon -->
              <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                <i class="icon_search"></i>
              </div>
            </div>
            <!-- Nav End -->

          </div>
        </nav>
      </div>
    </div>
  </header>
<?php include("include/top_search.php"); ?> 
<!-- ***** Breadcrumb Area Start ***** -->
<div id="page-wrapper">
  <div class="breadcumb-area">
    <div class="container h-100">
      <div class="row h-100 align-items-end">
        <div class="col-12">
          <div class="breadcumb--con">
            <h2 class="title">Blog</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div><br>
  <!-- ***** Breadcrumb Area End ***** -->

  

  <!-- ***** Blog Area Start ***** -->

 

  <section class="mona-blog-area mb-50 section-padding-40-0">
    <div class="container">
      <div class="row">
        <!--left-->
        <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
          <!--grid blogs below-->
          <div class="blog-girds-sec">
            <div class="row">
              <?php getblogridposts("blogs");?>
              <!--bloggrids-->
            </div>
          </div> <br><br><br><br>
        </div>
        <aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
          <div class="right-blog-info text-left" >
            <?php include("include/widget.php"); ?>
            <br><br><br>
            <div class="single-widget-area catagories-widget mb-20" style="padding-left:20px; padding-right: 20px; padding-bottom: 30px">
              <h5 class="widget-title" style="padding-left: 80px;">Older Posts</h5>
                  <!-- catagories list -->
              <ul class="catagories-list">
                <?php getolderposts("blogs");?>
              </ul>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <!-- ***** Blog Area End ***** -->
  </div>

 <?php include("include/footer.php"); ?>
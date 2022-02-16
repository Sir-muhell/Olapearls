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
                <li><a href="index">Home</a></li>
                <li><a href="./blog">Blog</a></li>
                <li><a href="./cat">Categories</a></li>
                <li class="current-item"  ><a href="./about">About</a></li>
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
  <div class="breadcumb-area">
    <div class="container h-100">
      <div class="row h-100 align-items-end">
        <div class="col-12">
          <div class="breadcumb--con">
            <h2 class="title">About Us</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->
  <div class="bg-curve" style="background-image: url(./img/core-img/curveit.png);"></div>

  

  <!-- ***** About Us Area Start ***** -->
  <section class="mona-about-us-area mb-30 section-padding-50-0 ">
    <div class="container">
      <div class="row">
          
          
        <div class="col-12 col-lg-6" style="margin-top: 50px" ><p><?php getdetaileddescription("titles");?></p></div>

        
       

        <div class="col-12 col-lg-6" >
          <div class="embed-responsive embed-responsive-4by3 mona-video-area mb-80">
            
             
             <video width="100%" height="auto"  controls>
  <source src="Video/vid.mp4" type="video/mp4">
</video>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Core Value Area End ***** -->



  
            

  <!-- ***** Footer Area Start ***** -->
  <?php include("include/footer.php"); ?>
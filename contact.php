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
                <li><a href="./blog">Blog</a></li>
                <li><a href="./cat">Categories</a></li>
                <li><a href="./about">About</a></li>
                <li class="current-item"><a href="./contact">Contact</a></li>
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
            <h2 class="title">Contact Us</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ***** Contact Area Start ***** -->
  <section class="mona-contact-area section-padding-80-0">
    <div class="container">
      <div class="row justify-content-between">

        
        <!-- Contact Form -->
        <div class="col-12 col-lg-8 col-xl-8">
          <div class="mona-contact-form mb-80">

            <form action="emailer.php" method="post">
              <div class="form-group">
                <label for="fullname">Your Name:</label>
                <input type="text" class="form-control" name="fullname" id="fullname" required>
              </div>
              <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" name="message" rows="8" cols="80" id="message" required></textarea>
              </div>
              <button type="submit" class="btn mona-btn btn-2 mt-15">Contact Us</button>
            </form>
          </div>
        </div>
        <aside class="col-12 col-lg-4 col-xl-4">
          <div class="mona-contact-form mb-80">
            <div>
              <h1>Let's Connect</h1>
              <div><a href="tel: +2348094793295"><h4 style="margin-top: 20px"><i class="icon_phone" style="color: #017478"></i> +234 809 4793 295</h4></a></div>
              <div><a href="mailto: hello@olapearlshub.com"><h4 style="margin-top: 20px"><i class="icon_mail" style="color: #017478"></i> hello@olapearlshub.com</h4></a></div>
              <div><h4 style="margin-top: 20px"><i class="icon_pin" style="color: #017478"></i> Lagos, Nigeria.</h4></div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <!-- ***** Contact Area End ***** -->

  <?php include("include/footer.php"); ?>
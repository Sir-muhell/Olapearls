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
                <li class="current-item"><a href="./categories">Categories</a></li>
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
            <h2 class="title">Categories</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categories</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div><br>
  <!-- ***** Breadcrumb Area End ***** -->
  <br>

<section class="main-content-w3layouts-agileits">
		<div class="container">
		
			<div class="row inner-sec">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits ">
					<div class=" row mb-50 container" >
			<h4 class="title"><a href="category.php?id=10">Sunday Digest</a></h4>
             <p>This category under which the gospel and everything around the gospel is posted.<br>it is like an online church. The word of God is dished out, we eat it, savor it and digest it.<br>It is a medium to observe. 2nd Corithians 3:18<br>
             <a href="category.php?id=10" class="btn-sm"  style=" color: white; background-color: #017478;  border-radius: 20px;">View Category</a></p>
             


             <h4 class="title"><a href="category.php?id=11">Monday Challenge</a></h4>
             <p>This category gives weekly christianity is no room for mediocrity.<br>We got to give it what it what it takes to be earthly relevant while we remain heavenly conscious.
             <br><a href="category.php?id=11" class="btn-sm"  style=" color: white; background-color: #017478;  border-radius: 20px;">View Category</a></p>

             <h4 class="title"><a href="category.php?id=12">Weekend Groove</a></h4>
             <p>It is a platform where people are interviewe an jesus is taken to the street, an experts of various fields such as skin care routine, relationship experts, chiefs etc are invited also.
             <br><a href="category.php?id=12" class="btn-sm"  style=" color: white; background-color: #017478;  border-radius: 20px;">View Category</a></p>

             <h4 class="title"><a href="category.php?id=13">Book Review</a></h4>
             <p>A monthly platform where relevant books are shared at the beginning of the month an is reviewed at the end of the month.
             <br><a href="category.php?id=13" class="btn-sm"  style=" color: white; background-color: #017478;  border-radius: 20px;">View Category</a></p>

             <h4 class="title"><a href="category.php?id=14">Vocabulary</a></h4>
             <p>New words in each book shared monthly form the book review is posted here.<br>
             <br><a href="category.php?id=14" class="btn-sm"  style=" color: white; background-color: #017478;  border-radius: 20px;">View Category</a></p>

					</div>
				</div>
			<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
                <div class="right-blog-info text-left" >
                    <div class="single-widget-area search-widget-area mb-80">
                      <form action="search.php" method="post" name="form">
                      <input type="search" name="search" class="form-control" placeholder="Search and hit enter...">
                      <button type="submit"><i class="fa fa-search"></i></button>
                      </form>
                    </div>
                    <br><br>
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
	 <?php include("include/footer.php"); ?>

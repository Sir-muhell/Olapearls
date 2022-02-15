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
<?php //code to get the item using its id
include("database/conn.php");//database config file
$id=$_REQUEST['id'];
if ("$id" == '') {
 header("location: ./oops ");
}
$link  = str_replace('-', ' ', $id);
$query="SELECT * from blog_categories where name='".$link."'"; $result=mysqli_query($GLOBALS["___mysqli_ston"],$query) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$row = mysqli_fetch_assoc($result);?>


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
  <div class="breadcumb-area">
    <div class="container h-100">
      <div class="row h-100 align-items-end">
        <div class="col-12">
          <div class="breadcumb--con">
            <h2 class="title">Blog</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="blog">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Category (<?php echo $row['name']; ?>)</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->
  <br>

<section class="main-content-w3layouts-agileits">
		<div class="container">
		
			<div class="row inner-sec">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="row mb-4">
						<?php  
							$categoryid=$row['id'];
							getcategoryblogs("blogs",$categoryid);
						?>
					</div>
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
	</section>
<?php include("include/footer.php"); ?>
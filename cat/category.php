<?php require("fetch_data.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=0">
    <meta charset="UTF-8">
    <meta name="description" content="<?php getshortdescription("titles");?>">
    <meta name="keywords" content="<?php getkeywords("titles");?>">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#017478"> 
  

  <!-- Title -->
  <title><?php getwebname("titles"); echo"|"; gettagline("titles");?></title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="../img/core-img/llogo.png">
  <link rel="manifest" href="../$rowmanifest.json">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="../style.css">

</head>

<body>
    <div class="subscribe-area">
    <!-- Search Modal -->
    <div class="modal" id="Modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <!-- Close Button -->
            <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
            <!-- Form -->
            <form action="subscribe.php" method="post" name="form">
              <input type="name" name="name" class="form-control" placeholder="Your Name" required="yes"><br>
              <input type="email" name="email" class="form-control" placeholder="Your Email" required="yes"><br>
              <button type="btn" style="text-align: center; margin-bottom: -50px" class="mona-btn" name="submit">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
   
  <!-- ***** Header Area End ***** -->


<!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="monaNav">

          <!-- Background Curve -->
          <div class="bg-curve" style="background-image: url(../img/core-img/curveit.png);"></div>

          <!-- Logo -->
          <div style="">
             <a class="nav-brand" href="../index" style="width:400px"><img src="../img/core-img/newname.png" alt="">
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
include("../database/conn.php");//database config file
$id=$_REQUEST['name'];
$link  = str_replace('-', ' ', $id);
$query="SELECT * from blog_categories WHERE `name` = '$link'";
$result=mysqli_query($GLOBALS["___mysqli_ston"],$query) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$row = mysqli_fetch_assoc($result);

if ($id == '' || $row == '') {
 header("location: ./oops ");
}

?>


            <!-- Nav Start -->
            <div class="classynav">
              <ul id="nav">
                <li><a href="../">Home</a></li>
                <li><a href="../blog">Blog</a></li>
                <li class="current-item"><a href="../categories">Categories</a></li>
                <li><a href="../about">About</a></li>
                <li><a href="../contact">Contact</a></li>
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
  <!-- ***** Top Search Area Start ***** -->
  <div class="top-search-area">
    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <!-- Close Button -->
            <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
            <!-- Form -->
            <form action="search.php" method="post" name="form">
              <input type="search" name="search" class="form-control" placeholder="Search here..." required="yes">
              <button class="btn btn1 my-2 my-sm-0" type="submit" name="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Top Search Area End ***** -->
<!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area">
    <div class="container h-100">
      <div class="row h-100 align-items-end">
        <div class="col-12">
          <div class="breadcumb--con">
            <h2 class="title">Blog</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../"><i class="fa fa-home"></i> Home</a></li>
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
                        <div class="single-widget-area search-widget-area mb-80">
              <form action="search.php" method="post" name="form">
              <input type="search" name="search" class="form-control" placeholder="Search and hit enter..." required>
              <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>

            <!-- Single Widget Area -->
            <div class="single-widget-area catagories-widget mb-80"  style="padding-left: 100px; ">
              <h5 class="widget-title">Categories</h5>

              <!-- catagories list -->
              <ul class="catagories-list">
                <?php getcategoriesmenu("blog_categories"); ?>
              </ul>
            </div>

           
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
 <!-- ***** Footer Area Start ***** -->
  <footer class="footer-area section-padding-80-0">
    <div class="container">
      <div class="row justify-content-between">

        <!-- Single Footer Widget -->
        <div class=" col-sm-12 col-lg-4 col-xl-4 text-center" style="padding-bottom: 20px">
          <div class="single-footer-widget text-center">
            <!-- Logo -->
            <a href="" class="d-block"><img style="height: 50px; width: 50px" src="../img/core-img/llogo.png" alt=""></a>
          </div>
           <!-- Catagories Nav -->
            <nav>
              <div class="copywrite-text">
                <a href="../index">Home</a>&nbsp|&nbsp<a href="../blog">Blog</a>&nbsp|&nbsp<a href="../categories">Categories</a>&nbsp|&nbsp<a href="../about">About</a>&nbsp|&nbsp<a href="../contact">Contact</a>
                <h5  style=" color: #a6a6a6" ><small>&copy;  Olapearl's Hub <?php $date = date('Y'); echo $date;?></h5></small>
                </div>
            </nav><br><br>

          <!-- Trigger the modal with a button -->
          <button type="button" class="mona-btn" data-toggle="modal" data-target="#Modal">Subscribe To Newsletter</button>
        </div>


        <!-- Single Footer Widget -->
        <div class="col-lg-4 col-sm-12 col-xl-4 text-center">
          <div class="single-footer-widget">
            <div class="footer-content mb-30">
              <h6 style="font-size: 20px"><i class="icon_pin" style=" color: #017478"><br></i> Lagos, Nigeria.</h6>
              <h6 style="margin-top: 15px; font-size: 20px"><a href="tel: +2348094793295" style="color:#a6a6a6"><i style=" color: #017478" class="icon_phone"></i> +234 809 4793 295</a></h6>
              <h6 style="margin-top: 15px; padding-bottom: 15px; font-size: 20px"><a href="mailto: hello@olapearlshub.com" style="color: #a6a6a6"><i class="icon_mail" style=" color: #017478"></i> hello@olapearlshub.com</a></h6>
            </div>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-lg-4 col-sm-12 col-xl-4 text-center">
          <div class="single-footer-widget">
              <!-- Widget Title -->
            <h4 class="widget-title"  style=" color: #017478" >About Us</h4>
            <!-- Footer Content -->
            <div class="footer-content mb-30">
              <h4></h4>
              <h6>Olapearl's Hub is an institution where souls are saved and lives are blessed. It is a college where lives are pruned. The center of it all is Jesus...<a href="./about" style="color:red">Read more</a></h6>
            </div>
            
            <!-- Social Info -->
            <div class="footer-social-info" >
              <a href="https://www.facebook.com/olapearlshub/" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://wa.me/2348110793719" class="whatsapp" data-toggle="tooltip" data-placement="top" title="Whatsapp"><i class="fa fa-whatsapp"></i></a>
              <a href="https://instagram.com/olapearlshub" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UClg2b1Wnw8AMqoRWmGjJLmg" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
            </div>
          </div>
        </div>
        

      </div>
    </div>
    
    <div class="text-center copywrite-text"><h5><small>Developed by:<a target="_blank" href="https://wa.me/2348110793719" style="color:#017478 "> Aholu Samuel &nbsp </a>
    <!--Powered by:<a target="_blank" href=https://doteightinc.com> DotEightInc.</a>--></small></ph5></div>
  </footer>
  <!-- ***** Footer Area End ***** -->
  
  
  
 

<!-- ******* All JS ******* -->
    <!-- jQuery js -->
  <link src="../js/jquery.js" rel="preload" as="script"></link>
  <link src="../js/jquery.min.js" rel="preload" as="script"></linkt>
  <!-- Popper js -->
  <link src="../js/popper.min.js" rel="preload" as="script"></link>
  <!-- Bootstrap js -->
  <link src="../js/bootstrap.min.js" rel="preload" as="script"></link>
  <!-- All js -->
  <link src="../js/mona.bundle.js" rel="preload" as="script"></link>
  <!-- Active js -->
  <link src="../js/default-assets/active.js" rel="preload" as="script"></link>
  <link src="../js/default-assets/classynav.js" rel="preload" as="script"></link>
  
  
  
  <!-- jQuery js -->
  <script src="../js/jquery.js"></script>
  <script src="../js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="../js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="../js/mona.bundle.js"></script>
  <!-- Active js -->
  <script src="../js/default-assets/active.js"></script>
  <script src="../js/default-assets/classynav.js"></script>
  
<script>
  if ('serviceWorker' in navigator) {
    console.log("Will the service worker register?");
    navigator.serviceWorker.register('service-worker.js')
      .then(function(reg){
        console.log("Yes, it did.");
      }).catch(function(err) {
        console.log("No it didn't. This happened: ", err)
      });
  }
</script>
<script src="../service-worker.js">
        // Service worker for Progressive Web App
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker.js', {
            scope: '.' // THIS IS REQUIRED FOR RUNNING A PROGRESSIVE WEB APP FROM A NON_ROOT PATH
        }).then(function(registration) {
            // Registration was successful
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
        });
    }
</script>
  
</body>

</html>
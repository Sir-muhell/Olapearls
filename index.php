<?php require("libs/fetch_data.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta charset="UTF-8">
    <meta name="description" content="<?php getshortdescription("titles");?>">
    <meta name="keywords" content="<?php getkeywords("titles");?>">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#017478"> 
  


  <!-- Title -->
  <title><?php getwebname("titles"); echo"|"; gettagline("titles");?></title>
  <link rel="manifest" href="manifest.json">
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/core-img/llogo.png">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  
  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
   
  <!-- ***** Header Area End ***** -->

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
                <li class="current-item"><a href="index">Home</a></li>
                <li><a href="./blog">Blog</a></li>
                <li><a href="./categories">Categories</a></li>
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


  <!-- ***** Welcome Area Start ***** -->
  <section class="welcome-area">
    <!-- Welcome Slides -->
    <div class="welcome-slides owl-carousel">

      <!-- Single Welcome Slide -->
      <div class="single-welcome-slide">
        <!-- Background Curve -->
        <div class="bg-curve overlay" style="background-image: url(./img/core-img/curveit.png);"></div>
        <!-- Main Background Image -->
        <div class="main-bg-img bg-img" data-animation="fadeInUpBig" data-delay="200ms" style="background-image: url(./img/bg-img/book.jpg);"></div>
        <!-- Welcome Text -->
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <div class="welcome-text">
                <h3 data-animation="bounceInUp" data-delay="400ms">Sunday<br> Digest
                  </h3>
                
              </div>
            </div>
          </div>
        </div>
        <!-- Social Info -->
        <div class="social-info">
          <a href="#" data-animation="bounceInDown" data-delay="1000ms"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1100ms"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1200ms"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1300ms"><i class="fa fa-youtube-play"></i> <span>Youtube</span></a>
        </div>
        <!-- Pager -->
       
      </div>

      <!-- Single Welcome Slide -->
      <div class="single-welcome-slide">
        <!-- Background Curve -->
        <div class="bg-curve" style="background-image: url(./img/core-img/curveit.png);"></div>
        <!-- Main Background Image -->
        <div class="main-bg-img bg-img" data-animation="fadeInUpBig" data-delay="200ms" style="background-image: url(./img/bg-img/monday.jpg);"></div>
        <!-- Welcome Text -->
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <div class="welcome-text">
                <h3 data-animation="bounceInUp" data-delay="400ms">Monday <br>
                  Challenge</h3>
                
              </div>
            </div>
          </div>
        </div>
        <!-- Social Info -->
        <div class="social-info">
          <a href="#" data-animation="bounceInDown" data-delay="1000ms"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1100ms"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1200ms"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1300ms"><i class="fa fa-youtube-play"></i> <span>Youtube</span></a>
        </div>
        <!-- Pager -->
        
      </div>

      <!-- Single Welcome Slide -->
      <div class="single-welcome-slide">
        <!-- Background Curve -->
        <div class="bg-curve" style="background-image: url(./img/core-img/curveit.png);"></div>
        <!-- Main Background Image -->
        <div class="main-bg-img bg-img" data-animation="fadeInUpBig" data-delay="200ms" style="background-image: url(./img/bg-img/weekend.jpg);"></div>
        <!-- Welcome Text -->
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <div class="welcome-text">
                <h3 data-animation="bounceInUp" data-delay="400ms">Weekend  <br>
                  Groove</h3>
                
              </div>
            </div>
          </div>
        </div>
        <!-- Social Info -->
        <div class="social-info">
          <a href="#" data-animation="bounceInDown" data-delay="1000ms"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1100ms"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1200ms"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1300ms"><i class="fa fa-youtube-play"></i> <span>Youtube</span></a>
        </div>
        <!-- Pager -->
       
      </div>

      <!-- Single Welcome Slide -->
      <div class="single-welcome-slide">
        <!-- Background Curve -->
        <div class="bg-curve" style="background-image: url(./img/core-img/curveit.png);"></div>
        <!-- Main Background Image -->
        <div class="main-bg-img bg-img" data-animation="fadeInUpBig" data-delay="200ms" style="background-image: url(./img/bg-img/sunday.jpg);"></div>
        <!-- Welcome Text -->
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <div class="welcome-text">
                <h3 data-animation="bounceInUp" data-delay="400ms">Book   <br>
                  Review</h3>
                
              </div>
            </div>
          </div>
        </div>
        <!-- Social Info -->
        <div class="social-info">
          <a href="#" data-animation="bounceInDown" data-delay="1000ms"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1100ms"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1200ms"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1300ms"><i class="fa fa-youtube-play"></i> <span>Youtube</span></a>
        </div>
        <!-- Pager -->
        
      </div>

<!-- Single Welcome Slide -->
      <div class="single-welcome-slide">
        <!-- Background Curve -->
        <div class="bg-curve" style="background-image: url(./img/core-img/curveit.png);"></div>
        <!-- Main Background Image -->
        <div class="main-bg-img bg-img" data-animation="fadeInUpBig" data-delay="200ms" style="background-image: url(./img/bg-img/vacabulary.jpg);"></div>
        <!-- Welcome Text -->
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <div class="welcome-text">
                <h3 data-animation="bounceInUp" data-delay="400ms">Vocabulary 
                  </h3>
                
              </div>
            </div>
          </div>
        </div>
        <!-- Social Info -->
        <div class="social-info">
          <a href="#" data-animation="bounceInDown" data-delay="1000ms"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1100ms"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1200ms"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
          <a href="#" data-animation="bounceInDown" data-delay="1300ms"><i class="fa fa-youtube-play"></i> <span>Youtube</span></a>
        </div>
        <!-- Pager -->
        
      </div>



    </div>
  </section>
  <!-- ***** Welcome Area End ***** -->

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
 

  <!-- ***** Client Feedback Area Start ***** -->
  <section class="clients-feedback-area section-padding-80 clearfix">
    <div class="container" >
      <div class="row justify-content-center">
        <div class="col-12 col-md-10">
          <div class="slider slider-for">

            <!-- Client Feedback Text -->
            <div class="client-feedback-text text-center">
              <div class="quote-icon">
                <i class="icon_quotations" aria-hidden="true"></i>
              </div>
              <div class="client-description text-center">
                <h4>“Whatever your mind can conceive and you believe in,<br> it is possible for you to walk in it.”</h4>
              </div>
             
              <div class="client-name text-center">
                <h5>Aholu Olamide</h5>
                <span>C.E.O Olapearl's Hub</span>
              </div>
            </div>

            <!-- Client Feedback Text -->
            <div class="client-feedback-text text-center">
              <div class="quote-icon">
                <i class="icon_quotations" aria-hidden="true"></i>
              </div>
              <div class="client-description text-center">
                <h4>“To do exploits in life is your heritage.<br> The consciousness of your spirit can push you or stop you”</h4>
              </div>
              
              <div class="client-name text-center">
                <h5>Aholu Olamide</h5>
                <span>C.E.O Olapearl's Hub</span>
              </div>
            </div>

             <!-- Client Feedback Text -->
            <div class="client-feedback-text text-center">
              <div class="quote-icon">
                <i class="icon_quotations" aria-hidden="true"></i>
              </div>
              <div class="client-description text-center">
                <h4>“Don't you ever see yourself as useless. <br> Control your life, give the best that you deserve.<br> Explore the talent inside of you, <br> expand productivity and recognise purpose.”</h4>
              </div>
              
              <div class="client-name text-center">
                <h5>Aholu Olamide</h5>
                <span>C.E.O Olapearl's Hub</span>
              </div>
            </div>

              <!-- Client Feedback Text -->
            <div class="client-feedback-text text-center">
              <div class="quote-icon">
                <i class="icon_quotations" aria-hidden="true"></i>
              </div>
              <div class="client-description text-center">
                <h4>“Time could change but purpose will never change.<br> So, give it all that it takes and get things right. <br> BE INSPIRED! ”</h4>
              </div>
              
              <div class="client-name text-center">
                <h5>Aholu Olamide</h5>
                <span>C.E.O Olapearl's Hub</span>
              </div>
            </div>

            <!-- Client Feedback Text -->
            <div class="client-feedback-text text-center">
              <div class="quote-icon">
                <i class="icon_quotations" aria-hidden="true"></i>
              </div>
              <div class="client-description text-center">
                <h4>“The world awaits you <br>and you have the power to change the world. <br> You are great! All you have to do is to stay with God. <br>The revival is you.  ”</h4>
              </div>
              
              <div class="client-name text-center">
                <h5>Aholu Olamide</h5>
                <span>C.E.O Olapearl's Hub</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Client Thumbnail Area -->
        <div class="col-12 col-md-6 col-lg-5" >
          <div class="slider slider-nav">
            <div class="client-thumbnail">
              
            </div>
            <div class="client-thumbnail">
              
            </div>
            <div class="client-thumbnail">
             
            </div>
            <div class="client-thumbnail">
              
            </div>
            <div class="client-thumbnail">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Client Feedback Area End ***** -->

  <!-- ***** CTA Area Start ***** -->
  <section class="mona-cta-area section-padding-80">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="cta-content">
            <h2>Do You Want To Advertise Your Business?</h2>
            
            <a href="./contact" class="btn mona-btn">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** CTA Area End ***** -->

  <!-- ***** Blog Area Start ***** -->
  <section class="mona-blog-area mb-50 section-padding-80-0">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Latest News</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Single Blog Post -->
        
        <div class="blog-girds-sec">
          <div class="row" style="height:100%; width:auto;">

            <!-- Single Blog Post -->
           <?php getsingleblog("blogs");?>
            

           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Blog Area End ***** -->

<?php include("include/footer.php"); ?>
 
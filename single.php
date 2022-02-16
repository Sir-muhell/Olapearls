<?php require("libs/fetch_data.php");?>
<?php //code to get the item using its id
include("database/conn.php");//database config file
$id=$_REQUEST['id'];
$link  = str_replace('-', ' ', $id);
$query="SELECT * from blogs where `title` LIKE '%$link%'";
$result=mysqli_query($GLOBALS["___mysqli_ston"],$query) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$row = mysqli_fetch_assoc($result);
//pageview count query
$page=$row['title'];
$count="SELECT * FROM page_hits WHERE page='".$page."'";$feedback=mysqli_query($GLOBALS["___mysqli_ston"],$count) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$roo=mysqli_fetch_assoc($feedback);?>
<?php
session_start();
$idd = $row['id'];
$_SESSION["postid"] = $idd;
?>

<?php

$longString =  $row['content'];
$string = substr($longString,0,strpos($longString,' ',50)) . " ...";
?>

<?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
  
  ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=0">
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $string; ?>">
    <meta name="keywords" content="<?php getkeywords("titles");?>">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#017478"> 
    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/core-img/llogo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="<?php echo $row['title']; ?> | <?php getwebname("titles");?>"/>
    <meta property="og:image" content="blogadmin/images/<?php echo $row['photo']; ?>"/>
    <meta property="og:description" content="<?php echo $truncated ?>"/>
    <meta property="og:url" content="<?php echo $url; ?>"/>
    <meta property="og:site_name" content="Olapearl's Hub"/>
      


  
  
  <link rel="manifest" href="manifest.json">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
  

  <!-- Title -->
  <title><?php echo $row['title']; ?> | <?php getwebname("titles");?></title>
  
 

  <style type="text/css">

    .comment-row {
      border-bottom: #e0dfdf 1px solid;
      margin-bottom: 15px;
      padding: 10px;
    }

    .outer-comment {
      background:;
      padding: 10px;
       margin-top: 20px;
      border: #dedddd 1px solid;
    }

    span.commet-row-label {
      font-style: italic;
    }

    .comment-info {
      font-size: 15px;
    }
    .comment-text {
        margin: 5px 0px;
    }
    .btn-reply {
        font-size: 15px;
        cursor:pointer;
    }
    #comment-message {
        margin-left: 10px;
        margin-top: 20px;
        display: none;
    }
    #msgs {
        font-family: cursive;
        font-size: 15px
        margin-left: 10px;
        margin-top: 10px;
        color:red;
    }
  </style>

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
          <a class="nav-brand" href="index.html" style="width:400px"><img src="./img/core-img/newname.png" alt=""></a>

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
                <li class="current-item"><a href="./blog">Blog</a></li>
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

<!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area">
    <div class="container h-100">
      <div class="row h-100 align-items-end">
        <div class="col-12">
          <div class="breadcumb--con">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="./blog.php">Blogs</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $row['title']; ?></li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->


  <!-- ***** Blog Details Area Start ***** -->
  <section class="blog-details-area">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8">
          <div class="blog-details-content mt-5 mb-80">

            <!-- Post Details Text -->
            <div class="post-details-text">
              <img src="blogadmin/images/<?php echo $row['photo']; ?>" class="img-fluid" alt="image not available" style="width:350px;height: 350px;">

              <div class="post-content mt-30 mb-30">
                <a href="#" class="post-date"><?php echo $row['date']; ?></a>
                <h2> <a href="#"><?php echo $row['title']; ?></a></h2>
                <div class="post-meta">
                  <a href="#" class="post-date"><i class="fa fa-tags"></i> <?php  echo $row['tags']; ?></a>
                  

                  <a href="#comment_no" class="post-comments"><i class="fa fa-comments" aria-hidden="true"></i> 
                  <?php 
                  require("database/db_connect.php");
                  $postid=$row['id'];;
                  $sql = "SELECT * FROM comment WHERE post_id = $postid ";
                  $result = $con->query($sql);
                  $rowcount=mysqli_num_rows($result); echo $rowcount ; ?></a>
                </div>
              </div>

             
 


              <p><?php echo $row['content']; ?></p>

              <!-- Post Catagories & Post Share -->
              <div class="d-flex align-items-center justify-content-between">
                <!-- Post Catagories -->
                                <!-- Post Share -->
                <div class="mona-post-share d-flex ">
                  <h4 class="mb-0 mr-3">Share:</h4>
                  <div class="social-info-">

                    <a href="https://api.whatsapp.com/send?text=<?php echo $url;?>" data-action="share/whatsapp/share" data-media="<?php echo $row['photo']; ?>">
                        <span class="fa fa-whatsapp fa-2x"></span></a>
                    <a href="http://www.facebook.com/sharer.php?u=<?php echo $url; ?>"target="_blank" title="Facebook" data-media="<?php echo $row['photo']; ?>">
                        <span class="fa fa-facebook-square fa-2x"></span></a>
                    <a href="http://twitter.com/home?status=<?php echo $url; ?>" target="_blank" title="Twitter" data-media="<?php echo $row['photo']; ?>">
                        <span class="fa fa-twitter-square fa-2x"></span></a>
                    <br><br>
                  </div>
                </div>
              </div>

               <!-- Comments Area -->
                <!-- Leave A Reply -->
              <div class="mona-contact-form">
                <h2 class="mb-4">Leave A Comment</h2>
                <?php
                $postid= echo $row['id'];
                 ?>
                <!-- Form -->
                <form id="frm-comment">
                    <div class="row">
                      <div class="col-lg-6">
                          <input type="hidden" name="comment_id" id="commentId" placeholder="Name" />
                          <input class="form-control mb-15" type="text" name="name" id="name" placeholder="Name" />
                      </div>
                      <div class="col-lg-6 col-md-12 col-sm-12">
                          <input type="email" id="email"  class="form-control mb-15" placeholder="Email">
                      </div>
                      <div class="col-12 col-md-12 col-sm-12">
                          <textarea name="comment" id="comment" type="text" class="form-control mb-15" placeholder="Add a Comment"></textarea>
                      </div>
                      <input type="hidden" id="post_id" name="post_id" value="<?php echo $postid; ?>">
                      <div class="col-12">
                          <div id="msgs"></div>
                          <button type="button" id="submitButton" class="btn mona-btn btn-2 mt-15">Post Comment</button>
                      </div>
                    </div>

                  </form>
                  
                <div class="comment_area mb-50 clearfix">
                    <h5 class="title"><?php 
                    require("database/db_connect.php");
                    $postid= echo $row['id'];
                    $sql = "SELECT * FROM comment WHERE post_id = $postid ";
                    $result = $con->query($sql);
                    $rowcount=mysqli_num_rows($result); echo $rowcount  .' Comment(s)' ; ?></h5>
                    <div id="output"></div>
                </div>
               
              </div>
            </div>
          </div>
        </div>
        <script src="js/jquery.js"></script>
        
        <script src="comment.js"></script>
        <div class="col-12 col-lg-4">
          <div class="sidebar-area mt-5">

            <!-- Single Widget Area -->
            <?php include("include/widget.php"); ?>

            <!-- Single Widget Area -->
            <div class="single-widget-area catagories-widget mb-20" style="padding-left:20px; padding-right: 20px; padding-bottom: 30px">
              <h5 class="widget-title" style="padding-left: 80px;">Older Posts</h5>
                  <!-- catagories list -->
              <ul class="catagories-list">
                <?php getolderposts("blogs");?>
              </ul>
            </div>

            

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Blog Details Area End ***** -->
  
<?php include("include/footer.php"); ?>
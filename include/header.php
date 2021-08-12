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
  <link rel="manifest" href="manifest.json">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">

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


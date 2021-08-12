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
                    <li><a href="./categories">Categories</a></li>
                    <li><a href="./about">About</a></li>
                    <li><a href="./contact">Contact</a></li>
                  </ul>
    
                  <!-- Search Icon -->
                  <div class="search-icon current-item" data-toggle="modal" data-target="#searchModal">
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
                
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Search</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ***** Breadcrumb Area End ***** -->

	<!--/main-->
	<section class="mona-blog-area mb-50 section-padding-40-0">
        <div class="container left-blog-info-w3layouts-agileits text-left">
            <h3 class="tittle">Search Results</h3>
            <div class="inner-sec">
              <?php    
                 $servername = "localhost";
                  $username = "olapearl_blogger";
                  $password = "securemelikekilode";
                  $dbname = "olapearl_blog";
                 // Create connection
                  $con = new mysqli($servername, $username, $password, $dbname);
                  // Check connection
                  if ($con->connect_error) {
                      die("Connection failed: " . $con->connect_error);
                  }
                       
                        // $search_keyword = $_POST['search'];
    
                        if(!empty($_POST['search'])) {
                            $search_keyword = $_POST['search'];
                        }
                        $sql = "SELECT * FROM blogs WHERE title LIKE '%$search_keyword%' OR content LIKE '%$search_keyword%'  OR tags LIKE '%$search_keyword%' OR author LIKE '%$search_keyword%' ORDER BY id DESC ";
                        
                       
                        $result=mysqli_query($con,$sql);
                        $rowcount=mysqli_num_rows($result);
                           
                  
                        
                            if ($rowcount==0) {
       
                            echo "<p style=color:#E9573F><b>Sorry your search for:<u style=color:black>$search_keyword</u> returned zero results</b></p>";
                            echo "<p><b style=color:#717478>Suggestions<b><br><span style=color:#FFA500>Your search item is not available on Our Website<br>Try being more specific with key words<br>Enter key word using title<br>Try search using category<br>Try again later<br></span></p>";
                            echo "<p><a href=\"http://www.google.com/search?q=" 
                            . $search_keyword . "\" target=\"_blank\" title=\"Look up 
                            " . $search_keyword . " on Google\" style=color:#37BC9B>Click here</a> to try the 
                            search on google</p>";
                        }
                        else{
                            echo "<p style=color:#4FC1E9><b>You searched for:<u style=color:black> $search_keyword</u></b></p>";
                            echo "<p style=color:#37BC9B><b>Results($rowcount)..</b></p>";
                        }
                        ?>
                        
                        
                        
                <!--left-->
                <div class="left-blog-info-w3layouts-agileits text-left">
                    <div class="row">
                        <?php
                        if(!empty($result)) { 
                            foreach($result as $row) {
                                ?>
                        <div class="col-lg-8">
                            <div>
                                <a href="single.php?id=<?php echo $row['id']; ?>">
                                    <img src="blogadmin/images/<?php echo $row['photo']; ?>" class="card-img-top img-fluid" alt="fantastic cms" style="width: 350px;height: 250px">
                                </a>
                                <h3 class="post-content">
                                    <a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                                </h3>
                            </div>
                            <ul class="blog-icons">
                                <span class="post-date"><?php echo $row['date']; ?></span>
                                
                                <span class="post-date"><i class="fa fa-tags" style="margin-bottom: 30px"></i> <?php echo $row['tags']; ?></span>
                            </ul>
                        </div>
                        <?php
                                  }
                              }
                              ?>
                              
                              

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
                    <!--//left-->
                </div>

            </div>
        </div>
    </section>

	<!--footer-->
	<?php include("include/footer.php") ?>



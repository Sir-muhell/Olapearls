<?php include("include/cheader.php"); ?>


            <!-- Nav Start -->
            <div class="classynav">
              <ul id="nav">
                <li><a href="index">Home</a></li>
                <li><a href="./blog">Blog</a></li>
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


  <!-- ***** Welcome Area Start ***** -->
  <section class="welcome-area">
    <!-- Welcome Slides -->
   
  <!-- ***** CTA Area Start ***** -->
  <section class="text-center" style="text-align: center; padding-top: 20%; padding-bottom: 20%">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div style="color: ; display: inline-block; margin-top: 50px;">
            <h3>Oh! Snap :( <br>Sorry, you have no access to this page or page doesn't exist.</h3>
            <br>
            
            <a href="#" class="btn mona-btn" onclick="goBack();">Go Back</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** CTA Area End ***** -->

  
  
<script>
function goBack() {
    window.history.back()
}
</script>
 <?php include("include/footer.php"); ?>

 
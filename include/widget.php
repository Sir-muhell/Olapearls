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

           
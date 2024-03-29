<?php 
function gettagline($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Tagline!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $tagline) {
      	# code...
			echo ''.$tagline['tagline'].'';
		}
	}

	mysqli_close($con);
}

function getviews(){
						require("database/db_connect.php");
	                    require ("blogadmin/db.php");
                          $sql="SELECT * FROM page_hits ORDER BY page";

                          if ($result=mysqli_query($con,$sql))
                            {
                            // Return the number of rows in result set
                            $rowcount=mysqli_num_rows($result);
                            printf("%d",$rowcount);
                            // Free result set
                            mysqli_free_result($result);
                            }

                          mysqli_close($con);
}

function geticon($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no icon alert
		if ($rowcount==0) {
      		# code...
			echo 'NoIcon';
		}
      	//if there are rows available display all the results
		foreach ($result as $webicon => $icon) {
      	# code...
			echo ''.$icon['icon'].'';
		}
	}

	mysqli_close($con);
}
function getjavascripts($table){
require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'No script';
		}
      	//if there are rows available display all the results
		foreach ($result as $jsscripts => $js) {
      	# code...
			echo ''.$js['javascript'].'';
		}
	}

	mysqli_close($con);
}
function getsharingscript($table){
require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'No script';
		}
      	//if there are rows available display all the results
		foreach ($result as $sharingscript => $sharing) {
      	# code...
			echo ''.$sharing['sharing_script'].'';
		}
	}

	mysqli_close($con);
}
function getcommentsscript($table){
require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'No script';
		}
      	//if there are rows available display all the results
		foreach ($result as $commentsscript => $csript) {
      	# code...
			echo ''.$csript['comments_script'].'';
		}
	}

	mysqli_close($con);
}
function getshortdescription($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $sdc) {
      	# code...
			echo ''.$sdc['short_description'].'';
		}
	}

	mysqli_close($con);
}
function getcontacts($table,$num){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $contacts) {
      	# code...num
			if ($num==1) {
				# code...
				echo ''.$contacts['address'].'';
			}
			elseif ($num==2) {
				# code...
				echo ''.$contacts['email'].'';
			}
			elseif ($num==3) {
				# code...
				echo ''.$contacts['phone'].'';
			}
			elseif ($num==4) {
				# code...
				echo ''.$contacts['googlemap'].'';
			}
		
		}
	}

	mysqli_close($con);
}
function getdetaileddescription($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $sdc) {
      	# code...
			echo ''.$sdc['detailed_description'].'';
		}
	}

	mysqli_close($con);
}
function countcategories(){
	require("database/db_connect.php");
	$sql="SELECT * FROM blog_categories LIMIT 10";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Categories!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $categoriescount => $categorydata) {
				#count how many times each category appears in blogs
			$categoryid=$categorydata['id'];
			$sql="SELECT * FROM blogs WHERE category='$categoryid'";
			if ($result=mysqli_query($con,$sql)) {
					# code...
				$rowcountcategory=mysqli_num_rows($result);
				$getcatcount=$rowcountcategory;
			}
					# code...show data
			echo
			'<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>'.$categorydata['name'].'&nbsp;'.$rowcountcategory.'</a></li>';
		}
	}

	mysqli_close($con);
}
function getbannertext($table,$position){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Hello World!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $bannertext) {
      	# code...
			if ($position==1) {
					# code...
				echo ''.$bannertext['bannertext1'].'';
			}
			elseif ($position==2) {
					# code...
				echo ''.$bannertext['bannertext2'].'';
			}
			elseif ($position==3) {
					# code...
				echo ''.$bannertext['bannertext3'].'';
			}
			elseif ($position==4) {
					# code...
				echo ''.$bannertext['bannertext4'].'';
			}
		}
	}

	mysqli_close($con);
}
function getwebname($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Name!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $blogname) {
      	# code...
			echo ''.$blogname['website_name'].'';
		}
	}

	mysqli_close($con);
}
function getkeywords($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Nothing';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $keywords) {
      	# code...
			echo ''.$keywords['keywords'].'';
		}
	}

	mysqli_close($con);
}
function getlinks($table,$platform){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo '#';
		}
      	//if there are rows available display all the results
		foreach ($result as $link => $site) {
      	# code...
			if ($platform=="facebook") {
					# code...
				echo ''.$site['facebook'].'';
			}
			elseif ($platform=="twitter") {
					# code...
				echo ''.$site['twitter'].'';
			}
			elseif ($platform=="googleplus") {
					# code...
				echo ''.$site['googleplus'].'';
			}
			elseif ($platform=="pinterest") {
					# code...
				echo ''.$site['pinterest'].'';
			}
			elseif ($platform=="dribble") {
					# code...
				echo ''.$site['dribble'].'';
			}

		}
	}

	mysqli_close($con);
}

function getcategoriesmenu($table)
{
	require("database/db_connect.php");
	$sql="SELECT * FROM $table";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no categories alert
		if ($rowcount==0) {
      		# code...
			echo 'No Categories';
		}
      	//if there are rows available display all the results
		foreach ($result as $blog_categories => $category) {
				$url = $category['name'];
      	$url = strtolower($url);
      	$link  = str_replace(' ', '-', $url);
			// echo '<a class="dropdown-item" href="category.php?id='.$category['id'].'">'.$category['name'].'</a>
			// <div class="dropdown-divider"></div>';
      	
			echo'<li><a href="cat/'.$link.'"><i class="fa fa-angle-double-right" aria-hidden="true"></i>'.$category['name'].'</li></a>';
		}
	}

	mysqli_close($con);
}


function getcategories($table)
{
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no categories alert
		if ($rowcount==0) {
      		# code...
			echo 'No Categories';
		}
      	//if there are rows available display all the results
		foreach ($result as $blog_categories => $category) {
      	# code...
			// echo '<a class="dropdown-item" href="category.php?id='.$category['id'].'">'.$category['name'].'</a>
			// <div class="dropdown-divider"></div>';

			echo'<li><a href="category.php?id='.$category['id'].'">'.$category['name'].'</li>';
		}
	}

	mysqli_close($con);
}


function getbottomsliderposts($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id DESC LIMIT 3";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $sliderposts => $slideritem) {
      	# code...fetch actual category from categories table
			$category_id=$slideritem['category'];
			$sql="SELECT * FROM blog_categories WHERE id='$category_id'";
			if ($result=mysqli_query($con,$sql))
			{
				foreach ($result as $results => $actualcategory) {
					$ctgry=$actualcategory['name'];
				}
			}
				#code...display the results
			echo '<li>
			<div class="blog-item">
			<img src="blogadmin/images/'.$slideritem['photo'].'" alt="fantastic cms" class="img-fluid" style="width:450px;height:350px"/>
			<button type="button" class="btn btn-primary play">
			<a href="single.php?id='.$slideritem['id'].'" style="text-decoration:none;color:white"><i class="fas fa-eye"></i></a>
			</button>
			<div class="floods-text">
			<h3>'.$slideritem['title'].'
			<span>'.$ctgry.'
			<label>|</label>
			<i>'.$slideritem['author'].'</i>
			</span>
			</h3>

			</div>
			</div>
			</li>';
		}
	}

	mysqli_close($con);
}


function getblogridposts($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id DESC LIMIT 10";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $bloggrid => $griditem) {
			$url = $griditem['title'];
			$url = strtolower($url);
			$link  = str_replace('?', '', $url);
			$link  = str_replace(';', '', $link);
      $link  = str_replace(' ', '-', $link);
			echo '<div class="col-md-6 blog-grid-top text-center">
			<div class="b-grid-top  ">
			<div class="blog_info_left_grid ">
			<a href="./'.$link.'">
			<img src="blogadmin/images/'.$griditem['photo'].'" class="img-fluid" alt="" style="width:350px;height:350px">
			</a>
			</div>
			<div class="post-content">
			<h3>
			<a href="./'.$link.'" class="post-title">'.$griditem['title'].'</a>
			</h3>
			</div>
			<ul class="blog-icons">
			<span class="post-date">'.$griditem['date'].'</span>
			</div>
			<span class="post-date"><i class="fa fa-tags" style="margin-bottom: 30px"></i> '.$griditem['tags'].'</span>
			

			</ul>
			</div>';
		}
	}

	mysqli_close($con);

}
function getolderposts($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id DESC LIMIT 5 OFFSET 1";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $olderposts => $op) {
      	$url = $op['title'];
      	$url = strtolower($url);
      	$link  = str_replace('?', '', $url);
				$link  = str_replace(';', '', $link);
      	$link  = str_replace(' ', '-', $link);
			echo '
              <div class="single-news-area d-flex">
                <div class="blog-thumbnail">
                  <a href="./'.$link.'"><img src="blogadmin/images/'.$op['photo'].'" class="img-fluid" alt="Image is not available" style="width:100px;height:70px"></a>
                </div>
                <div class="blog-content">
                  <a href="./'.$link.'" class="post-title">'.$op['title'].'</a>
                  <span class="post-date"> '.$op['date'].'</span>
                </div>
              </div>
			';


		}
	}

	mysqli_close($con);
}
function getfour($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ORDER BY id DESC LIMIT 4";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $thefour => $fourdata) {
      	# code...
			echo '<li>
			<a href="blogadmin/images/'.$fourdata['photo'].'">
			<img src="blogadmin/images/'.$fourdata['photo'].'" alt="fantastic cms" data-desoslide-caption="<h3>Latest Post '.$fourdata['id'].'</h3>">
			<div class="mid-text-info">
			<h4 style="height:40px;overflow:hidden;text-overflow:ellipsis">'.$fourdata['title'].'</h4>
			<p>'.$fourdata['author'].'</p>
			<div class="sub-meta">
			<span>
			<i class="far fa-clock"></i> '.$fourdata['date'].'</span>
			</div>
			</div>
			</a>
			</li>';
		}
	}

	mysqli_close($con);
}
function getonelatest($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ORDER BY id DESC LIMIT 1";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $onelatest => $onedata) {
      	# code...
			echo '<div class="blog-grid-top">
			<div class="b-grid-top">
			<div class="blog_info_left_grid">
			<a href="single.php?id='.$onedata['id'].'">
			<img src="blogadmin/images/'.$onedata['photo'].'" class="img-fluid" alt="fantastic cms" style="width:900px;height:500px">
			</a>
			</div>
			<div class="blog-info-middle">
			<ul>
			<li>
			<a href="#">
			<i class="far fa-calendar-alt"></i> '.$onedata['date'].'</a>
			</li>
			<li class="mx-2">
			<a href="#">
			<i class="far fa-check"></i> '.$onedata['tags'].'</a>
			</li>
			<li>
			<a href="#">
			<i class="far fa-user"></i> '.$onedata['author'].'</a>
			</li>

			</ul>
			</div>
			</div>

			<h3>
			<a href="single.php?id='.$onedata['id'].'">'.$onedata['title'].'</a>
			</h3>
			<a href="single.php?id='.$onedata['id'].'" class="btn btn-primary read-m">Read More</a>
			</div>';
		}
	}

	mysqli_close($con);
}


function getsingleblog($table){
			require("database/db_connect.php");
	$sql="SELECT * FROM $table ORDER BY id DESC LIMIT 3";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $onelatest => $onedata) {
      $url = $onedata['title'];
      $url = strtolower($url);
      $link  = str_replace('?', '', $url);
			$link  = str_replace(';', '', $link);
      $link  = str_replace(' ', '-', $link);
			echo '
			<div class="col-md-4 blog-grid-top text-center">
			<div class="b-grid-top  ">
			<div class="blog_info_left_grid ">
              <div class="single-blog-post  mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="post-thumbnail">
                  <a href="./'.$link.'"><img style="width:350px;height: 350px" src="blogadmin/images/'.$onedata['photo'].'" alt="Img is not available"></a>
                </div>
                <div class="post-content">
                  <div>
                    <a href="./'.$link.'" class="post-title">'.$onedata['title'].'</a>
                    <span class="post-date">'.$onedata['date'].'</span>
                  </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>';
        }
    }

    mysqli_close($con);
			
   			 
	}


function geteditorschoice($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ORDER BY id DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $edschoice => $choice) {
			#get actual blog post data
			$postid=$choice['blog'];
			$sql="SELECT * FROM blogs WHERE id='$postid'";
			if ($result=mysqli_query($con,$sql)) {
				# code...
				foreach ($result as $posts => $postdata) {
					# code...display actual posts
					echo '<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.php?id='.$postdata['id'].'">
										<img src="blogadmin/images/'.$postdata['photo'].'" class="img-fluid" alt="fantastic cms">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.php?id='.$postdata['id'].'"> '.$postdata['title'].'</a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> '.$postdata['date'].'</span>
									</div>
								</div>
								
							</div>';
				}
			}
      	# code...
		}
	}

	mysqli_close($con);
}
function getcategoryblogs($table,$id){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE category='$id' ORDER BY id DESC LIMIT 10";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo ' No Blogs To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $categories => $cdata) {
      $url = $cdata['title'];
      $url = strtolower($url);
      $link  = str_replace('?', '', $url);
			$link  = str_replace(';', '', $link);
      $link  = str_replace(' ', '-', $link);
			echo '<div class="col-md-6 blog-grid-top text-center">
			<div class="b-grid-top  ">
			<div class="blog_info_left_grid ">
			<a href="./'.$link.'">
			<img src="blogadmin/images/'.$cdata['photo'].'" class="img-fluid" alt="" style="width:350px;height:350px">
			</a>
			</div>
			<div class="post-content">
			<h3>
			<a href="./'.$link.'" class="post-title">'.$cdata['title'].'</a>
			</h3>
			</div>
			<ul class="blog-icons">
			<span class="post-date">'.$cdata['date'].'</span>
			</div>
			<span class="post-date"><i class="fa fa-tags" style="margin-bottom: 30px"></i> '.$cdata['tags'].'</span>
			

			</ul>
			</div>';



			

			
		}
	}

	mysqli_close($con);
}
function getpopularposts($table){
	require("database/db_connect.php");
	#get most viewed 3 pages from pagehits
	$sql="SELECT * FROM $table ORDER BY count DESC LIMIT 3";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Pots To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $pagehits => $hits) {
      	# code...get actual blog from blogs db
			$storepage=$hits['page'];
			$sql="SELECT * FROM blogs WHERE title='$storepage'";
			if ($result=mysqli_query($con,$sql)) {
				# code...
				foreach ($result as $allblogs => $specificblog) {
					# code...display the results
					echo '<div class="blog-grids row mb-3">
							<div class="col-md-5 blog-grid-left">
								<a href="single.php?id='.$specificblog['id'].'">
									<img src="blogadmin/images/'.$specificblog['photo'].'" class="img-fluid" alt="fantastic cms">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.php?id='.$specificblog['id'].'">'.$specificblog['title'].' </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> '.$specificblog['date'].'</span>
								</div>
							</div>
							
						</div>';
				}
			}
		}
	}

	mysqli_close($con);

}


?>

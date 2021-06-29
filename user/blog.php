<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
<link rel="apple-touch-startup-image" href="images/apple-touch-startup-image-640x920.png">
<title>SfR - sports facilities reservation</title>
<link rel="stylesheet" href="css/swiper.css">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,900" rel="stylesheet"> 
</head>
<body id="mobile_wrap">

    <div class="panel-overlay"></div>

    <div class="panel panel-left panel-reveal">
                  <!-- Slider -->
                 <div class="swiper-container-subnav multinav">
                    <div class="swiper-wrapper">
			<div class="swiper-slide">		
            <nav class="main_nav_underline">
				<ul>
				<li><a href="index.php"><img src="images/icons/gray/home.png" alt="" title="" /><span>Home</span></a></li>
				<li><a href="blog.php"><img src="images/icons/gray/tabs.png" alt="" title="" /><span>Blog</span></a></li>
				<li><a href="dribbble.php"><img src="images/icons/gray/dribbble.png" alt="" title="" /><span>Reservation</span></a></li>
				<li><a href="message.php"><img src="images/icons/gray/message.png" alt="" title="" /><span>Pesan</span></a></li>
				<li><a href="#" data-panel="right" class="open-panel"><img src="images/icons/gray/user.png" alt="" title="" /><span>User</span></a></li>
				
				</ul>
				</nav>
			</div>	
			
		    </div>
		</div>
    </div>

    <div class="panel panel-right panel-reveal">
      <div class="user_login_info">
	  
                <div class="user_thumb">
           
                  <div class="user_details">
                   <p>Welcome, <span>Nathalie</span></p>
                  </div>  
                  <div class="user_avatar"><img src="images/avatar3.jpg" alt="" title="" /></div>       
                </div>
				
                  <nav class="user-nav">
                  <ul>
                      <!-- <li><a href="features.html"><img src="images/icons/gray/settings.png" alt="" title="" /><span>Account Settings</span></a></li>
                      <li><a href="features.html"><img src="images/icons/gray/briefcase.png" alt="" title="" /><span>My Account</span></a></li>
                      <li><a href="features.html"><img src="images/icons/gray/message.png" alt="" title="" /><span>Messages</span><strong>12</strong></a></li>
					  <li><a href="features.html"><img src="images/icons/gray/love.png" alt="" title="" /><span>Favorites</span><strong>5</strong></a></li> -->
					    <li><a href="index.php"><img src="images/icons/gray/home.png" alt="" title="" /><span>Home</span></a></li>
						<li><a href="blog.php"><img src="images/icons/gray/tabs.png" alt="" title="" /><span>Blog</span></a></li>
						<li><a href="form.php"><img src="images/icons/gray/dribbble.png" alt="" title="" /><span>Reservation</span></a></li>
						<li><a href="more.php"><img src="images/icons/gray/more.png" alt="" title="" /><span>History</span></a></li>
                        <li><a href="logout.php"><img src="images/icons/gray/lock.png" alt="" title="" /><span>Logout</span></a></li>
                    </ul>
                  </nav>
      </div>
    </div>

    <div class="views">

      <div class="view view-main">
<div class="pages">
  <div data-page="blog" class="page">
    <div class="page-content">
    
		<div class="navbar navbar--fixed navbar--fixed-top navbar--bg">
			<div class="navbar__col navbar__col--title">
				<a href="index.php">SfR</a>
			</div>
			<div class="navbar__col navbar__col--icon navbar__col--icon-right">
				<a href="#" data-panel="left" class="open-panel"><img src="images/icons/white/menu.png" alt="" title="" /></a>
			</div>
                </div>
	
     <div id="pages_maincontent">
     <a href='index.php'class='btn btn--half' style='margin-top:10px; margin-left:15px;'>< Back</a>
      <h2 class="page_title">LATEST NEWS</h2>
     <div class="page_single layout_fullwidth_padding">  
   

              <ul class="posts">

                <?php
                // Create database connection using config file
                include_once("koneksi.php");

                // Fetch all users data from database
                $sql = "SELECT * FROM blog ORDER BY id DESC";
                $result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));
                            
                    while($blog = mysqli_fetch_array($result)) {  
                        echo "<li class='swipeout'>";
                        echo "<div class='swiper-wrapper'>";
                        echo "<div class='swiper-slide swipeout-content item-content'>";
                        echo "<div class='post_entry'>";
                        echo "<div class='post_thumb'><img src='images/photos/".$blog['picture']."' alt='' title='' /></div>";
                        echo "<div class='post_details'>";
                        echo "<div class='post_category'><a href='#' data-popup='.popup-".$blog['url']."' class='open-popup' data-view='.view-main'>".$blog['title']."</a></div>";
                        echo "<h2><a href='#' data-popup='.popup-".$blog['url']."' class='open-popup' data-view='.view-main'>".$blog['intro']."</a></h2>";
                        echo "</div>";
                        echo "<div class='post_swipe'><img src='images/swipe_more.png' alt='' title='' /></div>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='swiper-slide swipeout-actions-right'>";
                        echo "<a href='#' class='action1'><img src='images/icons/white/message.png' alt='' title='' /></a>";
                        echo "<a href='#' class='action1 open-popup' data-popup='.popup-social'><img src='images/icons/white/like.png' alt='' title='' /></a>";
                        echo "<a href='#' class='action1 open-popup' data-popup='.popup-social'><img src='images/icons/white/contact.png' alt='' title='' /></a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</li>";

                    }
                            
                ?>

					<!-- <li class="swipeout">
						   <div class="swiper-wrapper">		
								  <div class="swiper-slide swipeout-content item-content">
										<div class="post_entry">
											<div class="post_thumb"><img src="images/photos/photo8.jpg" alt="" title="" /></div>
											<div class="post_details">
											  <div class="post_category"><a href="blog-single.html">DESIGN</a></div>				
														<h2><a href="blog-single.html">Design is not just what it looks like and feels like.</a></h2>
											  </div>
											<div class="post_swipe"><img src="images/swipe_more.png" alt="" title="" /></div>
										</div>
								  </div>
								  <div class="swiper-slide swipeout-actions-right">
										<a href="#" class="action1"><img src="images/icons/white/message.png" alt="" title="" /></a>
										<a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="images/icons/white/like.png" alt="" title="" /></a>
										<a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="images/icons/white/contact.png" alt="" title="" /></a>
								  </div>
						  </div>
                    </li> -->
                    
              </ul>
              
            <!-- <div id="loadMore" class="btn btn--full">LOAD MORE</div> 
            <div id="showLess">END</div>  -->
      
			
       </div>		
      
      </div>
      
      
    </div>
  </div>
</div>

         </div>
    </div>

    <!-- PopUp -->
	<?php
    // Create database connection using config file
    include_once("koneksi.php");

    // Fetch all users data from database
    $sql = "SELECT * FROM blog ORDER BY id DESC";
    $result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));
                        
        while($blog = mysqli_fetch_array($result)) {  
			echo "<div class='popup popup-".$blog['url']."'>";
			echo "<div class='content-block'>";
                echo "<h4>".$blog['title']."</h4>";
                echo "<div class='post_thumb' style='padding-right:1cm;'><img src='images/photos/".$blog['picture']."' alt='' title='' /></div>";
				echo "<p style='text-align:justify;'>".$blog['detail']."</p>";
				echo "<div class='close_popup_button'><a href='#' class='close-popup' data-popup='.popup-".$blog['url']."'><img src='images/icons/black/menu_close.png' alt='' title='' /></a></div>";
			echo "</div>";
			echo "</div>";
        }
                        
    ?>

    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.validate.min.js" ></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.custom.js"></script>
  </body>
</html>
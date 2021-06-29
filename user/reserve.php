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
                   <p>Welcome, <span><?php echo $_SESSION['username']; ?></span></p>
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
  <div data-page="team" class="page">
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
      
         <!-- <h2 class="page_title">FACILITIES</h2> -->
          <div class="page_single layout_fullwidth_padding">
  
		  <div class="swiper-container-team">
			
        <!-- <div class="swiper-wrapper">

        <?php
              // Create database connection using config file
              include_once("koneksi.php");

              // Fetch all users data from database
              $sql = "SELECT * FROM facilities ORDER BY id ASC";
              $result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));
                          
                  while($facilities = mysqli_fetch_array($result)) {  
                      echo "<div class='swiper-slide team-block'>";
                      echo "<a href='#' data-popup='.popup-".$facilities['css']."' class='open-popup' data-view='.view-main'><img src='images/".$facilities['picture']."' alt='' title='' /></a></br><span>".$facilities['facilities_name']."</span>";
                      echo "</div>";
                  }
                          
              ?>
          
        </div> -->
			  <!-- <div class="swiper-pagination-team"></div> -->
		  </div>
   </div>
	 <h2 class="page_title">SELECT YOUR LOCATION</h2>	  
   <div class="page_single layout_fullwidth_padding">  
		  <div class="swiper-container-teambigger">
			
			<div class="swiper-wrapper">

			<?php
            // Create database connection using config file
            include_once("koneksi.php");

            // Fetch all users data from database
            $sql = "SELECT * FROM location ORDER BY id ASC";
            $result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));
                        
                while($loc = mysqli_fetch_array($result)) {  
					// echo "<a href='#' data-popup='.popup-".$facilities['css']."' class='open-popup' data-view='.view-main'><img src='images/".$facilities['picture']."' alt='' title='' /></a></br><span>".$facilities['facilities_name']."</span>";
                    // echo "</div>";
                    echo "<div class='swiper-slide team-block'>";
                    echo "<a href='reserve-field.php?loc=".$loc['id']."' data-view='.view-main'><img src='images/".$loc['picture']."' alt='' title='' /></a>";
                    echo "<strong>".$loc['location_name']."</strong>";
                    echo "<a href='reserve-field.php?loc=".$loc['id']."' data-view='.view-main'><span>RESERV NOW</span></a>";
                    echo "</div>";
                }
                        
            ?>

			</div>
			<div class="swiper-pagination-teambigger"></div>
      </div> 
      
      <a href='index.php'class='btn btn--full' style='margin-top:15px;'>Back</a>

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
    $sql = "SELECT * FROM facilities ORDER BY id ASC";
    $result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));
                        
        while($facilities = mysqli_fetch_array($result)) {  
            // echo "<div class='swiper-slide team-block'>";
            // echo "<a href='#' data-popup='.popup-".$facilities['css']."' class='open-popup' data-view='.view-main'><img src='images/".$facilities['picture']."' alt='' title='' /></a></br><span>".$facilities['facilities_name']."</span>";
			// echo "</div>";
			echo "<div class='popup popup-".$facilities['css']."'>";
			echo "<div class='content-block'>";
				echo "<h4>".$facilities['facilities_name']."</h4>";
				echo "<p>".$facilities['desc']."</p>";
				echo "<div class='close_popup_button'><a href='#' class='close-popup' data-popup='.popup-".$facilities['css']."'><img src='images/icons/black/menu_close.png' alt='' title='' /></a></div>";
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
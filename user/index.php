<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
</html>
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

    <!-- <div class="panel panel-left panel-reveal">
                  
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
    </div> -->

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

          <div data-page="index" class="page homepage">
            <div class="page-content">
			
		<div class="navbar navbar--fixed navbar--fixed-top">
			<div class="navbar__col navbar__col--title">
				<a href="index.php">SfR</a>
			</div>
			<!-- <div class="navbar__col navbar__col--icon navbar__col--icon-right">
				<a href="#" data-panel="left" class="open-panel"><img src="images/icons/white/menu.png" alt="" title="" /></a>
			</div>			 -->
                </div>

                  <!-- Slider -->
                 <div class="swiper-container slidertoolbar">
                    <div class="swiper-wrapper">
                    
                      <div class="swiper-slide" style="background-image:url(images/slide1.jpg);">
                        <div class="slider-caption">
                            <h2 data-swiper-parallax="-100%" class="title--white">Reservation</>
                            <p data-swiper-parallax="-30%" style="color:white;">Pilih jadwal sesukamu tanpa harus mengantri, dan tentunya menghemat waktumu.</p>
                        </div>
                      </div> 
                      
                      <div class="swiper-slide" style="background-image:url(images/slide2.jpg);">
                        <div class="slider-caption">
                            <h2 data-swiper-parallax="-100%" class="title--white">Sports Facilities</>
                            <p data-swiper-parallax="-30%" class="text--white">Nikmati beragam fasilitas lengkap, dengan harga yang sesuai dengan jadwal gajianmu.</p>
                        </div>	
                      </div>

                      <div class="swiper-slide" style="background-image:url(images/slide3.jpg);">
                        <div class="slider-caption">
                          <h2 data-swiper-parallax="-100%" style="color:white;">Reservation</h2>
                          <p data-swiper-parallax="-30%" style="color:white;">Pilih jadwal sesukamu tanpa harus mengantri, dan tentunya menghemat
                            waktumu.</p>
                        </div>
                      </div>

                      <div class="swiper-slide" style="background-image:url(images/slide4.jpg);">
                        <div class="slider-caption">
                          <h2 data-swiper-parallax="-100%" class="title--white">Sports Facilities</h2>
                          <p data-swiper-parallax="-30%" class="text--white">Nikmati beragam fasilitas lengkap, dengan harga
                            yang sesuai dengan jadwal gajianmu.</p>
                        </div>

                      </div>
                      
                  
        </div> 		   
                      </div>
                      <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>	
                    </div>
			  
		 <div class="swiper-container-toolbar swiper-toolbar">
			<div class="swiper-pagination-toolbar"></div>
			<div class="swiper-wrapper">
			  <div class="swiper-slide toolbar-icon">
				<a href="index.php"><img src="images/icons/blue/home.png" alt="" title="" />Home</a>
				<a href="blog.php"><img src="images/icons/blue/tabs.png" alt="" title="" />Blog</a>
				<a href="reserve.php"><img src="images/icons/blue/dribbble.png" alt="" title="" />Reservation</a>
				<a href="more.php"><img src="images/icons/blue/more.png" alt="" title="" />History</a>
				<a href="#" data-panel="right" class="open-panel"><img src="images/icons/blue/user.png" alt="" title="" />Account</a>
			    
			  </div>

			</div>
		  </div>	

            </div>
          </div>
        </div>

      </div>
    </div>
    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.validate.min.js" ></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.custom.js"></script>
  </body>
</html>
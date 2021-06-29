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
                  <p>Welcome, <span><?php echo $_SESSION['username']; ?></span></p>
                  </div>  
                  <div class="user_avatar"><img src="images/avatar3.jpg" alt="" title="" /></div>       
                </div>
				
                  <nav class="user-nav">
                    <ul>
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
  <div data-page="tables" class="page">
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
     
              <h2 class="page_title"></h2> 
     
     <div class="page_single layout_fullwidth_padding">
              
                <h3>Price table</h3>
                <ul class="responsive_table">
                     <li class="table_row">
                        <div class="table_section_small">&nbsp;</div>
                        <div class="table_section">Member Category</div>
                        <div class="table_section">Price</div> 
                     </li>
                    <?php
                    // Create database connection using config file
                    include_once("koneksi.php");

                    // Fetch all users data from database
                    $sql = "SELECT * FROM price WHERE field_id='1' ORDER BY id ASC";
                    $result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));
                        
                        while($price = mysqli_fetch_array($result)) {         
                            echo "<li class='table_row'>";
                            echo "<div class='table_section_small'>#</div>";
                            echo "<div class='table_section'>".$price['category']."</div>";
                            echo "<div class='table_section'>".$price['price']." / ".$price['type']."</div>";
                            echo "</li>";
                        }
                        
                    ?>
                </ul>

                <p>*Harga dapat berubah sewaktu-waktu.</p>
                
                <h3 style="padding-top:1cm;">Select your member category</h3>
                <ul class="responsive_table">
                    <?php
                    // Create database connection using config file
                    include_once("koneksi.php");

                    // Fetch all users data from database
                    $result = mysqli_query($mysqli, "SELECT * FROM price WHERE field_id='1' ORDER BY id ASC");
                        
                        while($price = mysqli_fetch_array($result)) {   
                            echo "<a href='".$price['url']."' class='btn btn--full'>".$price['category']."</a> ";
                        }
                        
                    ?>
                </ul>
              
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
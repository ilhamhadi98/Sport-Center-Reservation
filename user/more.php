<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
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
                   <!-- <p>Welcome, <span>Nathalie</span></p> -->
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
  <div data-page="features" class="page">
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
          <h2 class="page_title">RESERVATION HISTORY</h2>
	  
    <div class="page_single layout_fullwidth_padding">  
	  
    <ul class="features_list_detailed">

                    <?php
                    // Create database connection using config file
                    include_once("koneksi.php");

                    $username = $_SESSION['username'];

                    // Fetch all users data from database
                    $sql = "SELECT * FROM reservation WHERE username='$username' ORDER BY id DESC";
                    $result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));
                        
                        while($reserv = mysqli_fetch_array($result)) {  
                            if ($reserv['status'] == "Menunggu pembayaran"){
                                echo "<li>";       
                                // echo "<div class='feat_small_icon'><img src='images/icons/black/electronics.png' alt='' title='' /></div>";       
                                echo "<div class='feat_small_details'>";  
                                echo "<h4><a href='update-pembayaran.php?id=".$reserv['id']."'>ID RESERVATION : ".$reserv['id']."</a></h4>";  
                                echo "<a href='update-pembayaran.php?id=".$reserv['id']."'>Status reservation : ".$reserv['status']."</a>";  
                                echo "</div>";  
                                echo "</li>";  
                            } else if ($reserv['status'] == "Sudah dibayar"){
                                echo "<li>";       
                                // echo "<div class='feat_small_icon'><img src='images/icons/black/electronics.png' alt='' title='' /></div>";       
                                echo "<div class='feat_small_details'>";  
                                echo "<h4><a href='status.php?id=".$reserv['id']."'>ID RESERVATION : ".$reserv['id']."</a></h4>";  
                                echo "<a href='status.php?id=".$reserv['id']."'>Status reservation : ".$reserv['status']."</a>";  
                                echo "</div>";  
                                echo "</li>";   
                            } else if ($reserv['status'] == "Dibatalkan"){
                                echo "<li>";       
                                // echo "<div class='feat_small_icon'><img src='images/icons/black/electronics.png' alt='' title='' /></div>";       
                                echo "<div class='feat_small_details'>";  
                                echo "<h4><a href='status.php?id=".$reserv['id']."'>ID RESERVATION : ".$reserv['id']."</a></h4>";  
                                echo "<a href='status.php?id=".$reserv['id']."'>Status reservation : ".$reserv['status']."</a>";  
                                echo "</div>";  
                                echo "</li>";   
                            } else if ($reserv['status'] == "Disetujui"){
                                echo "<li>";       
                                // echo "<div class='feat_small_icon'><img src='images/icons/black/electronics.png' alt='' title='' /></div>";       
                                echo "<div class='feat_small_details'>";  
                                echo "<h4><a href='status.php?id=".$reserv['id']."'>ID RESERVATION : ".$reserv['id']."</a></h4>";  
                                echo "<a href='status.php?id=".$reserv['id']."'>Status reservation : ".$reserv['status']."</a>";  
                                echo "</div>";  
                                echo "</li>";   
                            } else {
                                echo "<li>";       
                                // echo "<div class='feat_small_icon'><img src='images/icons/black/electronics.png' alt='' title='' /></div>";       
                                echo "<div class='feat_small_details'>";  
                                echo "<h4><a href='status.php?id=".$reserv['id']."'>ID RESERVATION : ".$reserv['id']."</a></h4>";  
                                echo "<a href='status.php?id=".$reserv['id']."'>Status reservation : ".$reserv['status']."</a>";  
                                echo "</div>";  
                                echo "</li>";
                            }
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
<script src="js/swiper.custom.js"></script>
<script src="js/jquery.custom.js"></script>
  </body>
</html>
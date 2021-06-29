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
                  <p>Welcome, <span><?php //echo $_SESSION['username']; ?></span></p>
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
  <div data-page="form" class="page">
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

     <h2 class="page_title">SCHEDULE FOR <?php echo $day=$_POST['date'];?></h2>
	  
    <div class="page_single layout_fullwidth_padding">  
	  
    <ul class="features_list_detailed">

                    <?php
                    // Create database connection using config file
                    include_once("koneksi.php");

                    $loc_id=$_POST['location_id'];
                    $fld_id=$_POST['field_id'];
                    $prc_id=$_POST['price_id'];
                    $day=$_POST['date'];

                    // Fetch all users data from database
                    $sql = "SELECT * FROM reservation WHERE location_id='$loc_id' AND field_id='$fld_id' AND price_id='$prc_id' AND start_date='$day'  AND status='Disetujui' ORDER BY start_time ASC";
                    $result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));
                        
                        while($reserv = mysqli_fetch_array($result)) {  
                            echo "<li>";      
                            echo "<div class='feat_small_details'>";  
                            echo "<h4><a href='#'>BOOKED BY : ".$reserv['username']."</a></h4>";  
                            echo "<a href='#'>Time : ".$reserv['start_time']." - ".$reserv['end_time']."</a>";  
                            echo "</div>";  
                            echo "</li>";  
                        }
                        
                    ?>
	          
      </ul>
       </div>
     
              <h2 class="page_title">RESERVATION DETAIL</h2> 
     
     <div class="page_single layout_fullwidth_padding">

                <div class="contactform">
                <form action="reservation-action.php" class="" id="CustomForm" method="post">

                <input type="hidden" name="location_id" value="<?php echo $loc_id=$_POST['location_id']; ?>" class="form_input" readonly>
                <input type="hidden" name="field_id" value="<?php echo $fld_id=$_POST['field_id']; ?>" class="form_input" readonly>
                <input type="hidden" name="price_id" value="<?php echo $prc_id=$_POST['price_id']; ?>" class="form_input" readonly>
                <input type="hidden" name="date" value="<?php echo $day=$_POST['date']; ?>" class="form_input" readonly>

                <div class="form_row">
                <label>Name:</label>
                <input type="text" name="name" value="" class="form_input">
                </div>
                
                <div class="form_row">
                <label>Email:</label>
                <input type="text" name="email" value="" class="form_input required email">
                </div>

                <div class="form_row">
                <label>Mobile:</label>
                <input type="text" name="mobile" value="" class="form_input">
                </div>
                
                <div class="form_row">
                <label>Start Time:</label>
                <input type="time" name="start_time" value="" class="form_input">
                </div>

                <div class="form_row">
                <label>End Time:</label>
                <input type="time" name="end_time" value="" class="form_input">
                </div>
                
                <input type="submit" name="Submit" class="form_submit" id="submit" value="Send">
                </form>

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
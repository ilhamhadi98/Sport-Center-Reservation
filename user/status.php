
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
        <div data-page="success" class="page">
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

    <?php
    // Getting id from url
    $id = $_GET['id'];

    // include database connection file
    include_once("koneksi.php");

    // Fetch all users data from database
    $sql = "SELECT * FROM reservation WHERE id='$id' ";
    $result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));

    // // Fetech user data based on id
    // $result = mysqli_query($mysqli, "SELECT * reservation WHERE id=$id");

    while($reserv = mysqli_fetch_array($result))
    {
        $id = $reserv['id'];
        $name = $reserv['name'];
        $email = $reserv['email'];
        $mobile = $reserv['mobile'];
        $start_date = $reserv['start_date'];
        $start_time = $reserv['start_time'];
        $end_time = $reserv['end_time'];
        $field_id = $reserv['field_id'];
        $price_id = $reserv['price_id'];
        $status = $reserv['status'];

        if ($status == "Dibatalkan"){
            echo "<div class='page_single layout_fullwidth_padding'>";
            echo "<div class='success_message'>";
            echo "<span>Maaf!</span>";
            echo "<img src='images/icons/black/menu_close.png' alt='' title='' />";
            echo "<p>Reservasi kamu telah dibatalkan.</p>";
            echo "<br>";
            echo "<a href='more.php' class='btn btn--full'>CLOSE</a> ";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        } else if ($status == "Sudah dibayar") {
            echo "<div class='page_single layout_fullwidth_padding'>";
            echo "<div class='success_message'>";
            echo "<span>Terima kasih!</span>";
            echo "<img src='images/icons/black/like.png' alt='' title='' />";
            echo "<p>Mohon menunggu sampai status transaksi disetujui oleh admin.</p>";
            echo "<br>";
            echo "<a href='more.php' class='btn btn--full'>CLOSE</a> ";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        } else if ($status == "Disetujui") {
            echo "<div class='page_single layout_fullwidth_padding'>";
            echo "<div class='success_message'>";
            echo "<span>Terima kasih!</span>";
            echo "<img src='images/icons/black/favorites.png' alt='' title='' />";
            echo "<p>Reservasi kamu telah disetujui, mohon untuk menunjukan pesan ini ketika datang!</p>";
            echo "<hr>";
            echo "<p>ID RESERVATION : ".$id."</p>";
            echo "<p>NAMA : ".$name."</p>";
            echo "<p>TANGGAL MAIN : ".$start_date."</p>";
            echo "<p>JAM : ".$start_time." - ".$end_time."</p>";
            echo "<hr>";
            echo "<br>";
            echo "<a href='more.php' class='btn btn--full'>CLOSE</a> ";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        } else {
            echo "<div class='page_single layout_fullwidth_padding'>";
            echo "<div class='success_message'>";
            echo "<span>Maaf!</span>";
            echo "<img src='images/icons/black/menu_close.png' alt='' title='' />";
            echo "<p>ID yang kamu masukan salah, silahkan melakukan reservasi</p>";
            echo "<br>";
            echo "<a href='more.php' class='btn btn--full'>CLOSE</a> ";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    }

    ?>
      
      
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
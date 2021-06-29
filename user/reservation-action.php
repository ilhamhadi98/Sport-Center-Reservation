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
     
              <h2 class="page_title">CONFIRM YOUR RESERVATION DETAIL</h2> 
     
     <div class="page_single layout_fullwidth_padding">

     <h4 class="checkout_title">YOUR DETAILS</h4>
                <div class="contactform">
                <form action="reservation-success.php" class="" id="CustomForm" method="post">

                <input type="hidden" name="location_id" value="<?php echo $loc_id=$_POST['location_id']; ?>" class="form_input" readonly>
                <input type="hidden" name="field_id" value="<?php echo $fld_id=$_POST['field_id']; ?>" class="form_input" readonly>
                <input type="hidden" name="price_id" value="<?php echo $prc_id=$_POST['price_id']; ?>" class="form_input" readonly>
                <input type="hidden" name="date" value="<?php echo $day=$_POST['date']; ?>" class="form_input" readonly>
                <input type="hidden" name="name" value="<?php echo $name=$_POST['name']; ?>" class="form_input" readonly>
                <input type="hidden" name="start_date" value="<?php echo $start_date=$_POST['date']; ?>" class="form_input" readonly>
                <input type="hidden" name="email" value="<?php echo $email=$_POST['email']; ?>" class="form_input" readonly>
                <input type="hidden" name="mobile" value="<?php echo $mobile=$_POST['mobile']; ?>" class="form_input" readonly>
                <input type="hidden" name="start_time" value="<?php echo $start_time=$_POST['start_time']; ?>" class="form_input" readonly>
                <input type="hidden" name="end_time" value="<?php echo $end_time=$_POST['end_time']; ?>" class="form_input" readonly>


                <div class="form_row">
                <label>Name: </label>
                <input type="text" name="n" value="<?php echo $n=$_POST['name']; ?>" class="form_input" readonly>
                </div>
				
                <div class="form_row">
                <label>Email: </label>
                <input type="text" name="e" value="<?php echo $e=$_POST['email']; ?>" class="form_input" readonly>
                </div>
				
                <div class="form_row">
                <label>Mobile: </label>
                <input type="text" name="m" value="<?php echo $m=$_POST['mobile']; ?>" class="form_input" readonly>
                </div>

                <h4 class="checkout_title" style="margin-top:20px;">ORDER DETAILS</h4>

                <div class="carttotal_full">
                    <div class="carttotal_row_full">
                    <div class="carttotal_left">LOCATION</div>  <div class="carttotal_right"><?php 
                                                        include_once("koneksi.php");
                                                        $loc_id=$_POST['location_id']; 

                                                        $result = mysqli_query($mysqli, "SELECT * FROM location WHERE id='$loc_id' ORDER BY id ASC");
                                                        while($loc = mysqli_fetch_array($result)) {   
                                                            echo $loc['location_name'];
                                                        }
                                                        ?></div>
                    </div>
                    <div class="carttotal_row_full">
                    <div class="carttotal_left">FIELD TYPE</div>  <div class="carttotal_right"><?php 
                 
                 include_once("koneksi.php");
                 $fld_id=$_POST['field_id'];

                 $result = mysqli_query($mysqli, "SELECT * FROM field WHERE id='$fld_id' ORDER BY id ASC");
                 while($field = mysqli_fetch_array($result)) {   
                     echo $field['field_name'];
                 }
                ?></div>
                    </div>
                    <div class="carttotal_row_full">
                    <div class="carttotal_left">YOUR MEMBER</div>  <div class="carttotal_right"><?php 
                
                include_once("koneksi.php");
                $prc_id=$_POST['price_id'];

                $result = mysqli_query($mysqli, "SELECT * FROM price WHERE id='$prc_id' ORDER BY id ASC");
                while($price = mysqli_fetch_array($result)) {   
                    echo $price['category'];
                }
                ?></div>
                    </div>
                    <div class="carttotal_row_full">
                    <div class="carttotal_left">DATE</div>  <div class="carttotal_right"><?php echo $d=$_POST['date']; ?></div>
                    </div>
                    <div class="carttotal_row_full">
                    <div class="carttotal_left">TIME</div>  <div class="carttotal_right"><?php echo $ts=$_POST['start_time']; ?> - <?php echo $te=$_POST['end_time']; ?></div>
                    </div>

                    <?php 
                      include_once("koneksi.php");
                      $prc_id=$_POST['price_id'];

                      $result = mysqli_query($mysqli, "SELECT * FROM price WHERE id='$prc_id' ORDER BY id ASC");
                      while($price = mysqli_fetch_array($result)) {   
                      
                      $price['price'];
                          
                      $st = strtotime($_POST['start_time']);
                      $et = strtotime($_POST['end_time']);
                          
                      $selisih = $st - $et;
                      $jam = floor($selisih/(60*60));
                      $menit = $selisih - $jam * (60*60);
                          
                      //hitung harga perjam
                      $totalmainperjam = $jam * $price['price'];
                      $hpj = abs($totalmainperjam);

                      //hitung harga permenit
                      $hitungpermenit = $price['price'] / 60;
                      $hargapermenit = round($hitungpermenit);
                      $totalpermenit = floor( $menit / 60 );
                      $totalmainpermenit = $hargapermenit * $totalpermenit;
                      $hpm = abs($totalmainpermenit);

                      $total = $hpj + $hpm;

                      $total_harga = "Rp " . number_format($total,2,',','.');

                      // echo "<div class='form_row'>";
                      // echo "<label>Harga: ".$total_harga."</label>";
                      // // echo "<input type='text' value=".$total_harga." class='form_input' readonly>";
                      // echo "</div>";


                      echo "<div class='carttotal_row_last'>";
                      echo "<div class='carttotal_left'>TOTAL</div> <div class='carttotal_right'>".$total_harga."</div>";
                      echo "</div>";
                      }
                    ?>
                      
                </div> 

                <input type="submit" name="Submit" class="form_submit" id="submit" onclick="return cfrm()" value="Send">
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

<script>
function cfrm() {
  return confirm("Apakah data yang dimasukan sudah benar?");
}
</script>
  </body>
</html>
<?php
// include database connection file
include_once("koneksi.php");

//konfigurasi file

if (isset($_POST['update'])){
    $x=$_POST['x'];
    $foto         =$_FILES['picture']['tmp_name'];
    $foto_name     =$_FILES['picture']['name'];
    $acak        = rand(1,99);
    $tujuan_foto = $acak.$foto_name;
    $tempat_foto = 'images/pembayaran/'.$tujuan_foto;
    
    $id = $_POST['id'];
    $s = "Sudah dibayar";

        if (!$foto==""){
            $buat_foto=$tujuan_foto;
            $d = 'images/pembayaran/'.$x;
            @unlink ("$d");
            copy ($foto,$tempat_foto);
        }else{
            $buat_foto=$x;
        }

                    // Fetch all users data from database
                    $sql = "UPDATE reservation SET picture='$buat_foto', status='$s' WHERE id='$id'";
                    $result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));
                   
            echo "<script language='javascript'>alert('Data Berhasil Diupdate')</script>";
            echo "<script>document.location='more.php';</script>";
            }

// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

include_once("koneksi.php");

// Fetch all users data from database
$sql = "SELECT * FROM reservation WHERE id='$id' ";
$result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));

// // Fetech user data based on id
// $result = mysqli_query($mysqli, "SELECT * reservation WHERE id=$id");

while($reserv = mysqli_fetch_array($result))
{
    $name = $reserv['name'];
    $email = $reserv['email'];
    $mobile = $reserv['mobile'];
    $start_date = $reserv['start_date'];
    $start_time = $reserv['start_time'];
    $end_time = $reserv['end_time'];
    $field_id = $reserv['field_id'];
    $price_id = $reserv['price_id'];
    $location_id = $reserv['location_id'];
    // $qty = $reserv['qty'];
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
     
              <h2 class="page_title">UPDATE BUKTI PEMBAYARAN</h2> 
     
     <div class="page_single layout_fullwidth_padding">

     <h4 class="checkout_title">YOUR DETAILS</h4>

                <div class="contactform">
                <form action="update-pembayaran.php" enctype="multipart/form-data" class="" id="CustomForm" method="post">
                <div class="form_row">
                <label>Name:</label>
                <input type="text" name="name" value=<?php echo $name;?> readonly class="form_input">
                </div>
                
                <div class="form_row">
                <label>Email:</label>
                <input type="text" name="email" value=<?php echo $email;?> readonly class="form_input required email">
                </div>

                <div class="form_row">
                <label>Mobile:</label>
                <input type="text" name="mobile" value=<?php echo $mobile;?> readonly class="form_input">
                </div>

                <h4 class="checkout_title" style="margin-top:20px;">ORDER DETAILS</h4>

                <div class="carttotal_full">
                    <div class="carttotal_row_full">
                    <div class="carttotal_left">LOCATION</div>  <div class="carttotal_right"><?php 
                                                        include_once("koneksi.php");
                                                        $loc_id= $location_id; 

                                                        $result = mysqli_query($mysqli, "SELECT * FROM location WHERE id='$loc_id' ORDER BY id ASC");
                                                        while($loc = mysqli_fetch_array($result)) {   
                                                            echo $loc['location_name'];
                                                        }
                                                        ?></div>
                    </div>
                    <div class="carttotal_row_full">
                    <div class="carttotal_left">FIELD TYPE</div>  <div class="carttotal_right"><?php 
                 
                 include_once("koneksi.php");
                 $fld_id=$field_id;

                 $result = mysqli_query($mysqli, "SELECT * FROM field WHERE id='$fld_id' ORDER BY id ASC");
                 while($field = mysqli_fetch_array($result)) {   
                     echo $field['field_name'];
                 }
                ?></div>
                    </div>
                    <div class="carttotal_row_full">
                    <div class="carttotal_left">YOUR MEMBER</div>  <div class="carttotal_right"><?php 
                
                include_once("koneksi.php");
                $prc_id=$price_id;

                $result = mysqli_query($mysqli, "SELECT * FROM price WHERE id='$prc_id' ORDER BY id ASC");
                while($price = mysqli_fetch_array($result)) {   
                    echo $price['category'];
                }
                ?></div>
                    </div>
                    <div class="carttotal_row_full">
                    <div class="carttotal_left">DATE</div>  <div class="carttotal_right"><?php echo $start_date; ?></div>
                    </div>
                    <div class="carttotal_row_full">
                    <div class="carttotal_left">TIME</div>  <div class="carttotal_right"><?php echo $start_time; ?> - <?php echo $end_time; ?></div>
                    </div>

                    <?php 
                      include_once("koneksi.php");
                      $prc_id=$price_id;

                      $result = mysqli_query($mysqli, "SELECT * FROM price WHERE id='$prc_id' ORDER BY id ASC");
                      while($price = mysqli_fetch_array($result)) {   
                      
                      $price['price'];
                          
                      $st = strtotime($start_time);
                      $et = strtotime($end_time);
                          
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

                      echo "<div class='carttotal_row_last'>";
                      echo "<div class='carttotal_left'>TOTAL</div> <div class='carttotal_right'>".$total_harga."</div>";
                      echo "</div>";
                      }
                    ?>
                      
                </div> 
				
                <!-- <div class="form_row">
                <label>Date:</label>
                <input type="date" name="start_date" value=<?php echo $start_date;?> readonly class="form_input">
                </div>
                
                <div class="form_row">
                <label>Start Time:</label>
                <input type="time" name="start_time" value=<?php echo $start_time;?> readonly class="form_input">
                </div>

                <div class="form_row">
                <label>End Time:</label>
                <input type="time" name="end_time" value=<?php echo $end_time;?> readonly class="form_input">
                </div>

                <div class="form_row">
                <label>Field:</label>
                <input type="text" name="field_id" value=<?php echo $field_id;?> readonly class="form_input">
                </div>

                <div class="form_row">
                <label>Price:</label>
                <input type="text" name="price_id" value=<?php echo $price_id;?> readonly class="form_input">
                </div> -->

                <h4 class="checkout_title">UPLOAD INVOICE</h4>

                <div class="form_row" style='margin-bottom:20px;'>
                <label>Invoice:</label>
                    <input type="file" name="picture" value='<?php echo $price_id;?>'>
                    <input type="hidden" name="x" value='<? echo "$img";?>'>
                </div>
                
                <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                <input type="submit" name="update" value="Update" class="btn btn--full" style='margin-bottom:10px;'>
                
                <a href='batal.php?id=<?php echo $id; ?>'class='btn btn--full' style='margin-top:0px;'>Cancel</a>

                <a href='more.php'class='btn btn--full' style='margin-top:15px;'>Back</a>
                
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
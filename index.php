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
  <style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
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
              <li><a href="index.php"><img src="images/icons/gray/home.png" alt="" title="" /><span>Home</span></a>
              </li>

              <li><a href="about.php"><img src="images/icons/gray/mobile.png" alt="" title="" /><span>About</span></a>
              </li>

              <!-- <li><a href="#" data-popup=".popup-login" class="open-popup"><img src="images/icons/gray/lock.png" alt=""
                    title="" /><span>Login</span></a></li> -->

              <li><a href="contact.php"><img src="images/icons/gray/contact.png" alt=""
                    title="" /><span>Contact</span></a></li>
            </ul>
          </nav>
        </div>

      </div>
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
              <div class="navbar__col navbar__col--icon navbar__col--icon-right">
                <a href="#" data-panel="left" class="open-panel"><img src="images/icons/white/menu.png" alt=""
                    title="" /></a>
              </div>
            </div>

            <!-- Slider -->
            <div class="swiper-container slidertoolbar" style="padding-bottom: 0,5px;">
              <div class="swiper-wrapper">

                <div class="swiper-slide" style="background-image:url(images/slide1.jpg);">

                  <div class="slider-caption">

                    <h2 data-swiper-parallax="-100%" style="color:white;">Reservation</h2>
                    <p data-swiper-parallax="-30%" style="color:white;">Pilih jadwal sesukamu tanpa harus mengantri, dan tentunya menghemat
                      waktumu.</p>
                    <a href="#" data-popup=".popup-login" class="slider-caption__more open-popup"
                      data-swiper-parallax="-60%">LOGIN NOW</a>
                      <?php 
                      if(isset($_GET['pesan'])){
                        if($_GET['pesan']=="gagal"){
                          echo "<div class='alert' style='color:white; margin-top:10px;'><strong>Username dan Password tidak sesuai !</strong></div>";
                        }
                      }
                      ?>
                  </div>
                </div>

                <div class="swiper-slide" style="background-image:url(images/slide2.jpg);">

                  <div class="slider-caption">

                    <h2 data-swiper-parallax="-100%" class="title--white">Sports Facilities</h2>
                    <p data-swiper-parallax="-30%" class="text--white">Nikmati beragam fasilitas lengkap, dengan harga
                      yang sesuai dengan jadwal gajianmu.</p>
                    <a href="#" data-popup=".popup-login" class="slider-caption__more open-popup"
                      data-swiper-parallax="-60%">LOGIN NOW</a>
                  </div>

                </div>

                <div class="swiper-slide" style="background-image:url(images/slide3.jpg);">

                  <div class="slider-caption">

                    <h2 data-swiper-parallax="-100%" style="color:white;">Reservation</h2>
                    <p data-swiper-parallax="-30%" style="color:white;">Pilih jadwal sesukamu tanpa harus mengantri, dan tentunya menghemat
                      waktumu.</p>
                    <a href="#" data-popup=".popup-login" class="slider-caption__more open-popup"
                      data-swiper-parallax="-60%">LOGIN NOW</a>
                  </div>
                </div>

                <div class="swiper-slide" style="background-image:url(images/slide4.jpg);">

                  <div class="slider-caption">

                    <h2 data-swiper-parallax="-100%" class="title--white">Sports Facilities</h2>
                    <p data-swiper-parallax="-30%" class="text--white">Nikmati beragam fasilitas lengkap, dengan harga
                      yang sesuai dengan jadwal gajianmu.</p>
                    <a href="#" data-popup=".popup-login" class="slider-caption__more open-popup"
                      data-swiper-parallax="-60%">LOGIN NOW</a>
                  </div>

                </div>

              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Login Popup -->
  <div class="popup popup-login">
    <div class="content-block">
      <h4>LOGIN</h4>
      <div class="loginform">
        <form id="LoginForm" method="post" action="cek_login.php">
          <input type="text" name="username" value="" class="form_input required" placeholder="username" />
          <input type="password" name="password" value="" class="form_input required" placeholder="password" />
          <!-- <div class="forgot_pass"><a href="#" data-popup=".popup-forgot" class="open-popup">Forgot Password?</a></div> -->
          <input type="submit" name="submit" class="form_submit" id="submit" value="SIGN IN" />
        </form>
        <div class="signup_bottom">
          <p>Don't have an account?</p>
          <a href="#" data-popup=".popup-signup" class="open-popup">SIGN UP</a>
        </div>
      </div>
      <div class="close_popup_button">
        <a href="#" class="close-popup" data-popup=".popup-login"><img src="images/icons/black/menu_close.png" alt=""
            title="" /></a>
      </div>
    </div>
  </div>

  <!-- Register Popup -->
  <div class="popup popup-signup">
    <div class="content-block">
      <h4>REGISTER</h4>
      <div class="loginform">
        <form id="RegisterForm" action="index.php" method="post">
          <input type="text" name="nama" value="" class="form_input required" placeholder="Name" />
          <input type="text" name="username" value="" class="form_input required" placeholder="Username" />
          <input type="password" name="password" value="" class="form_input required" placeholder="Password" />
          <input type="submit" name="Submit" class="form_submit" value="SIGN UP" />
        </form>
        <?php

        // Check If form submitted, insert form data into users table.
        if(isset($_POST['Submit'])) {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $level = "user";

            // include database connection file
            include_once("connect.php");

            // Insert user data into table
            $result = mysqli_query($mysqli, "INSERT INTO user(nama, username, password, level) VALUES('$nama','$username','$password', '$level')");

        }
        ?>
      </div>
      <div class="close_popup_button">
        <a href="#" class="close-popup" data-popup=".popup-signup"><img src="images/icons/black/menu_close.png" alt=""
            title="" /></a>
      </div>
    </div>
  </div>



  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/jquery.custom.js"></script>
</body>

</html>
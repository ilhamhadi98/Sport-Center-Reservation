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
        <div data-page="contact" class="page">
          <div class="page-content">

            <div class="navbar navbar--fixed navbar--fixed-top navbar--bg">
              <div class="navbar__col navbar__col--title">
                <a href="index.php">SfR</a>
              </div>
              <div class="navbar__col navbar__col--icon navbar__col--icon-right">
                <a href="#" data-panel="left" class="open-panel"><img src="images/icons/white/menu.png" alt=""
                    title="" /></a>
              </div>
            </div>

            <div id="pages_maincontent">

              <h2 class="page_title">CONTACT</h2>

              <div class="page_single layout_fullwidth_padding">

                <h2 id="Note"></h2>
                <div class="contactform">
                  <form class="" id="ContactForm" method="post" action="">
                    <label>Name:</label>
                    <input type="text" name="ContactName" id="ContactName" value="" class="form_input required" />
                    <label>Email:</label>
                    <input type="text" name="ContactEmail" id="ContactEmail" value=""
                      class="form_input required email" />
                    <label>Message:</label>
                    <textarea name="ContactComment" id="ContactComment" class="form_textarea textarea required" rows=""
                      cols=""></textarea>
                    <input type="submit" name="submit" class="form_submit" id="submit" value="Send" />
                    <input class="" type="hidden" name="to" value="youremail@yourwebsite.com" />
                    <input class="" type="hidden" name="subject" value="Contacf form message" />
                    <label id="loader" style="display:none;"><img src="images/loader.gif" alt="Loading..."
                        id="LoadingGraphic" /></label>
                  </form>
                </div>

                <h3>Our Location</h3>

                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193578.74109041138!2d-73.97968099999997!3d40.70331274999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York+NYC%2C+New+York%2C+Statele+Unite+ale+Americii!5e0!3m2!1sro!2s!4v1425027721891"
                  width="100%" height="200" frameborder="0" style="border:0"></iframe>

                <blockquote>
                  Adress: New York 23066 / Pacific Street / Brooklyn <br />
                  Email: email@yourwebsite.com <br />
                  Mobile: +900 456 567 77
                </blockquote>

                <a href="tel:+900 456 567 77" class="btn btn--full">Call Us Now!</a>

                <div class="clear"></div>
              </div>

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
        <form id="LoginForm" method="post">
          <input type="text" name="Username" value="" class="form_input required" placeholder="username" />
          <input type="password" name="Password" value="" class="form_input required" placeholder="password" />
          <div class="forgot_pass"><a href="#" data-popup=".popup-forgot" class="open-popup">Forgot Password?</a></div>
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
        <form id="RegisterForm" method="post">
          <input type="text" name="Username" value="" class="form_input required" placeholder="Username" />
          <input type="text" name="Email" value="" class="form_input required" placeholder="Email" />
          <input type="password" name="Password" value="" class="form_input required" placeholder="Password" />
          <input type="submit" name="submit" class="form_submit" id="submitregister" value="SIGN UP" />
        </form>
        <h5>- OR REGISTER WITH A SOCIAL ACCOUNT -</h5>
        <div class="signup_social">
          <a href="http://www.facebook.com/" class="signup_facebook">FACEBOOK</a>
          <a href="http://www.twitter.com/" class="signup_twitter">TWITTER</a>
        </div>
      </div>
      <div class="close_popup_button">
        <a href="#" class="close-popup" data-popup=".popup-signup"><img src="images/icons/black/menu_close.png" alt=""
            title="" /></a>
      </div>
    </div>
  </div>

  <!-- Forgot Password Popup -->
  <div class="popup popup-forgot">
    <div class="content-block">
      <h4>FORGOT PASSWORD</h4>
      <div class="loginform">
        <form id="ForgotForm" method="post">
          <input type="text" name="Email" value="" class="form_input required" placeholder="email" />
          <input type="submit" name="submit" class="form_submit" id="submitforgot" value="RESEND PASSWORD" />
        </form>
        <div class="signup_bottom">
          <p>Check your email and follow the instructions to reset your password.</p>
        </div>
      </div>
      <div class="close_popup_button">
        <a href="#" class="close-popup" data-popup=".popup-forgot"><img src="images/icons/black/menu_close.png" alt=""
            title="" /></a>
      </div>
    </div>
  </div>

  <!-- Social Icons Popup -->
  <div class="popup popup-social">
    <div class="content-block">
      <h4>Social Share</h4>
      <p>Share icons solution that allows you share and increase your social popularity.</p>
      <ul class="social_share">
        <li><a href="http://twitter.com/"><img src="images/icons/black/twitter.png" alt=""
              title="" /><span>TWITTER</span></a></li>
        <li><a href="http://www.facebook.com/"><img src="images/icons/black/facebook.png" alt=""
              title="" /><span>FACEBOOK</span></a></li>
        <li><a href="http://plus.google.com"><img src="images/icons/black/gplus.png" alt=""
              title="" /><span>GOOGLE</span></a></li>
        <li><a href="http://www.dribbble.com/"><img src="images/icons/black/dribbble.png" alt=""
              title="" /><span>DRIBBBLE</span></a></li>
        <li><a href="http://www.linkedin.com/"><img src="images/icons/black/linkedin.png" alt=""
              title="" /><span>LINKEDIN</span></a></li>
        <li><a href="http://www.pinterest.com/"><img src="images/icons/black/pinterest.png" alt=""
              title="" /><span>PINTEREST</span></a></li>
      </ul>
      <div class="close_popup_button"><a href="#" class="close-popup" data-popup=".popup-social"><img
            src="images/icons/black/menu_close.png" alt="" title="" /></a></div>
    </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/email.js"></script>
  <script src="js/jquery.custom.js"></script>
</body>

</html>
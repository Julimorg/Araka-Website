<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Css file -->
    <link rel="stylesheet" href="{{asset('assest/css/index.css')}}">
    <!-- Js file -->
    <script src="{{asset('assest/js/index.js')}}"></script>
</head>
<body>
    <!-- == HEADER PAGE == -->
    <div id="header">
        <!-- LOGO ICON -->
        <div id="logo">
            <img src="{{asset('assest/img/415791565_1101418471001982_6189920452808394444_n.png')}}" alt="" class="logoimg">
        </div>
        <div id="nav">
            <ul class="subnav">
                <!-- Button -->
                <li><a href="./homepage.blade.php">
                    <button class="btn bgrk#E2E2E2"> 
                        <span>Đăng nhập</span>
                    </button>
                </a></li>
                <li><a href="#">
                    <button class="btn btn2 bgrk2"> 
                        <span>Bắt đầu học miễn phí</span>
                    </button>
                </a></li>
            </ul>
        </div>
    </div>
    <!-- Slider -->
    <div id="slider">
        <!-- Text - heading -->
    <div class="text-heading">
            <h2 class="text-name">Học lập trình để</h2>
            <!-- Side Scroll Text -->
        <div class="items">
            <div class="item item1">
                 <h2 class="text-section">chinh phục<br>trái tim</h2>
            </div>
           <div class="item item2">
                 <h2 class="text-section">vượt qua<br>đối thủ</h2>
           </div> 
            <div class="item item3">
                <h2 class="text-section">gia tăng<br>điểm mạnh</h2>
            </div>  
        </div>
        </div>
          <!-- Starting to Learn button -->
          <a href="">
            <button class="start_btn">
                <p>
                    Bat dau hoc ngay
                </p>
                <div class="icon_send">
                    <i class="fa-regular fa-paper-plane"></i>
                </div>
            </button>
        </a>
    </div>
    <!-- Content  -->
    <div id="content">
        <div class="special_content">
            <div class="heading_name"></div>
            <div class="content_item">
                <div class="special_item">
                    <a href="">
                        <img src="" alt="">
                    </a>
                </div>
                <div class="special_item">
                    <a href="">
                        <img src="" alt="">
                    </a>
                </div>
                <div class="special_item">
                    <a href="">
                        <img src="" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- == FOOTER PAGE == -->
    <div id="footerPage">
        <footer>
            <div class="container text-center text-md-left col-third">
              <div class="footer-wrap">
                <!-- Item 1 -->
                <div class="about">
                    <!-- Logo Icon -->
                  <img src="{{asset('assest/img/415791565_1101418471001982_6189920452808394444_n.png')}}" alt="" class="imgIcon">
                  <p class="text-muted py-4">
                    Digital experience is </br>always embedded in </br> a physical experience.
                </div>
                <!-- Item 2 -->
                <div class="Service">
                  <h6 class="fw-bold special_name">Services</h6>
                  <p class="p10"><a href="">Web Hosting</a></p>
                  <p class="p10"><a href="" >Domains</a></p>
                  <p class="p10"><a href="">Premium Hosting</a></p>
                  <p class="p10"><a href="">Private Server</a></p>
                  <p class="p10"><a href="">E-mail Hosting</a></p>
                </div>
                <!-- Item 3 -->
                <div class="Follow_us">
                  <h6 class="fw-bold special_name">Follow Us</h6>
                <p class="p10">
                    <a href="">
                    <i class="fa-brands fa-facebook-f"></i>
                    Facebook
                     </a>
                </p>
                <p class="p10">
                    <a href="">
                        <i class="fa-brands fa-twitter"></i>
                    Twitter
                    </a>
                </p>
                <p class="p10">
                    <a href="">
                    <i class="fa-brands fa-instagram"></i>
                    Instagram
                    </a>
                </p>
                <p class="p10">
                    <a href="">
                    <i class="fa-brands fa-linkedin-in"></i>
                    Linkedin
                    </a>
                </p>
                </div>
                <!-- Item 4 -->
                <div class="Contact">
                  <h6 class="fw-bold special_name">Contact Us</h6>
                  <p class="p10"><a href="">@gmail.com</a></p>
                </div>
                
              </div>
            </div>
        </footer>
    </div>
    
    
</body>
<script src = "./script/java.js"></script>
</html>
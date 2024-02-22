<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <!-- Font icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Css File -->
    <link rel="stylesheet" href="{{asset('assest/css/homepage.css')}}">
    <!-- Js File -->
    <script src="{{asset('assest/js/homepage.js')}}" defer></script>
    
<body>
            <!-- == HEADER == -->
<div id="header">
    <!-- Logo Icon -->
    <div id="logo">
        <img src="{{asset('assest/img/415791565_1101418471001982_6189920452808394444_n.png')}}" alt="" class="logoImg" >
    </div>
    <!-- Search Box -->
    <div class="search-box">                
        <input required type="search" class="searchTerm" placeholder="Find Something...." >
        <button class="searchButton">
          <i class="fa fa-search"></i>
       </button>
    </div>
    <!-- Right - infomation -->
    <div class="subnav">
        <!-- myCourse Button -->
        <a href="./index.html" class="myCourse_btn">
            <button class="btn bgrk#E2E2E2"> 
                <span>Khóa học của tôi</span>
            </button>
        </a>
        <!-- Shopping -->
        <div class="shopping_container">
            <div class="shopCart_icon">
                <i class="fa-solid fa-cart-shopping shoppingCart"></i>
            </div>
        <!-- Shopping Box -->
        </div>
       <!-- Notification -->
        <div class="notification_container">
             <!-- Bell Icon -->
            <button class="bellIcon">
                <svg viewBox="0 0 448 512" class="bell"><path d="M224 0c-17.7 0-32 14.3-32 32V49.9C119.5 61.4 64 124.2 64 200v33.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416H424c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4V200c0-75.8-55.5-138.6-128-150.1V32c0-17.7-14.3-32-32-32zm0 96h8c57.4 0 104 46.6 104 104v33.4c0 47.9 13.9 94.6 39.7 134.6H72.3C98.1 328 112 281.3 112 233.4V200c0-57.4 46.6-104 104-104h8zm64 352H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z"></path></svg>
            </button>
            <!-- Notice Box -->
            <div class="notificaiont_box">
                <div class="dropdow dropdown-1">
                    <ul class="notiBox_menu notiBox_menu-1">
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- Profile User -->
        <div class="user_container menu">
            <!--User Avatar -->
             <div class="profileAvatar">
                <img src="{{asset('assest/img/423221567_7135333573191069_509031383483258617_n.png')}}" alt="" class="AvaImg" >
                <!-- Profile drop Down -->
            <div class="dropdown dropdown-1">
                <ul class="dropdown_menu dropdown_menu-1">
                 <li class="dropdown_item"><a href="">Trang Cá Nhân</a></li>
                 <li class="dropdown_item"><a href="">Danh Sách Yêu Thích</a></li>
                 <li class="dropdown_item"><a href="">Cài Đặt</a></li>
                 <li class="dropdown_item"><a href="">Đăng Xuất</a></li>
                </ul>
            </div>
            </div>
        </div>
    </div>    
</div>
            <!-- == CONTENT == -->
<div id="content">
    <!-- Side-bar Menu -->
    <div id="sidebar_menu">
        <div class="sub_sidebar">
            <ul class="select_topic">
            <li>
                <a href="">
                     <!-- Button 1 -->
                    <button class="menu_btn">
                        <!-- icon -->
                        <div class="icon"> 
                            <i class="fa-solid fa-house icon1"></i>
                        </div>
                        <span class="button-content">Trang Chủ </span>
                    </button>                      
                </a>
            </li>
            
            <li>
                <a href=""> 
                     <!-- Button 2 -->
                    <button class="menu_btn">
                        <!-- icon -->
                        <div class="icon"> 
                            <i class="fa-solid fa-arrow-trend-up icon1"></i>
                        </div>
                        <span class="button-content">Khóa học </span>
                     </button>
                </a>
            </li>
            <li>
                <a href="">
                    <!-- Button 3 -->
                     <button class="menu_btn">
                        <!-- icon -->
                        <div class="icon"> 
                            <i class="fa-solid fa-arrow-trend-up icon1"></i>
                        </div>
                        <span class="button-content">Môn học</span>
                     </button>
                </a>
            </li>
            <li>
                <a href="">
                    <!-- Button 4 -->
                    <button class="menu_btn">
                        <!-- icon -->
                        <div class="icon"> 
                            <i class="fa-solid fa-arrow-trend-up icon1"></i>
                        </div>
                        <span class="button-content">Bài viết </span>
                    </button>
                </a>
            </li>
            <li>
                <a href="">
                    <!-- Button 5 -->
                    <button class="menu_btn">
                        <!-- icon -->
                        <div class="icon"> 
                            <i class="fa-solid fa-phone icon1"></i>
                        </div>
                        <span class="button-content">Liên hệ </span>
                    </button>
                </a>
            </li>
            </ul>
              <!-- Content Page -->
    <div id="main_content">
        <!-- Slider Course -->
        <div class="slide_course">
            <!-- Slider Item -->
            <div class="slider">
                <!-- Img item -->
                <div class="list">
                    <div class="item">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="">
                    </div>
                </div>
                <!-- Ti right and left button -->
                <div class="buttons">
                    <button id="prev">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button id="next">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
                <!-- Dots events -->
                <ul class="dots">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <!-- Slide Content 1 -->
            <div class="slide_content">
            <div class="slide_name">
                <h1>Khoa Hoc</h1>
                <a href="#" class="">
                    <button class="slide_btn"> 
                        <span>
                            Tất cả các khóa học
                        </span>
                    </button>
                </a>
            </div>
            <!-- Content Course 1 -->
            <div class="content_course">
                <!--  -->
                <div class="content_item">
                    <div class="container">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="" class="itemCourse">
                        <!-- Heart Icon -->
                        <a href="#">
                            <div class="heart_icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </a>
                        <!-- Starting Button -->
                        <a href="#" class="">
                            <button class="start_btn"> 
                                <h4>
                                    Bắt đầu học
                                </h4>
                                <div class="forward_icon">
                                <i class="fa-solid fa-forward"></i>
                                </div>
                            </button>
                        </a>
                      </div>
                    <h3>HTML,CSS pro</h3>
                    <p>Ten Tac Gia</p>
                    <p>80000000+</p>
                </div>     
                <div class="content_item">
                    <div class="container">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="" class="itemCourse">
                        <!-- Heart Icon -->
                        <a href="#">
                            <div class="heart_icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </a>
                        <!-- Starting Button -->
                        <a href="#" class="">
                            <button class="start_btn"> 
                                <h4>
                                    Bắt đầu học
                                </h4>
                                <div class="forward_icon">
                                <i class="fa-solid fa-forward"></i>
                                </div>
                            </button>
                        </a>
                      </div>
                    <h3>HTML,CSS pro</h3>
                    <p>Ten Tac Gia</p>
                    <p>80000000+</p>
                </div>     
                <div class="content_item">
                    <div class="container">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="" class="itemCourse">
                        <!-- Heart Icon -->
                        <a href="#">
                            <div class="heart_icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </a>
                        <!-- Starting Button -->
                        <a href="#" class="">
                            <button class="start_btn"> 
                                <h4>
                                    Bắt đầu học
                                </h4>
                                <div class="forward_icon">
                                <i class="fa-solid fa-forward"></i>
                                </div>
                            </button>
                        </a>
                      </div>
                    <h3>HTML,CSS pro</h3>
                    <p>Ten Tac Gia</p>
                    <p>80000000+</p>
                </div>     
                <div class="content_item">
                    <div class="container">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="" class="itemCourse">
                        <!-- Heart Icon -->
                        <a href="#">
                            <div class="heart_icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </a>
                        <!-- Starting Button -->
                        <a href="#" class="">
                            <button class="start_btn"> 
                                <h4>
                                    Bắt đầu học
                                </h4>
                                <div class="forward_icon">
                                <i class="fa-solid fa-forward"></i>
                                </div>
                            </button>
                        </a>
                      </div>
                    <h3>HTML,CSS pro</h3>
                    <p>Ten Tac Gia</p>
                    <p>80000000+</p>
                </div>   
                <div class="content_item">
                    <div class="container">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="" class="itemCourse">
                        <!-- Heart Icon -->
                        <a href="#">
                            <div class="heart_icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </a>
                        <!-- Starting Button -->
                        <a href="#" class="">
                            <button class="start_btn"> 
                                <h4>
                                    Bắt đầu học
                                </h4>
                                <div class="forward_icon">
                                <i class="fa-solid fa-forward"></i>
                                </div>
                            </button>
                        </a>
                      </div>
                    <h3>HTML,CSS pro</h3>
                    <p>Ten Tac Gia</p>
                    <p>80000000+</p>
                </div>   
                <div class="content_item">
                    <div class="container">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="" class="itemCourse">
                        <!-- Heart Icon -->
                        <a href="#">
                            <div class="heart_icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </a>
                        <!-- Starting Button -->
                        <a href="#" class="">
                            <button class="start_btn"> 
                                <h4>
                                    Bắt đầu học
                                </h4>
                                <div class="forward_icon">
                                <i class="fa-solid fa-forward"></i>
                                </div>
                            </button>
                        </a>
                      </div>
                    <h3>HTML,CSS pro</h3>
                    <p>Ten Tac Gia</p>
                    <p>80000000+</p>
                </div>   
                <div class="content_item">
                    <div class="container">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="" class="itemCourse">
                        <!-- Heart Icon -->
                        <a href="#">
                            <div class="heart_icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </a>
                        <!-- Starting Button -->
                        <a href="#" class="">
                            <button class="start_btn"> 
                                <h4>
                                    Bắt đầu học
                                </h4>
                                <div class="forward_icon">
                                <i class="fa-solid fa-forward"></i>
                                </div>
                            </button>
                        </a>
                      </div>
                    <h3>HTML,CSS pro</h3>
                    <p>Ten Tac Gia</p>
                    <p>80000000+</p>
                </div>                    
            </div>
            </div>
            <!-- Slide Content 2 -->
            <div class="slide_content">
            <div class="slide_name">
                <h1>Mon Hoc</h1>
                <a href="#" class="">
                    <button class="slide_btn"> 
                        <span>
                            Tất cả các khóa học
                        </span>
                    </button>
                </a>
            </div>
             <!-- Content Course 2-->
             <div class="content_course2" style="flex-wrap:wrap;">
                <div class="content_item2">
                    <div class="container">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="" class="itemCourse">
                        <!-- Heart Icon -->
                        <a href="#">
                            <div class="heart_icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </a>
                        <!-- Starting Button -->
                        <a href="#" class="">
                            <button class="start_btn"> 
                                <h4>
                                    Bắt đầu học
                                </h4>
                                <div class="forward_icon">
                                <i class="fa-solid fa-forward"></i>
                                </div>
                            </button>
                        </a>
                      </div>
                    <h3>HTML,CSS pro</h3>
                    <p>Ten Tac Gia</p>
                    <p>80000000+</p>
                </div>  
                <div class="content_item2">
                    <div class="container">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="" class="itemCourse">
                        <!-- Heart Icon -->
                        <a href="#">
                            <div class="heart_icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </a>
                        <!-- Starting Button -->
                        <a href="#" class="">
                            <button class="start_btn"> 
                                <h4>
                                    Bắt đầu học
                                </h4>
                                <div class="forward_icon">
                                <i class="fa-solid fa-forward"></i>
                                </div>
                            </button>
                        </a>
                      </div>
                    <h3>HTML,CSS pro</h3>
                    <p>Ten Tac Gia</p>
                    <p>80000000+</p>
                </div>  
                <div class="content_item2">
                    <div class="container">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="" class="itemCourse">
                        <!-- Heart Icon -->
                        <a href="#">
                            <div class="heart_icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </a>
                        <!-- Starting Button -->
                        <a href="#" class="">
                            <button class="start_btn"> 
                                <h4>
                                    Bắt đầu học
                                </h4>
                                <div class="forward_icon">
                                <i class="fa-solid fa-forward"></i>
                                </div>
                            </button>
                        </a>
                      </div>
                    <h3>HTML,CSS pro</h3>
                    <p>Ten Tac Gia</p>
                    <p>80000000+</p>
                </div>  
                <div class="content_item2">
                    <div class="container">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="" class="itemCourse">
                        <!-- Heart Icon -->
                        <a href="#">
                            <div class="heart_icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </a>
                        <!-- Starting Button -->
                        <a href="#" class="">
                            <button class="start_btn"> 
                                <h4>
                                    Bắt đầu học
                                </h4>
                                <div class="forward_icon">
                                <i class="fa-solid fa-forward"></i>
                                </div>
                            </button>
                        </a>
                      </div>
                    <h3>HTML,CSS pro</h3>
                    <p>Ten Tac Gia</p>
                    <p>80000000+</p>
                </div>  
                <div class="content_item2">
                    <div class="container">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="" class="itemCourse">
                        <!-- Heart Icon -->
                        <a href="#">
                            <div class="heart_icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </a>
                        <!-- Starting Button -->
                        <a href="#" class="">
                            <button class="start_btn"> 
                                <h4>
                                    Bắt đầu học
                                </h4>
                                <div class="forward_icon">
                                <i class="fa-solid fa-forward"></i>
                                </div>
                            </button>
                        </a>
                      </div>
                    <h3>HTML,CSS pro</h3>
                    <p>Ten Tac Gia</p>
                    <p>80000000+</p>
                </div>  
                <div class="content_item2">
                    <div class="container">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="" class="itemCourse">
                        <!-- Heart Icon -->
                        <a href="#">
                            <div class="heart_icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </a>
                        <!-- Starting Button -->
                        <a href="#" class="">
                            <button class="start_btn"> 
                                <h4>
                                    Bắt đầu học
                                </h4>
                                <div class="forward_icon">
                                <i class="fa-solid fa-forward"></i>
                                </div>
                            </button>
                        </a>
                      </div>
                    <h3>HTML,CSS pro</h3>
                    <p>Ten Tac Gia</p>
                    <p>80000000+</p>
                </div>  
                <div class="content_item2">
                    <div class="container">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="" class="itemCourse">
                        <!-- Heart Icon -->
                        <a href="#">
                            <div class="heart_icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </a>
                        <!-- Starting Button -->
                        <a href="#" class="">
                            <button class="start_btn"> 
                                <h4>
                                    Bắt đầu học
                                </h4>
                                <div class="forward_icon">
                                <i class="fa-solid fa-forward"></i>
                                </div>
                            </button>
                        </a>
                      </div>
                    <h3>HTML,CSS pro</h3>
                    <p>Ten Tac Gia</p>
                    <p>80000000+</p>
                </div>
                <div class="content_item2">
                    <div class="container">
                        <img src="{{asset('assest/img/tải xuống.png')}}" alt="" class="itemCourse">
                        <!-- Heart Icon -->
                        <a href="#">
                            <div class="heart_icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </a>
                        <!-- Starting Button -->
                        <a href="#" class="">
                            <button class="start_btn"> 
                                <h4>
                                    Bắt đầu học
                                </h4>
                                <div class="forward_icon">
                                <i class="fa-solid fa-forward"></i>
                                </div>
                            </button>
                        </a>
                      </div>
                    <h3>HTML,CSS pro</h3>
                    <p>Ten Tac Gia</p>
                    <p>80000000+</p>
                </div>                     
            </div>
             </div>
        </div>
    </div>
        </div>      
    </div>
</div>
            <!-- == FOOTER == -->
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
<script src ="./script/homepage.js"></script>
</body>
</html>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hackathon</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/foundation.css">
        <link rel="stylesheet" href="css/app.css">
        
    </head>
    <body>

        <header>
            <div class="grid-x all_header">
                <div class="cell" id="header-nav">
                    <a id="nav-button" onclick="navController()">
                        <div class="nav-item"></div>
                        <div class="nav-item"></div>
                        <div class="nav-item"></div>
                    </a>
                    <h4>馬萬褀羅柏心書院</h4>
                </div>
                <div class="cell" id="header-sub-nav">
                    <a href="http://localhost/hackathon/View/home.php">主頁</a>
                    <a href="http://localhost/hackathon/View/canteen.php">書院飯堂</a>
                    <a href="http://localhost/hackathon/View/community.php">書院社區</a>
                    <a href="http://localhost/hackathon/View/calendar.php">重要日期</a>
                </div>
            </div>
        </header>
        <!-- slider -->
        <div class="grid-x" id="this_is_slider">
            <div class="cell">

                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 5</div>
                        <img src="image/home/p1.jpg" alt="p1.jpg" style="width:100%">
                        <div class="text">馬萬祺羅柏心書院午餐講座</div>
                    </div>
                    
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 5</div>
                        <img src="image/home/p2.jpg" alt="p2.jpg" style="width:100%">
                        <div class="text">感謝匾揭幕禮</div>
                    </div>
                    
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 5</div>
                        <img src="image/home/p3.jpg" alt="p3.jpg" style="width:100%">
                        <div class="text">行業面面睇講座系列 – 手搖茶飲業</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">4 / 5</div>
                        <img src="image/home/p4.jpg" alt="p4.jpg" style="width:100%">
                        <div class="text">馬萬祺羅柏心書院午餐講座:世界語言</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">5 / 5</div>
                        <img src="image/home/p5.jpg" alt="p5.jpg" style="width:100%">
                        <div class="text">馬萬祺羅柏心書院午餐講座</div>
                    </div>
                    
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    
                </div>
                    
                <div class="slider-bottom">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                </div>
            </div>

        </div>
        
        <!-- home-button -->
        <div class="grid-x" id="home-button">
            <a class="cell small-4 button-content" href="http://localhost/hackathon/View/canteen.php">
                <img src="image/home/breakfast.png" alt="">
                <h4>飯堂</h4>
            </a>
            <a class="cell small-4 button-content" href="http://localhost/hackathon/View/community.php">
                <img src="image/home/compose.png" alt="">
                <h4>社區</h4>
            </a>
            <a class="cell small-4 button-content" href="http://localhost/hackathon/View/calendar.php">
                <img src="image/home/calendar.png" alt="">
                <h4>假期</h4>
            </a>
        </div>



        <div class="grid-x">
            <div class="cell home-news">
                <div class="grid-x">
                    <div class="cell news-topic">
                        <h5>最新消息</h5>
                    </div>
                    <div class="cell news-content">
                        <a href="#">馬萬祺羅柏心書院活動精彩回顧:OXAM1021</a>
                        <div>2018-10-21</div>
                        <div>Macau, University of Macau</div>
                    </div>
                    <div class="cell news-content">
                        <a href="#">MLC英語沙龍舉辦日本之夜</a>
                        <div>2018-10-24</div>
                        <div>W33,G032</div>
                    </div>
                    <div class="cell news-content">
                        <a href="#">行業面面睇講座系列 – 旅遊KOL</a>
                        <div>2018-10-22</div>
                        <div>W33,Dining Hall</div>
                    </div>
                    <div class="cell news-content">
                        <a href="#">行業面面睇講座系列 – 手搖茶飲業</a>
                        <div>2018-10-19</div>
                        <div>W33,Dining Hall</div>
                    </div>
                </div>
            </div>
        </div>



        <footer>

        </footer>


        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

            function currentSlide(n) {
            showSlides(slideIndex = n);
            }

            function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
            }
        </script>



        <script src="js/script.js"></script>
        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
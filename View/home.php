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
                    <a href="http://localhost/hackathon/View/canteen.php">飯堂</a>
                    <a href="http://localhost/hackathon/View/community.php">社區</a>
                    <a href="http://localhost/hackathon/View/calendar.php">假期</a>
                </div>
            </div>
        </header>
        <!-- slider -->
        <div class="grid-x" id="this_is_slider">
            <div class="cell">

                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="image/home/01.jpg" alt="01.jpg" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>
                    
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="image/home/02.jpg" alt="02.jpg" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>
                    
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="image/home/03.jpg" alt="03.jpg" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>
                    
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    
                </div>
                    
                <div class="slider-bottom">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
            </div>

        </div>
        
        <!-- home-button -->
        <div class="grid-x" id="home-button">
            <a class="cell small-4 button-content" href="http://localhost/hackathon/View/canteen.php">
                <img src="image/home/eat.png" alt="">
                <h4>飯堂</h4>
            </a>
            <a class="cell small-4 button-content" href="http://localhost/hackathon/View/community.php">
                <img src="image/home/eat.png" alt="">
                <h4>社區</h4>
            </a>
            <a class="cell small-4 button-content" href="http://localhost/hackathon/View/calendar.php">
                <img src="image/home/eat.png" alt="">
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
                        <a href="#">The first UM intellectual Hackathon</a>
                        <span>2018-04-12</span>
                        <span>N1,1st Floot, Center University of Macau</span>
                    </div>
                    <div class="cell news-content">
                        <a href="#">The first UM intellectual Hackathon</a>
                        <span>2018-04-12</span>
                        <span>N1,1st Floot, Center University of Macau</span>
                    </div>
                    <div class="cell news-content">
                        <a href="#">The first UM intellectual Hackathon</a>
                        <span>2018-04-12</span>
                        <span>N1,1st Floot, Center University of Macau</span>
                    </div>
                    <div class="cell news-content">
                        <a href="#">The first UM intellectual Hackathon</a>
                        <span>2018-04-12</span>
                        <span>N1,1st Floot, Center University of Macau</span>
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
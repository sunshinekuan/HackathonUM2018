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
        
        <script src="js/script.js"></script>
        
    </head>
    <body>

        <header>
            <div class="grid-x all_header">
                <div class="cell" id="header-nav">
                    <a id="nav-back" href="http://localhost/hackathon/View/home.php">
                        <div class="nav-back-item"></div>
                        <div class="nav-back-item"></div>
                    </a>
                    <a id="nav-button" onclick="navController()">
                        <div class="nav-item"></div>
                        <div class="nav-item"></div>
                        <div class="nav-item"></div>
                    </a>
                    <h4>馬萬褀羅柏心書院</h4>
                </div>
                <div class="cell" id="header-sub-nav">
                    <a href="http://localhost/hackathon/View/home.php">主頁</a>
                    <a href="http://localhost/hackathon/View/canteen.php">飯堂</a>
                    <a href="http://localhost/hackathon/View/community.php">社區</a>
                    <a href="http://localhost/hackathon/View/calendar.php">假期</a>
                </div>
            </div>    
        </header>






        <div class="grid-x " id="community-container">
            <div class="cell small-4 community-nav" >
                <h5 class="community-nav-bgc" id="community-today" onclick="communitySelectPage(1)">今日</h5>
            </div>
            <div class="cell small-4 community-nav"  >
                <h5 id="community-hot" onclick="communitySelectPage(2)">熱門</h5>
            </div>
            <div class="cell small-4 community-nav" >
                <h5 id="community-star" onclick="communitySelectPage(3)">收藏</h5>
            </div>



            <div class="cell " id="community-today-page">
                today
            </div>



            <div class="cell" id="community-hot-page">
                hot
            </div>

            <div class="cell" id="community-star-page">
                star
            </div>

        </div>
























        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
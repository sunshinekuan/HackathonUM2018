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

        <div class="grid-x calendar-container">


            <div class="cell page-topic">
                <h5>
                今天<?php echo date("Y/m/d")?>日<?php echo date("l")?>為
                </h5>
            </div>
            <div class="cell calendar-holiday">
                <h2>聖誕節假期</h2>
                <h5>Christmas Holiday</h5>
            </div>
            <div class="cell page-topic">
                <h5>其它重要日期</h5>

            </div>

            <div class="cell calendar-self">
                <div class="grid-x">
                    <div class="cell self-date-content">
                        <span style="margin-right:20px"">2018/10/27</span>
                        <span>我的生日</span>
                    </div>
                    <div class="cell self-date-content">
                        <span style="margin-right:20px"">2018/11/13</span>
                        <span>考試mid-term</span>
                    </div>
                    <div class="cell self-date-content">
                        <span style="margin-right:20px"">2018/11/16</span>
                        <span>書院活動</span>
                    </div>
                    <div class="cell self-date-content">
                        <span style="margin-right:20px"">2018/11/23</span>
                        <span>jacky結婚</span>
                    </div>


                </div>
            
            </div>

            <div class="cell">
                <div class="calendar-add-button">
                    <img style="width:60px;" src="image/calendar/add.png" alt="">
                </div>
            </div>
        
        
        
        </div>



















        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
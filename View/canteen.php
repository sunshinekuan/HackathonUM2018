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
                    <a id="nav-back" href="http://localhost/hackathon/View/home.php">
                        <div class="nav-back-item"></div>
                        <div class="nav-back-item"></div>
                    </a>
                    <a id="nav-button" onclick="navController()">
                        <div class="nav-item"></div>
                        <div class="nav-item"></div>
                        <div class="nav-item"></div>
                    </a>
                    <h4>馬萬褀羅柏心書院</h2>
                </div>
                <div class="cell" id="header-sub-nav">
                    <a href="http://localhost/hackathon/View/canteen.php">飯堂</a>
                    <a href="http://localhost/hackathon/View/commuity.php">社區</a>
                    <a href="http://localhost/hackathon/View/calendar.php">假期</a>
                </div>
            </div>    
        </header>

        <div class="grid-x" id="canteen-container">
            <div class="cell small-4 canteen-nav"  id="canteen-time">
                <h5>高峰時間</h5>
            </div>
            <div class="cell small-4 canteen-nav"  id="canteen-day">
                <h5>當日菜單</h5>
            </div>
            <div class="cell small-4 canteen-nav"  id="canteen-all">
                <h5>所有菜單</h5>
            </div>



            <div class="cell" id="canteen-time-page">
                <div class="grid-x">
                    <div class="cell canteen-time-data" >
                    
                    </div>

                    <div class="cell canteen-time-data">
                        
                    </div>
                </div>


            </div>
            <div class="cell" id="canteen-day-page">

                <div class="grid-x">

                    <div class="cell small-4 canteen-food-detail">
                        <div class="food-img">
                            <img src="" alt="">

                        </div>

                    </div>

                    <div class="cell small-8 canteen-food-detail">
                        <div class="food-img">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="cell" id="canteen-all-page">

                <div class="grid-x">


                </div>


            </div>
        </div>






        <script src="js/script.js"></script>
        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
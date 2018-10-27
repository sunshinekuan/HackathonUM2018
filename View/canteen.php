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
                    <h4>書院飯堂</h4>
                </div>
                <div class="cell" id="header-sub-nav">
                    <a href="http://localhost/hackathon/View/home.php">主頁</a>
                    <a href="http://localhost/hackathon/View/canteen.php">書院飯堂</a>
                    <a href="http://localhost/hackathon/View/community.php">書院社區</a>
                    <a href="http://localhost/hackathon/View/calendar.php">重要日期</a>
                </div>
            </div>    
        </header>

        <div class="grid-x " id="canteen-container">
            <div class="cell small-4 canteen-nav" >
                <h5 class="canteen-nav-bgc" id="canteen-time" onclick="canteenSelectPage(1)">數據分析</h5>
            </div>
            <div class="cell small-4 canteen-nav"  >
                <h5 id="canteen-day" onclick="canteenSelectPage(2)">當日菜單</h5>
            </div>
            <div class="cell small-4 canteen-nav" >
                <h5 id="canteen-all" onclick="canteenSelectPage(3)">所有菜單</h5>
            </div>



            <div class="cell" id="canteen-time-page">
                <div class="grid-x">
                    <div class="cell canteen-time-data" >
                        <img src="http://localhost/hackathon/View/image/canteen/bar-chart.png" alt="">
                    </div>

                    <div class="cell canteen-time-data">
                        <img src="http://localhost/hackathon/View/image/canteen/bar-chart.png" alt="">
                    </div>
                </div>


            </div>
            <div class="cell" id="canteen-day-page">

                <div class="grid-x">

                    <div class="cell canteen-food-detail">
                        <div class="grid-x">
                            <div class="cell small-5">
                                <div class="food-img">
                                    <img src="image/home/eat.png" alt="">
                                </div>
                            </div>
                            <div class="cell small-7">
                                <div class="grid-x food-detail-content">
                                    <div class="cell food-detail-time">7:30-10:00</div>
                                    <div class="cell food-detail-topic">topic</div>
                                    <div class="cell food-detail-star">

                                    <!-- star test open -->
                                    <div class="setgrade">  
                                        <div class="grade">
                                            <span style="margin:0px;">總評</span>
                                            <span style="margin:0px;" id="getgrade">0</span>
                                            <span style="margin:0px;">分</span>
                                        </div>
                                        <div class="star">
                                            <ul id="star">
                                                <li>
                                                    <a href="javascript:void(0)" onclick="halfStar(1)"></a>
                                                    <a href="javascript:void(0)" onclick="halfStar(2)"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" onclick="halfStar(3)"></a>
                                                    <a href="javascript:void(0)" onclick="halfStar(4)"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" onclick="halfStar(5)"></a>
                                                    <a href="javascript:void(0)" onclick="halfStar(6)"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" onclick="halfStar(7)"></a>
                                                    <a href="javascript:void(0)" onclick="halfStar(8)"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" onclick="halfStar(9)"></a>
                                                    <a href="javascript:void(0)" onclick="halfStar(10)"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- star test end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="cell canteen-food-detail">
                        <div class="grid-x">
                            <div class="cell small-5">
                                <div class="food-img">
                                    <img src="image/home/eat.png" alt="">
                                </div>
                            </div>
                            <div class="cell small-7">
                                <div class="grid-x food-detail-content">
                                    <div class="cell food-detail-time">7:30-10:00</div>
                                    <div class="cell food-detail-topic">topic</div>
                                    <div class="cell food-detail-star">

                                    <!-- star test open -->
                                    <div class="setgrade">  
                                        <div class="grade">
                                            <span style="margin:0px;">總評</span>
                                            <span style="margin:0px;" id="getgrade">0</span>
                                            <span style="margin:0px;">分</span>
                                        </div>
                                        <div class="star">
                                            <ul id="star">
                                                <li>
                                                    <a href="javascript:void(0)" onclick="halfStar(1)"></a>
                                                    <a href="javascript:void(0)" onclick="halfStar(2)"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" onclick="halfStar(3)"></a>
                                                    <a href="javascript:void(0)" onclick="halfStar(4)"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" onclick="halfStar(5)"></a>
                                                    <a href="javascript:void(0)" onclick="halfStar(6)"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" onclick="halfStar(7)"></a>
                                                    <a href="javascript:void(0)" onclick="halfStar(8)"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" onclick="halfStar(9)"></a>
                                                    <a href="javascript:void(0)" onclick="halfStar(10)"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- star test end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="cell" id="canteen-all-page">

                <div class="grid-x">

                </div>


            </div>
        </div>





        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
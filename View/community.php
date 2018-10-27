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
    <body style="background-color:#F7F7F7">

        <header>
            <div class="grid-x all_header">
                <div class="cell" id="header-nav">
                    <a id="nav-button" onclick="navController()">
                        <div class="nav-item"></div>
                        <div class="nav-item"></div>
                        <div class="nav-item"></div>
                    </a>
                    <h4>書院社區</h4>
                </div>
                <div class="cell" id="header-sub-nav">
                    <a href="http://localhost/hackathon/View/home.php">主頁</a>
                    <a href="http://localhost/hackathon/View/canteen.php">書院飯堂</a>
                    <a href="http://localhost/hackathon/View/community.php">書院社區</a>
                    <a href="http://localhost/hackathon/View/calendar.php">重要日期</a>
                </div>
            </div>    
        </header>






        <div class="grid-x " id="community-container">

            
            <div class="cell" id="community-all-nav">
                <div class="grid-x" style="margin:0px;">
                    <div class="cell small-4 community-nav" >
                        <h5 class="community-nav-bgc" id="community-today" onclick="communitySelectPage(1)">今日</h5>
                    </div>
                    <div class="cell small-4 community-nav"  >
                        <h5 id="community-hot" onclick="communitySelectPage(2)">熱門</h5>
                    </div>
                    <div class="cell small-4 community-nav" >
                        <h5 id="community-star" onclick="communitySelectPage(3)">收藏</h5>
                    </div>
                </div>
            </div>





            <div class="cell " id="community-today-page">
                <div class="grid-x">

                    <a class="cell community-post" onclick="communityTodayPagePost1(1)">
                        <h5>Fonts , Mockups & Templates</h5>
                        <div class="community-post-time">10:30 am</div>
                        <span>It’s Friday and time for some Free products!Here are the latest freebies to arrive on our sites....</span>
                        <div class="community-post-self">
                            星
                        </div>
                    </a>

                    <a class="cell community-post" onclick="communityTodayPagePost1(1)">
                        <h5>Scoored his very fast goal</h5>
                        <div class="community-post-time">9:30 am</div>
                        <span>It’s Friday and time for some Free products!Here are the latest freebies to arrive on our sites....</span>
                        <div class="community-post-self">
                            星
                        </div>
                    </a>

                    <a class="cell community-post" onclick="communityTodayPagePost1(1)">
                        <h5>Finished the part of UX</h5>
                        <div class="community-post-time">14:30 am</div>
                        <span>It’s Friday and time for some Free products!Here are the latest freebies to arrive on our sites....</span>
                        <div class="community-post-self">
                            星
                        </div>
                    </a>

                    <a class="cell community-post" onclick="communityTodayPagePost1(1)">
                        <h5>Fonts , Mockups & Templates</h5>
                        <div class="community-post-time">19:30 am</div>
                        <span>It’s Friday and time for some Free products!Here are the latest freebies to arrive on our sites....</span>
                        <div class="community-post-self">
                            星
                        </div>
                    </a>
                    <a class="cell community-post" onclick="communityTodayPagePost1(1)">
                        <h5>Fonts , Mockups & Templates</h5>
                        <div class="community-post-time">19:30 am</div>
                        <span>It’s Friday and time for some Free products!Here are the latest freebies to arrive on our sites....</span>
                        <div class="community-post-self">
                            星
                        </div>
                    </a>
                </div>
            </div>

            <div class="cell" id="community-today-page-content" >
               <div class="cell community-post-detail">
                    <div class="community-post-back">
                        <a onclick="communityTodayPagePost1(0)">
                            <img src="http://localhost/hackathon/View/image/back.png" alt="home.jpg">
                        </a>
                    </div>
                    <h5>Fonts , Mockups & Templates</h5>
                    <div class="community-post-content-time">10:30 am</div>
                    <span>It’s Friday and time for some Free products!Here are the latest freebies to arrive on our sites....</span>
                    <a href="">Read more</a>
                </div>
                <div class="cell community-post-reply">
                    <h5>reply-name</h5>
                    <div class="community-post-detail-time">12:30 am</div>
                    <span>It’s Friday and time for some Free products!Here are the latest freebies to arrive on our sites....</span>
                </div>
                <div class="cell community-post-reply">
                    <h5>reply-name</h5>
                    <div class="community-post-detail-time">12:30 am</div>
                    <span>It’s Friday and time for some Free products!Here are the latest freebies to arrive on our sites....</span>
                </div>
                <div class="cell community-post-reply">
                    <h5>reply-name</h5>
                    <div class="community-post-detail-time">12:30 am</div>
                    <span>It’s Friday and time for some Free products!Here are the latest freebies to arrive on our sites....</span>
                </div>
                <div class="cell community-post-reply">
                    <h5>reply-name</h5>
                    <div class="community-post-detail-time">12:30 am</div>
                    <span>It’s Friday and time for some Free products!Here are the latest freebies to arrive on our sites....</span>
                </div>
                <div class="cell community-post-reply">
                    <h5>reply-name</h5>
                    <div class="community-post-detail-time">12:30 am</div>
                    <span>It’s Friday and time for some Free products!Here are the latest freebies to arrive on our sites....</span>
                </div>
                <div class="cell">
                <div class="community-add-button">
                    <img style="width:60px;" src="image/calendar/add.png" alt="">
                </div>
            </div>
            </div>


            <!-- community hot page-->
            <div class="cell" id="community-hot-page">
                <div class="grid-x">
                    <a class="cell community-post" onclick="communityHotPagePost1(1)">
                        <h5>Fonts , Mockups & Templates</h5>
                        <div class="community-post-time">10:30 am</div>
                        <span>It’s Friday and time for some Free products!Here are the latest freebies to arrive on our sites....</span>
                        <div class="community-post-self">
                            星
                        </div>
                    </a>
                    <a class="cell community-post" onclick="communityHotPagePost1(1)">
                        <h5>Fonts , Mockups & Templates</h5>
                        <div class="community-post-time">10:30 am</div>
                        <span>It’s Friday and time for some Free products!Here are the latest freebies to arrive on our sites....</span>
                        <div class="community-post-self">
                            星
                        </div>
                    </a>
                </div>
                
            </div>
            
            <div class="cell" id="community-star-page">
                <div style="margin:50px;">NULL</div>
                
            </div>

        </div>
























        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
menu = 0;
mealdata = 0;
canteen_page = 1;
community_page = 1;
calendardata = 0;

function navController(){
    if(menu == 1){
        menu = 0;
        document.getElementById("header-sub-nav").style.display = "none";
    }else if(menu == 0){
        menu = 1;
        document.getElementById("header-sub-nav").style.display = "block";
    }

}


function halfStar(x) {
    var star = document.getElementById('star');
    var items = star.getElementsByTagName("li");
    x = parseInt(x) - 1;
    var tem = -1;
    for(var i = 0; i < items.length; i++) {
        if(x > i*2) {
            items[i].style.background = "url(https://img-blog.csdn.net/20180118204021317?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQvYmVsb3ZlX2x1Y3k=/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/SouthEast) no-repeat";
            items[i].style.backgroundSize = "100% 100%";
        } else {
            if(tem == -1) {
                tem = i;
            } 
            items[i].style.background = "url() no-repeat";
            items[i].style.backgroundSize = "100% 100%";
        }
    }
    if(x == parseInt(tem)*2) {
        items[tem].style.background = "url(https://img-blog.csdn.net/20180118204036649?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQvYmVsb3ZlX2x1Y3k=/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/SouthEast) no-repeat";
        items[tem].style.backgroundSize = "100% 100%";
    }
    document.getElementById('getgrade').innerHTML = parseInt(x)+1+'.0';
}

function canteenSelectPage(canteen_page){

    if(canteen_page == 1){
        document.getElementById('canteen-time-page').style.display="block";
        document.getElementById('canteen-day-page').style.display="none";
        document.getElementById('canteen-all-page').style.display="none";
        document.getElementById('canteen-time').className="canteen-nav-bgc";
        document.getElementById('canteen-day').className="canteen-nav-bg";
        document.getElementById('canteen-all').className="canteen-nav-bg";
    }
    else if(canteen_page == 2){
        document.getElementById('canteen-time-page').style.display="none";
        document.getElementById('canteen-day-page').style.display="block";
        document.getElementById('canteen-all-page').style.display="none";
        document.getElementById('canteen-time').className="canteen-nav-bg";
        document.getElementById('canteen-day').className="canteen-nav-bgc";
        document.getElementById('canteen-all').className="canteen-nav-bg";
    }
    else if(canteen_page == 3){
        document.getElementById('canteen-time-page').style.display="none";
        document.getElementById('canteen-day-page').style.display="none";
        document.getElementById('canteen-all-page').style.display="block";
        document.getElementById('canteen-time').className="canteen-nav-bg";
        document.getElementById('canteen-day').className="canteen-nav-bg";
        document.getElementById('canteen-all').className="canteen-nav-bgc";
    }

}

function communitySelectPage(community_page){

    if(community_page == 1){
        document.getElementById('community-today-page').style.display="block";
        document.getElementById('community-hot-page').style.display="none";
        document.getElementById('community-star-page').style.display="none";
        document.getElementById('community-today').className="community-nav-bgc";
        document.getElementById('community-hot').className="community-nav-bg";
        document.getElementById('community-star').className="community-nav-bg";
    }
    else if(community_page == 2){
        document.getElementById('community-today-page').style.display="none";
        document.getElementById('community-hot-page').style.display="block";
        document.getElementById('community-star-page').style.display="none";
        document.getElementById('community-today').className="community-nav-bg";
        document.getElementById('community-hot').className="community-nav-bgc";
        document.getElementById('community-star').className="community-nav-bg";
    }
    else if(community_page == 3){
        document.getElementById('community-today-page').style.display="none";
        document.getElementById('community-hot-page').style.display="none";
        document.getElementById('community-star-page').style.display="block";
        document.getElementById('community-today').className="community-nav-bg";
        document.getElementById('community-hot').className="community-nav-bg";
        document.getElementById('community-star').className="community-nav-bgc";
    }

}

function communityTodayPagePost1(community_page_post){

    if(community_page_post == 1){
        document.getElementById('community-all-nav').style.display="none";
        document.getElementById('community-today-page').style.display="none";
        document.getElementById('community-today-page-content').style.display="block";


    }
    else if(community_page_post == 0){
        document.getElementById('community-all-nav').style.display="block";
        document.getElementById('community-today-page').style.display="block";
        document.getElementById('community-today-page-content').style.display="none";
    }
}

function communityHotPagePost1(community_page_post){

    if(community_page_post == 1){
        document.getElementById('community-all-nav').style.display="none";
        document.getElementById('community-hot-page').style.display="none";
        document.getElementById('community-today-page-content').style.display="block";


    }
    else if(community_page_post == 0){
        document.getElementById('community-all-nav').style.display="block";
        document.getElementById('community-hot-page').style.display="block";
        document.getElementById('community-today-page-content').style.display="none";
    }
}



function mealdatacontroller(){

    if(mealdata == 0){
        mealdata = 1;
        document.getElementById('mealdata').style.display="block";
        document.getElementById('community-today-page-content').style.display="none";
    }else if(mealdata == 1){
        mealdata = 0;
        document.getElementById('mealdata').style.display="none";
        document.getElementById('community-today-page-content').style.display="block";
    }
}

function calendardatacontroller(){

    if(calendardata == 0){
        calendardata = 1;
        document.getElementById('calendardata').style.display="block";
        document.getElementById('community-today-page-content').style.display="none";
    }else if(calendardata == 1){
        calendardata = 0;
        document.getElementById('calendardata').style.display="none";
        document.getElementById('community-today-page-content').style.display="block";
    }
}
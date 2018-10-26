menu = 0;
function navController(){
    if(menu == 1){
        menu = 0;
        document.getElementById("header-sub-nav").style.display = "none";
    }else if(menu == 0){
        menu = 1;
        document.getElementById("header-sub-nav").style.display = "block";
    }

}
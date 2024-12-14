<?php


/*  ------------ 1 ------------*/

setcookie("site[layout]","boxed",strtotime("2 months 5 days"),"/");
setcookie("site[font]","Swat",strtotime("2 months 5 days"),"/");
setcookie("site[color]","blue",strtotime("2 months 5 days"),"/");

/*  ------------ 2 ------------*/
if(isset($_COOKIE)){
    echo '<pre>';
    print_r($_COOKIE);

    echo '</pre>';
    echo "Your Color Is {$_COOKIE['site']['color']} And Your Font Is  {$_COOKIE['site']['font']}<br>";
}

/*  ------------ 3 ------------*/
setcookie("site[layout]","blue",time()-1,"/");

/*  ------------ 4 ------------*/

setcookie("site[font]","Swat",0,"/");
setcookie("site[color]","blue",0,"/");






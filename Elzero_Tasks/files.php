<?php

/* ---------------- 5 ------------- */
//1
echo basename(__FILE__).'<br>';
//2
echo pathinfo(__FILE__,PATHINFO_BASENAME).'<br>';
//3
echo pathinfo(__FILE__)["basename"].'<br>';
//4
$path=realpath(__FILE__);
$arr=explode("\\",$path);
 echo array_pop($arr);


/* ---------------- 6 ------------- */

 
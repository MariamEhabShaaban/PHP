<?php
/*-------- 1 --------*/

echo(rand(11,19)).'<br>';

/*-------- 2 --------*/

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

echo $friends[rand(0,count($friends)-1)].'<br>';
// Example
// Ibrahim
// Ahmed


/*-------- 3 --------*/



$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7

echo round($num1,0,PHP_ROUND_HALF_DOWN).'<br>';
echo round($num2,1).'<br>';
echo round($num3,0,PHP_ROUND_HALF_DOWN).'<br>';


/*-------- 4 --------*/

$filter=filter_list();
$ids=array();
$fil=array();
foreach($filter as $i => $f){
$ids[]=filter_id($f);
$fil[]=($f);
}

echo '<pre>';
print_r(array_combine($ids,$fil));
echo '</pre>';

/*-------- 5 --------*/


$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";


echo filter_var($url1,FILTER_VALIDATE_URL)?"A Valid URL<br>":"Not A Valid URL<br>";
echo filter_var($url2,FILTER_VALIDATE_URL)?"A Valid URL<br>":"Not A Valid URL<br>";
echo filter_var($url3,FILTER_VALIDATE_URL)?"A Valid URL<br>":"Not A Valid URL<br>";
echo filter_var($url4,FILTER_VALIDATE_URL)?"A Valid URL<br>":"Not A Valid URL<br>";

// Output
// "Not A Valid URL"
// "Not A Valid URL"
// "A Valid URL"
// "Not A Valid URL"


/*-------- 6 --------*/


$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1,FILTER_SANITIZE_URL).'<br>';
echo filter_var($url2,FILTER_SANITIZE_URL).'<br>';
echo filter_var($url3,FILTER_SANITIZE_URL).'<br>';
echo filter_var($url4,FILTER_SANITIZE_URL).'<br>';
// // Output
// http://www.elzero.org
// http://elzero.org
// https://elzero.org
// https://elzero.org



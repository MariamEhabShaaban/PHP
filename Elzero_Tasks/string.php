 <?php

 /*-------- 1 ----------*/

 $num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str=str_replace([$str[$num_one],$str[(int)$num_two]],[$let_one,$let_two],$str);

echo $str .'<br>'; // Elzero


 /*-------- 2 ----------*/

 $str = "Orezle";
echo ucfirst(strtolower(strrev($str))).'<br>';
 // Elzero


 /*-------- 3 ----------*/

 $str = 'aAa';
$num = 3;
$char = "_";     // $str[$num]=$char
$str=strtolower($str);
$str.=$char;
echo str_repeat($str,$num).'<br>';



// aaa_aaa_aaa_


 /*-------- 4 ----------*/

 $str1 = "<div><b>Elzero</b></div>";
 echo strip_tags($str1,"<b>").'<br>';

// <b>Elzero</b>


 /*-------- 5 ----------*/

 $str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str,$e,$four).'<br>';

echo substr_count($str,lcfirst($o),-1*$four).'<br>';
// 1
// 2

 /*-------- 6 ----------*/
 $chars = ["E", "l", "z", "e", "r", "o"];
echo implode($chars).'<br>';
 // Output
 //"Elzero"


  /*-------- 7 ----------*/

  $chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
echo ucfirst(strtolower(substr_replace(implode($chars),"",1,2)));
//   another way 

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
echo ucfirst(strtolower(str_replace(["1","2"],[],implode($chars))));

// Output
//"Elzero"
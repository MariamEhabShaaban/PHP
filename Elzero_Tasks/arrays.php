<?php

/* --------   1  ------- */
 $friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
  ];
  echo '<pre>';
  print_r(array_chunk(array_change_key_case($friends),2,true));
  echo '</pre>';
 

  /* ----------  2 ----------- */

  $codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];
echo '<pre>';
print_r(array_change_key_case(array_combine($codes,$means)));
echo '</pre>';


/*--------- 3 --------- */

$friends2 = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
  ];
  
  echo '<pre>';
  print_r(array_reverse(array_change_key_case(array_flip($friends2)),true));
  echo '</pre>';
  

/* --------- 4 ---------- */

$nums = [10, 20, 30];

echo array_sum($nums) .'<br>';

echo array_reduce($nums,fn($curr,$it)=>$curr+$it).'<br>';

/*---------- 5 ------------*/

$nums = [5, 10, 20, 5, 30, 40];

echo array_reduce(array_filter($nums,fn($it)=>$it!=5),fn($cur,$it)=>$cur+$it).'<br>';

/*----------  6   ------------*/

$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;
echo '<pre>';
  print_r(array_pad($chars,count($chars)*strlen($char),$char[$zero]));
  echo '</pre>';


/*----------  7   ------------*/

$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);

echo current($names) . "<br>"; // "Sayed"

end($names);

echo current($names) . "<br>"; // "Ali"

reset($names);

echo current($names) . "<br>"; // "Osama"

end($names);
prev($names);

echo current($names) . "<br>"; // "Mahmoud"


/*----------  8   ------------*/

$chars = ["A", "B", "C"];
//------> 1
$chars[]="D";
echo '<pre>';
print_r($chars);
echo '</pre>';

//  ------> 2
array_push($chars,"D");
echo '<pre>';
print_r($chars);
echo '</pre>';

  $c=[3 =>"D"];
// ------> 3
echo '<pre>';
print_r(array_replace($chars,$c));
echo '</pre>';

// ------> 4

echo '<pre>';
print_r(array_merge($chars,$c));
echo '</pre>';

/*----------  9   ------------*/
$nums = [1, 2, 3, 4, 5, 6];
echo '<pre>';
print_r(array_slice($nums,-5,-2));
echo '</pre>';


/*----------  10   ------------*/

$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

array_splice($mix,count($nums),count($nums),$nums);
echo '<pre>';
print_r($mix);
echo '</pre>';



/*----------  11   ------------*/

$arr = ["A", "B", "C", "D", "E"];

echo count($arr).'<br>';


/*----------  12   ------------*/

$nums = [11, 2, 10, 7, 20, 50];
$sum=0;
foreach($nums as $x){
$sum+=$x;
}

echo $sum.'<br>';


// another way 
$sum2=array_reduce($nums,fn($cur,$it)=>$cur+$it);
echo $sum2.'<br>';

/*----------  13   ------------*/


$nums = [10, 100, -20, 50, 30];

$max=array_reduce($nums,fn($cur,$it)=>$cur>$it?$cur:$it);
echo 'max = '.$max.'<br>';


/*----------  14   ------------*/


$nums = [10, 100, -20, 50, 30];

$minn=array_reduce($nums,fn($cur,$it)=>$cur<$it?$cur:$it,PHP_INT_MAX);
echo 'min = '.$minn.'<br>';


/*----------  15   ------------*/

$chars = ["o", "r", "e", "z", "l", "E"];
echo implode(array_reverse($chars));
// Output
//"Elzero"



/*----------  16   ------------*/

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

echo '<pre>';
$ans=array_filter($mix,fn($it)=> !is_string($it) && $it%2);

sort($ans);
print_r($ans);
echo '</pre>';




/*----------  17   ------------*/

$nums = [1, 2, 3, 4, 5, 6];
for($i=0;$i<count($nums);$i++){
    $ran=rand(0,count($nums)-1);
    $temp=$nums[$i];
    $nums[$i]=$nums[$ran];
    $nums[$ran]=$temp;
}

echo '<pre>';
print_r($nums);
echo '</pre>';

/*----------  18   ------------*/

$title = "E&z\$r0 W\$b Sch00&";

echo str_replace(["&","\$","0"],["l","e","o"],$title,$num).'<br>';
echo $num;

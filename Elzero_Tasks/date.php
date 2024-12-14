<?php
/* ----------- 1 -------------- */

date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get().'<br>';

echo date("D, d M y - h:i:s A",time()).'<br>';

echo date("l, d F Y - h:i:s A",time()).'<br>';

/* ----------- 2 -------------- */


date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get().'<br>';
$date = "2005-10-02";

echo date("Y, F, l 'dS' H:i:s",strtotime("15 hour 15 minute 15 second",strtotime($date))).'<br>';

// Output Needed

//"2005, October, Sunday '02nd' 15:15:15"



/* ----------- 3 -------------- */


$date = "1990-10-01";
$date2="1970-01-01";

echo "From Epoch Time Till 1990-10-01 Is Approximately ".round(strtotime($date,strtotime($date2))/(24*60*60),1)." Days<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately ".round(strtotime($date,strtotime($date2))/(24*60*60*365),1)." Years<br>";
// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"





/* ----------- 4 -------------- */

$date = "1990-10-01";
echo  "From Epoch Time Till 1990-10-01 Is Approximately ".date_diff(date_create($date),date_create("1970-01-01"))->days." Days<br>";
echo  "From Epoch Time Till 1990-10-01 Is Approximately ".date_diff(date_create($date),date_create("1970-01-01"))->y." Years<br>";





/* ----------- 5 -------------- */

// With time() Function
echo time() . "<br>"; // 1668020233
echo strtotime("now").'<br>';
echo getdate()[0].'<br>';
echo date_create()->getTimestamp();
echo '<br>';
// Output Needed With Other Ways
// 1668020233
// 1668020233
// 1668020233
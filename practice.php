<?php
echo 'hello php!';
$a = 3;
$b = 7;
echo $a + $b;
$array_month = ["January", "February", "Mrch", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
echo $array_month[7];
$hello = "Hello,";
$name = "Yoshida";
$world = "'s World!";
echo $hello.$name.$world;
$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;
$calender_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018['December'];
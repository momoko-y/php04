<?php
function nibai($val) {
  return $val * 2;
}
echo nibai(5);
echo "\n";

function f($a, $b){
    return $a + $b;
}
echo f(1, 2);
echo "\n";

function mul($arr){
    $result = 1;
    foreach($arr as $val) {
       $result *= $val; 
    }
    return $result;
} 
echo mul(array(1, 3, 5, 7, 9));
echo "\n";

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
$result;
$arr = [3,5,2,6,1];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 $hogeA = 3;
 if ($hogeA < $a){
     $hogeA = $a;
     $result = $hogeA;
 }
 }
 return $result;
 }
 echo max_array([3,5,2,6,1]);
 echo "\n";
 
 $str = "<p><?php var_dump('string'); ?>text<br>text</p>";
 echo strip_tags($str);
 echo "\n";
 
 $fruits = ['apple', 'orange', 'melon'];
 array_push($fruits, 'banana', 'pineapple');
 print_r($fruits);
 echo "\n";
 
 $array1 = [1, 2, 3];
 $array2 = [10, 20, 30];
 $array3 = [100, 200, 300];
 $array = array_merge($array1, $array2, $array3);
 print_r($array);
 echo "\n";
 
 $date = time();
 echo $date;
 echo "\n";
 $date = mktime(3, 0, 0, 2, 3, 2021);
 echo $date;
 echo "\n";
 
 echo date('Y年m月d日 H時i分s秒');
 echo '<br>';
 echo "\n";
?>
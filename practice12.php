<?php
echo 'hello php!';
$name = yoshida;
if ($name = yoshida) {
  echo "私は yoshida です";
} else {
  echo "あなたの名前ではありません";
}
$total = 0;
echo $total;
for ($i = 0; $i <= 1000; $i++) {
    $total += $i;
}
echo $total;
$fruits = array("grape", "peach", "cherry", "strawberry", "banana");
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}
//PHP/Laravel 03 プログラムの実行を条件分岐構文と繰り返し構文で制御できるようになろう 課題

<?php

//1.
$name = "tatsuya nakanishi";

if ($name == "tatsuya nakanishi") {
    echo "私は　あなたの名前です";
    echo "\n";
}else {
    echo "あなたの名前ではありません";
    echo "\n";
}

//2.
$total = 0;

for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

//3.
$fruits = array("apple","banana","peach","melon","orange");
foreach($fruits as $value){
    echo $value;
    echo "\n";
}

//4.
$start = 1;

$end = 100;

for($i = $start; $i <= $end; $i++){

  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
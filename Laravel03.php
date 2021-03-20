<?php
$name = "Anna";

if ($name == "Anna") {
    echo "私は $name です";
} else {
    echo "$name ではありません";
}
?>


<?php
$total = 0;
// echo $total;

for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
?>


<?php
$fruits = ["peach", "pineapple", "blueberry", "melon", "apple"];

foreach ($fruits as $like_fruits) {
    echo $like_fruits;
    echo "\n";
}
?>


<?php
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for ($i = $start; $i <= $end; $i++) {
  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0) {
    echo $i;
    echo "\n";
  }
}
?>
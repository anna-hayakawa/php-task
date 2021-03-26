<?php
function double_num($number) {
    return $number * 2;
}
echo double_num(15);
?>


<?php
function add($a, $b) {
    return $a + $b;
}
echo add(3,5);
?>


<?php
function double_arr($arr) {
    $result = 1;
    foreach ($arr as $value) {
        $result *= $value;
    }
    return $result;
}
echo double_arr([1, 3, 5, 7 ,9]);
?>


<?php
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array([1, 5, 20, 10]);
?>


<?php
$str = "<p><?php var_dump('string'); ?>テスト<br>テキスト</p><h1>ここは出力される。</h1>";
echo strip_tags($str, '<h1>');
?>

<?php
$family = ["一郎", "二郎", "三郎"];

array_push($family, "四郎", "五郎");
print_r($family);
?>

<?php
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];

$array = array_merge($array1, $array2, $array3);
print_r($array);
?>

<?php
$timestamp = time();
echo $timestamp;
?>

<?php
$time = mktime(10, 10, 10);
echo $time;
?>

<?php
$timestamp = time();
echo date("Y/m/d", $timestamp);
echo "\n";

$time = mktime(10, 10, 10);
echo date("Y年m月d日 H時i分s秒", $time);
?>
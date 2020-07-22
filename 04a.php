<?php
//1
function x2($number){
    echo $number*2;
}
x2(4);
echo"\n";

//2
function f($a, $b){
    echo $a+$b;
}
f(4, 5);
echo"\n";

//3
function xx($arr){
    $answer = $arr[0];
    for($i = 1; $i < count($arr); $i++){
        $answer = $answer*$arr[$i];
    }
    return $answer;
}
$example2 = array(1, 3, 5, 7, 9);
echo xx($example2)."\n";


//4
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
$example = array(4, 9, 12, 1, 10,11);
$result = max_array($example);
echo($result."\n");

//5
//strip_tags:htmlタグを取り除きたいときに使う。
$html = "<html><body><title>課題</title><h1>アイウエオ</h1></body></html>";
$html_result = strip_tags($html);
echo $html_result."\n";
//array_push:1つ以上の要素を配列の最後に追加したい場合に使う。
$fruits = ["apple", "melon", "pineapple"];
array_push($fruits, "banana", "orange");
print_r($fruits);

$fruits2 = ["a"=>"apple", "b"=>"melon", "c"=>"pineapple"];
foreach($fruits2 as $fkey => $fvalue){
    $fruits2_key[] = $fkey;
    $fruits2_val[] = $fvalue;
}
array_push($fruits2_key, "d", "e");
array_push($fruits2_val, "banana", "kiwi");
$fruits2 = array_combine($fruits2_key, $fruits2_val);
print_r($fruits2);

//array_merge:配列に配列を1つ以上追加したい場合に使う。
$number1 = [1, 2, 3];
$number2 = [10, 20, 30];
$number3 = [100, 200, 300];
$numbercombined = array_merge($number1, $number2, $number3);
print_r($numbercombined);

//time, mktime Unixタイムスタンプを取得することができる
echo '現在のUnixタイムスタンプ;'.time();
$timestamp = mktime(0, 0, 0, 1, 1, 2020);
echo $timestamp;
// なぜ表示されないのかわかりませんでした
//date:曜日を取得する
echo date('w');
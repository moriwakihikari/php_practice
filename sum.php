<?php
//1

/*function sum($max) {
    
    return $max * 2;
}
echo sum(10);
echo "\n";*/

function sum($max) {
    
    echo $max * 2;
}
sum(10);
echo "\n";
//2
/*
function f($a,$b){
    return $a + $b;
}
echo f(2,3);
echo "\n";
*/
function f($a,$b){
    echo $a + $b;
}
f(2,3);
echo "\n";
//3

/*function a($arr) {
    return ($arr * $arr);
}

$a_array1 = [1,3,5,7,9];

$a_array2 = array_map('a',$a_array1);

print_r($a_array2);
echo "\n";
*/

/*function b($arr) {
    $numbers = array(1,3,5,7,9);
    
    foreach($numbers as $number){
        
        return ($numbers * $numbers)
    }
}

echo $number;
*/
/*
$a = array(1,3,5,7,9);
echo array_product($a)
*/

function a($arr) {
    $total = 1;
    foreach($arr as $ar) {
        $total *= $ar;//total1に対して掛けていく
    }//$arr = array(1,3,5,7,9)を使うのは間違ってる？
    return $total;
}
echo a(array(1,3,5,7,9));//{}では反応せず
echo "\n";

//4

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];//よく分からない
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if ($max_number < $a) {
     $max_number = $a;
 }
 }
 return $max_number;//returnとは
 }
 echo max_array(array(1,2,3,50,100,));
 echo "\n";
 
//5
 //5- strip_tags
 $d = "<h1>Hello</h1>"
 ."<p>World</p>";
 echo strip_tags($d)."\n";//.で複数処理
 
 //5-2 array_push
$e = ['a','b','c'];

array_push($e,'d','e');//要素追加

echo $e[2]."\n";

 //5-3 array_merge
 $f = ['f','g'];
 $ef = array_merge($e,$f);//要素結合
 
 print_r($ef)."\n";
 
 //5-4 time,mktime
 echo time()."\n";
 
 $timestamp = mktime(12,52,52,1,23,2020);
 echo $timestamp."\n";
 
 //5-4 date
 echo date('Y/m/d')."\n";
 echo date('Y-m-d H:i:s')."\n";
 echo date('Y年m月d日 H時i分s秒');
 
 /* フレームワークについて
 Laravel特徴
 世界的に一番勢いがあるフレームワーク　今後も伸びる
 コミュニティも多く学習しやすい
 機能豊富なCUIインターフェースArtisan(アルチザン)
 『便利なテンプレみたいなのがたくさんある解釈』
 
 機能豊富なORM Eloquent
 アクティブレコードによるデーター操作の実装
 ↑企業アプリケーションで頻繁に認められるデザインパターン
 『優秀なデザインがこれもテンプレ？が使える
 
 便利なDIとサービスコンテナ 「DI オブジェクトの注入単体のテストが可能
 サービスコンテナ　クラス（設計図）のインスタンス化（実体）を管理する仕組み
 『便利なDIエラーが見つけやすい開発しやすい
 サービスコンテナはよく分からな��』
 
 キューが使えるイベントとジョブがお得　「キューFIFO　先入先出し」
 メールやSlackへの通知もお手軽
 
 
 
?>


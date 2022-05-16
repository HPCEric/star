<?php
$str = "STAR";
$star = "lux";
//單引號為單純的字串(快)
// 雙引號內會解釋變量(慢)

echo $str;
echo "<br>";

echo "$$star$$str";//多的$做字串顯示
echo "<br>";

echo "$str";
echo "<br>";

echo '$str';//字串
echo "<br>";

echo "'$str'";//單引號視為字串，$部分解釋變量
echo "<br>";

echo '"$str"';//單引號內皆視為字串
echo "<br>";

echo "{$str}";//大括號定義變量不做字串顯示
echo "<br>";

echo "str";
echo "<br>";

echo 'str';
echo "<br>";

echo "<hr>";

echo $str = '$star';//重新定義變數$str 其值為字串$star
echo "<br>";

echo $str = "star";
echo "<br>";

echo $str = "$star";//重新定義變數$str 其值為$star的變量
echo "<br>";

echo $str == "$star";
echo "<br>";

echo $str === "$star";
echo "<br>";

echo "$str = $star";//重新定義變數$str 其值為$star的變量 最後印出變量
echo "<br>";

echo '$str = $star';
echo "<br>";

echo $str = $star;//定義變數$str 其值為$star變數的值 並印出其值 
echo "<br>";


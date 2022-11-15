<?php

// りんご、みかん、桃のフルーツの単価と個数をもとに料金を計算

// step1:フルーツと単価の連想配列を作成してください。
// 　　　配列の0:リンゴ、1:みかん、2:桃　の順に個数を配列で作成してください。

$fruits = ["りんご" => 150, "みかん" => 50, "もも" => 750];
$count = [2, 3, 4];

// step2:単価を計算する関数を定義してください。
// 　　　引数はフルーツの単価・個数の２つ、返り値は計算した合計値を返します。

function calc($price, $number) {
  $total = $price * $number;
  return $total;
}

// step3:繰り返しを使ってそれぞれのフルーツを書き出してください。

$index = 0;
foreach ($fruits as $key => $value) {
		echo $key . "は" . calc($value, $count[$index]) . "です。";
    echo "<br>";
    $index++;
  }

?>

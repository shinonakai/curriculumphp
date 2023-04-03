<?php
  // Step 1: フルーツと単価の連想配列を作成し、各フルーツの個数を配列で作成する
$fruit_prices = ["りんご"=>"300円", "みかん"=>"150円", "もも"=> "3000円"];
$fruit_counts = ["りんご"=>"1", "みかん"=>"1", "もも"=> "1"];

// Step 2: 単価を計算する関数を定義する
function calculatePrice($price, $count) {
    return $price * $count;
}

// Step 3: 各フルーツの料金を計算する
foreach ($fruit_prices as $fruit => $price) {
    $count = $fruit_counts[$fruit];
    $total_price = calculatePrice($price, $count);
    echo "{$fruit}は{$total_price}円です。<br>";
}
  
?>
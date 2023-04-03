<?php

$fruit_prices = ["りんご"=>"300円", "みかん"=>"150円", "もも"=> "3000円"];
$fruit_counts = ["りんご"=>"1", "みかん"=>"1", "もも"=> "1"];

function calculatePrice($price, $count) {
    return $price * $count;
}

foreach ($fruit_prices as $fruit => $price) {
    $count = $fruit_counts[$fruit];
    $total_price = calculatePrice($price, $count);
    echo "{$fruit}は{$total_price}円です。<br>";
}
  
?>
<?php
$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30;

$totalCost1 = $quantity1 * $price1;
$totalCost2 = $quantity2 * $price2;

if ($totalCost1 < $totalCost2) {
    echo "Deal 1 is the best deal with a total cost of $" . $totalCost1 . ".";
} elseif ($totalCost2 < $totalCost1) {
    echo "Deal 2 is the best deal with a total cost of $" . $totalCost2 . ".";
} else {
    echo "Both deals have the same total cost of $" . $totalCost1 . ".";
}

?>
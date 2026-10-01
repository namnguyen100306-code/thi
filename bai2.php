<?php

$products = [
    [
        "name" => "Laptop",
        "price" => 15000000,
        "quantity" => 2
    ],
    [
        "name" => "Chuột",
        "price" => 300000,
        "quantity" => 5
    ],
    [
        "name" => "Bàn phím",
        "price" => 500000,
        "quantity" => 3
    ]
];

foreach ($products as $product) {
    echo "Tên: " . $product["name"] . "<br>";
    echo "Giá: " . $product["price"] . "<br>";
    echo "Số lượng: " . $product["quantity"] . "<br><br>";
}

function totalValue($products)
{
    $total = 0;

    foreach ($products as $product) {
        $total += $product["price"] * $product["quantity"];
    }

    return $total;
}

echo "Tổng giá trị: " . totalValue($products) . " VNĐ";

?>
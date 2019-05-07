<?php

$catalog = [
    [   'name' => 'Jeans',
        'price' => '30',
        'description' => 'Blue',
        'discount' => '10',
    ],
    [   'name' => 'Jacket',
        'price' => '40',
        'description' => 'Black',
        'discount' => '20',     
    ],
    [   'name' => 'Shirt',
        'price' => '30',
        'description' => 'Green',
        'discount' => '5',     
    ],
    [   'name' => 'Dress',
        'price' => '30',
        'description' => 'Pink',
        'discount' => '10',     
    ],
];

foreach ($catalog as $product_index => $product_value) {
        $catalog[$product_index]['price_with_discount'] = $catalog[$product_index]['price'] * (100 - $catalog[$product_index]['discount']) / 100; 
    };
var_dump($catalog);

?>
<html>
<head>
    <meta charset="UTF-8S">
    <title>Hey Hey</title>
    <style>
        .produktas {
            display: flex;
            height: 50px;
            text-align: center;
            font-weight: bold;
        }
        .stulpelis {
            border: 1px solid black;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <?php foreach ($catalog as $product): ?>
    <div class="produktas">
       <span class="stulpelis">
           <?php print $product['name']; ?>
       </span>
        <span class="stulpelis">
            <?php print $product['price'] . ' Eur'; ?>
        </span>
        <span class="stulpelis">
             <?php print $product['description']; ?>
        </span>
        <span class="stulpelis">
            <?php print $product['discount'] . ' %'; ?>
        </span>
        <span class="stulpelis">
            <?php print $product['price_with_discount'] . ' Eur'; ?>
        </span>
    </div>
    <?php endforeach; ?>
</body>
</html>
<?php

	$dishes = [
		'nut_salad' => [
			'name' => 'Nut Salad',
			'price' => 3.44,
			'ingredients' => [
				'Nuts',
				'Joghurt'
			]
		],
		'bulldish' => [
			'name' => 'Bulldish',
			'price' => 4.77,
			'ingridients' => [
				'Rice',
				'Soja sauce'
			]
		]
	];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<ul>
		<?php foreach ($dishes as $dishes_index =>$dish): ?>
			<li>
			<?php print $dishes_index; ?>
                            <ul>
				<?php foreach ($dish as $dish_index => $parameters): ?>
                                    <li>
					<?php print $dish_index;?>
                                    <?php if (is_array($parameters)):?>
                                    <ul>
                                        <?php foreach ($parameters as $ingri): ?>
                                        <li>
                                            <?php print $ingri; ?>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php else:?>
                                        <?php print $parameters  . '<br>';?>
                                    <?php endif; ?>
                                    </li>
				<?php endforeach; ?>
                            </ul>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>
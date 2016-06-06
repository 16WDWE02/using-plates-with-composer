<?php

require 'vendor/autoload.php';

$productCount = 14;
$allProducts = [
	
	[
		'title'=>'Teddy bear',
		'description'=>'Soft and cuddly <script>alert("HI")</script>'
	],
	[
		'title'=>'Battleship',
		'description'=>'A game of strategy at sea!'
	]

];





$plates = new League\Plates\Engine('app/templates');

echo $plates->render('products', [

	'totalProducts'=>$productCount,
	'products'=>$allProducts

]);









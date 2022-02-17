<?php

namespace app\classes;

use app\database\models\Read;
use app\interfaces\CartInterface;

class CartProducts
{
	public function products(CartInterface $cartInterface)
	{
		$productsInCart = $cartInterface->cart();
		// $productsInDatabase = require '../app/helpers/products.php';
		$productsInDatabase = (new Read)->all('products');

		$products = [];
		$total = 0;

		foreach ($productsInCart as $productId => $quantity) {
			$product = [...array_filter($productsInDatabase, fn ($product) => (int)$product->id === $productId)];

			// $product = $productsInDatabase[$productId];
			$products[] = [
				'id' => $productId,
				'product' => $product[0]->name,
				'price' => $product[0]->price,
				'qty' => $quantity,
				'subtotal' => $quantity * $product[0]->price,
			];
			$total += $quantity * $product[0]->price;
		}

		return [
			'products' => $products,
			'total' => $total
		];
	}
}

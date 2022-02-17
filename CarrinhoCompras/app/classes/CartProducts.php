<?php

namespace app\classes;

use app\interfaces\CartInterface;

class CartProducts
{
	private $cartInterface;

	public function __construct(CartInterface $cartInterface)
	{
		$this->cartInterface = $cartInterface;
	}

	public function products()
	{
		$productsInCart = $this->cartInterface->cart();
		$productsInDatabase = require '../app/helpers/products.php';

		$products = [];
		$total = 0;

		foreach ($productsInCart as $productId => $quantity) {
			$product = $productsInDatabase[$productId];
			$products[] = [
				'id' => $productId,
				'product' => $product['name'],
				'price' => $product['price'],
				'qty' => $quantity,
				'subtotal' => $quantity * $product['price'],
			];
			$total += $quantity * $product['price'];
		}

		return [
			'products' => $products,
			'total' => $total
		];
	}
}

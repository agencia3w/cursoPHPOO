<?php

class Product
{
    private $priceProduct;
    private $discountProduct;

    public function setPriceProduct($priceProduct)
    {
        if (is_numeric($priceProduct) and $priceProduct > 0) {
            $this->priceProduct = $priceProduct - $this->discountProduct;
        } else {
            throw new Exception('Passe um valor correto');
        }
    }

    public function getPriceProduct()
    {
        return $this->priceProduct;
    }

    public function setDiscountProduct($discountProduct)
    {
        if (is_numeric($discountProduct) and $discountProduct > 0) {
            $this->discountProduct = $discountProduct;
        } else {
            throw new Exception('Informe um desconto correto');
        }
    }
}

try {
    $product = new Product;
    $product->setDiscountProduct(10);
    $product->setPriceProduct(30);
    echo $product->getPriceProduct();
} catch (Exception $e) {
    return $e->getMessage();
}

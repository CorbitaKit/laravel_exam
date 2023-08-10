<?php

namespace App\Services;
use App\Models\Product;
class ProductService
{
    public function doCreateProduct(array $data): object
    {
        return Product::create($data);
    }
}
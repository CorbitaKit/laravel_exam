<?php

namespace App\Http\Controllers;
use App\Services\ProductService;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function create(ProductRequest $request)
    {
        $this->productService->doCreateProduct($request->all());
    }
}

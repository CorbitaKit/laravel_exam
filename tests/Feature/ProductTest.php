<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    public function test_if_can_add_product()
    {
        $product = $this->fetchProductDetails();
        $response = $this->postJson('product.create', $product)
                    ->assertCreated();

        $response->assertDatabaseHas('products', [
            $product
        ]);
    }

    // public function test_validation_for_product_name()
    // {
    //     $product = $this->fetchProductDetails();
    //     $product['name'] = null;

    //     $response = $this->postJson('product.create', $product)
    //                  ->assert(422);
    //     $response->assertSessionHasErrors(['name']);
    // }

    // public function test_validation_for_product_quantity()
    // {
    //     $product = $this->fetchProductDetails();
    //     $product['quantity'] = null;

    //     $response = $this->postJson('product.create', $product)
    //                 ->assert(422);
        
    //     $response->assertSessionHasErrors(['quantity']);
    // }

    // public function test_validation_for_integer_product_quantity()
    // {
    //     $product = $this->fetchProductDetails();
    //     $product['quantity'] = '1';

    //     $response = $this->postJson('product.create', $product)
    //                 ->assert(422);
        
    //     $response->assertSessionHasErrors(['quantity']);
    // }

    // public function test_validation_for_product_description()
    // {
    //     $product = $this->fetchProductDetails();
    //     $product['description'] = null;

    //     $response = $this->postJson('product.create', $product)
    //                 ->assert(422);
    //     $response->assertSessionHasErrors(['description']);
    // }


}

<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    
    public function fetchProductDetails(): array
    {
        return  [
            'name' => 'Test Product',
            'quantity' => 1,
            'description' => 'Test Description',
            'img_url' => '/test/image/url'
        ];
    }
}

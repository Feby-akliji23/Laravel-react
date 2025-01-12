<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleFeatureTest extends TestCase
{
    public function test_example_feature()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

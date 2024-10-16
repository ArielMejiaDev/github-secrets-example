<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiKeyTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        dump(config('api.key'));

        $this->assertEquals(123, config('api.key'));
    }
}

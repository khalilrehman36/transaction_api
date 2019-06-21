<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Trasactions extends TestCase
{
    /**
     * Tests transaction. get list of transactions.
     *
     * @return void
     */
    public function testShopIndex()
    {
        $response = $this->json('GET', '/api/get/transactions');
        $response
            ->assertStatus(201);
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;


class ListarID extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function user_auth_can_list_id()
    {

        $response = $this->getJson('/api/testes');

        $response->assertStatus(200);
    }
}

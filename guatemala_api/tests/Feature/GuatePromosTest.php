<?php

namespace Tests\Feature;

use App\User;
use App\GuatePromos;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class GuatePromosTest extends TestCase
{
    public function testLogIn()
    {
        $response = $this->json('POST', 'api/login')
            ->assertStatus(422)
            ->assertJsonFragment([
                'email' => ['The email field is required.'],
                'password' => ['The password field is required.'],
            ]);
    }

    public function testUserLoginSuccessfully()
    {
        $user = factory(User::class)->create([
            'email' => 'pablo@go.com',
            'password' => 'simple123!',
            'name' => 'Pablo Reyes'
        ]);

        $payload = ['email' => 'pablo@go.com', 'password' => 'simple123!'];

        $this->json('POST', 'api/login', $payload)
            ->assertStatus(200);
    }

    public function testPromosListWithoutToken()
    {
        $promo1 = factory(GuatePromos::class)->create([
            "title" => "2x1 todos los sabados",
            "price" => "25",
            "address" => "Av. siempre viva 3-91",
            "latitude" => "20.29302902",
            "longitude" => "20.93020292"
        ]);

        $this->json('GET', 'api/promo')
            ->assertStatus(401);
    }

    public function testPromosListToken()
    {
        $user = factory(User::class)->create([
            'email' => 'pablo@go.com',
            'password' => 'simple123!',
            'name' => 'Pablo Reyes'
        ]);
        $token = $user->createToken('TestToken')->accessToken;
        $headers = ['Authorization' => "Bearer $token"];

        $promo1 = factory(GuatePromos::class)->create([
            "title" => "2x1 todos los sabados",
            "price" => "25",
            "address" => "Av. siempre viva 3-91",
            "latitude" => "20.29302902",
            "longitude" => "20.93020292"
        ]);

        $this->json('GET', '/api/promo', [], $headers)->assertStatus(200);
    }
}

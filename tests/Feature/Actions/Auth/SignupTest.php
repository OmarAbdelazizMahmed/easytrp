<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use function Pest\Faker\faker;
uses(RefreshDatabase::class);


it('can sign up a new user', function () {
    $response = $this->post('/api/auth/phone/signup', [
        'phone'=> faker()->numerify('011########'),
        'country_code' => '+20'
    ]);

    $response->assertStatus(201);
    $response->assertJsonStructure([
        'data' => [
            'id',
            'uuid',
            'name',
            'phone',
            'email',
            'email_verified_at',
            'created_at',
            'updated_at',
        ],
    ]);

    $this->assertDatabaseHas('travels', [
        'uuid' => $response->json('data.uuid'),
    ]);

});



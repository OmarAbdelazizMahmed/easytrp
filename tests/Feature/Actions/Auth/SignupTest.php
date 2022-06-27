<?php

use App\Models\Traveler;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use function Pest\Faker\faker;
use function Pest\Laravel\post;
use function Pest\Laravel\postJson;
use Propaganistas\LaravelPhone\PhoneNumber;

uses(RefreshDatabase::class);


it('can sign up a new user', function () {
    $response = postJson('/api/auth/phone/signup',[
        'phone'=> faker()->numerify('011########'),
        'country_code' => '20'
    ]);
    $response->assertStatus(201);
    $response->assertJsonStructure([
        'data' => [
            'id',
            'uuid',
            'first_name',
            'last_name',
            'phone',
            'email',
            'created_at',
            'updated_at',
        ],
    ]);

    $this->assertDatabaseHas('travelers', [
        'uuid' => $response->json('data.uuid'),
    ]);

});


it('can not sign up a new user with an existing phone', function () {
    $phoneNumber = faker()->numerify('011########');
    $phone = PhoneNumber::make(ltrim($phoneNumber, '0'), 'EG')->formatInternational();
    $traveler = Traveler::factory()->create(['phone' => $phone]);

    $response = postJson('/api/auth/phone/signup',[
        'phone'=> $phoneNumber,
        'country_code' => '20'
    ]);
    $response->assertStatus(422);
    $response->assertJsonStructure([
        'message',
    ]);

});


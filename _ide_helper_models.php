<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Traveler
 *
 * @property int $id
 * @property string $uuid
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $phone
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\TravelerFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Traveler newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Traveler newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Traveler query()
 * @method static \Illuminate\Database\Eloquent\Builder|Traveler whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Traveler whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Traveler whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Traveler whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Traveler whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Traveler whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Traveler wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Traveler wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Traveler whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Traveler whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Traveler whereUuid($value)
 */
	class Traveler extends \Eloquent {}
}


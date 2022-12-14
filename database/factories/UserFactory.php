<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => 'sadmin',
            'email' => 'super_admin@gmail.com',
            'role' => config('setting.user.roles.root.id'),
            'status' => config('setting.user.status.active.id'),
            'email_verified_at' => now(),
            'password' => '123456',
            'remember_token' => Str::random(10),
        ];
    }
}

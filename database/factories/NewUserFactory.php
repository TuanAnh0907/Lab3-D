<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewUserFactory extends Factory
{
    protected $user = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            //
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('123'),
            'is_admin'=>'0',
            'created_at' => $this->faker->dateTimeAD(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }


}

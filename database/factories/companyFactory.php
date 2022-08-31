<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\company>
 */
class companyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'name' => $this -> faker -> company(),
           'email' =>$this -> faker -> email(),
           'website' => $this -> faker -> url(),
           'location' => $this -> faker -> city(),
           'description' => $this -> faker -> paragraph()
        ];
    }
}

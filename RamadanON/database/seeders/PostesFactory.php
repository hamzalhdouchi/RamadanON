<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Postes>
 */
class PostesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Titre'=>$this->faker->jobTitle,
            'content' => $this->faker->paragraph,
            'nome_createur'=>$this->faker->name(),
            'image'=>'https://picsum.photos/id/237/200/300',
        ];
    }
}

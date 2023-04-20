<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        /* $imagen = 'https://api.lorem.space/image/game?w=600&h=600&key=' . Str::random(64); */
        $imagen = 'https://picsum.photos/600/600?random=' . Str::random(64) . '.jpg';
        
        return [
            'url' => $imagen
        ];
    }
}

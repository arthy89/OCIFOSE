<?php

namespace Database\Factories;

use App\Models\Remitente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RemitenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     
     * 
     * @return array<string, mixed>
     */

    protected $model = Remitente::class;

    public function definition()
    {
        return [
            'rem_name' => $this->faker->sentence(), 
            'rem_apell' => $this->faker->sentence(), 
            'rem_cel' => $this->faker->sentence(),
            'rem_correo' => $this->faker->sentence(),
            'rem_ofi_ent' => $this->faker->randomElement(['DREP', 'UGEL', 'Colegio', 'ISTP']),
            'rem_ofi_ent_det' => $this->faker->paragraph()
        ];
    }
}

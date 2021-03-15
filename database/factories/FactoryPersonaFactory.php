<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;
Use Faker\Factory as Faker;

class PersonaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker=Faker::create("es_Es");
        return [
            "Nombre"=>$faker->name,
            "Email"=>$faker->mail,
            "EDAD"=>$faker->age
            //
        ];
    }
}
